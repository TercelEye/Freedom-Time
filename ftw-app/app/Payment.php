<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Fund; 
use App\Invoice;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


 define("AUTHORIZENET_LOG_FILE", "phplog");
class Payment  {
	private $_MERCHANT_LOGIN_ID = "279TGXzQfQ7Z";
	private $_MERCHANT_TRANSACTION_KEY = "94KWnpKgsQY3889Y";
	
	private $_fee =39;
	private $_interval =30; // days
	
	private $_inviter_commision = 5;
	private $_parent_inviter_commision = 3;
	
	public function set_funds($user_id,$amount){
		$funds = \App\Fund::where('user_id',$user_id)->first();
		if($funds == false) {
			//add new funds	
			$new_fund = new \App\Fund;
			$new_fund->user_id = $user_id;
			$new_fund->balance = $amount;
			$new_fund->old_balance = 0;
			$new_fund->save();
			return true;
		}else {
			//update funds
			$funds->old_balance = $funds->balance;
			$funds->balance = 	$funds->balance + $amount;
			$funds->save();
			return true;
		}
		return false;
	}
	
	/*
	 Add funds to user
	*/
	public function add_funds($invoice_id){
		//invoice
		$invoice = \App\Invoice::find($invoice_id);
		//$inviter
		$affiliate = \App\Affiliates::where('user_id',$invoice->user_id)->first();
		if($affiliate !=false){
			//set inviter funds
			$inviter_id = $affiliate->invited_by;
			$this->set_funds($inviter_id,$this->_inviter_commision);
			
			//parent inviter
			$parent_affiliate = \App\Affiliates::where('user_id',$inviter_id)->first();
			if($parent_affiliate !=false){
				//set parent inviter funds
				$parent_inviter_id = $parent_affiliate->invited_by;
				$this->set_funds($parent_inviter_id,$this->_parent_inviter_commision);
			}
		
		}
		
		
		return true;
		
	}
	
	/*
	 Find Invoice -> Charge Invoice
	 Create Invoice -> Charge Invoice
	*/
	public function charge_current_user(){
	  $auth_user = \Auth::user();
	  $found_invoice = \App\Invoice::where('user_id',$auth_user->id)
	  					->where('start_date','<=',date('Y-m-d'))
						->where('end_date','>=',date('Y-m-d'))
						->first();
		if($found_invoice ==false){
			$today = date('Y-m-d');
			$end_date = date('Y-m-d',strtotime($today.' +'.$this->_interval." days"));
			$invoice = new \App\Invoice;
			$invoice->start_date = $today;
			$invoice->end_date = $end_date;
			$invoice->amount = $this->_fee;
			$invoice->payment_status = 'Pending';
			$invoice->user_id = $auth_user->id;
			$invoice->save();
			
			return $this->charge_from_invoice($invoice->id);	
		}else if($found_invoice->payment_status !="Paid"){
			return $this->charge_from_invoice($found_invoice->id);	
		}else {
			\Session::flash('payment', 'No pending invoices');
			return false;
		}
		return false;
	}
	
	public function user_billing_manual($CardNumber,$ExpirationDate,$CardCode){
		
		$auth_user = \Auth::user();
	    $user = \App\User::find($auth_user->id);
		
		if($user->profileid == ""){
			//create profile
			return $this->first_payment($user,$CardNumber,$ExpirationDate,$CardCode);
		}else {
			//updatebilling	
			$payment = $this->updateCustomerPaymentProfile($user,$CardNumber,$ExpirationDate,$CardCode);
			if($payment!=false){
				
			  $user->paymentprofileid = $payment['PaymentProfileId'];
			  $user->save();
			  
			  //charge 
			  return $this->charge_current_user();
			}
		}
		
	}
	
	//create customer profile and payment
	public function first_payment($user,$CardNumber,$ExpirationDate,$CardCode){
	  $email = $user->email;
	  // Common setup for API credentials
	  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
	  $merchantAuthentication->setName($this->_MERCHANT_LOGIN_ID);
      $merchantAuthentication->setTransactionKey($this->_MERCHANT_TRANSACTION_KEY);
      $refId = 'ref' . time();
     

	  // Create the payment data for a credit card
	  $creditCard = new AnetAPI\CreditCardType();
	  $creditCard->setCardNumber($CardNumber);
	  $creditCard->setExpirationDate($ExpirationDate);
	  $creditCard->setCardCode($CardCode);
	  $paymentCreditCard = new AnetAPI\PaymentType();
	  $paymentCreditCard->setCreditCard($creditCard);

	  // Create the Bill To info
	  $billto = new AnetAPI\CustomerAddressType();
	  $billto->setFirstName($user->fname);
	  $billto->setLastName($user->lname);
	  //$billto->setCompany("Souveniropolis");
	  $billto->setAddress($user->address);
	  $billto->setCity($user->city); 
	  //$billto->setState("TX");
	  $billto->setZip($user->zip_code);
	  $billto->setCountry("USA");
	  
	 // Create a Customer Profile Request
	 //  1. create a Payment Profile
	 //  2. create a Customer Profile   
	 //  3. Submit a CreateCustomerProfile Request
	 //  4. Validate Profiiel ID returned

	  $paymentprofile = new AnetAPI\CustomerPaymentProfileType();

	  $paymentprofile->setCustomerType('individual');
	  $paymentprofile->setBillTo($billto);
	  $paymentprofile->setPayment($paymentCreditCard);
	  $paymentprofiles[] = $paymentprofile;
	  $customerprofile = new AnetAPI\CustomerProfileType();
	  $customerprofile->setDescription("Freedomtime Customer");

	  //$customerprofile->setMerchantCustomerId("M_".$email);
	  $customerprofile->setEmail($email);
	  $customerprofile->setPaymentProfiles($paymentprofiles);
	  


	  $request = new AnetAPI\CreateCustomerProfileRequest();
	  $request->setMerchantAuthentication($merchantAuthentication);
	  $request->setRefId( $refId);
	  $request->setProfile($customerprofile);
	  $controller = new AnetController\CreateCustomerProfileController($request);
	  $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
	  if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") )
	  {

		  $profile_id = $response->getCustomerProfileId();	
		  $paymentProfiles = $response->getCustomerPaymentProfileIdList();
		  $paymentprofileid =  $paymentProfiles[0];
		  
		  //save profile ids
		  $user->profileid = $profile_id;
		  $user->paymentprofileid = $paymentprofileid;
		  $user->save();
		  
		  return $this->charge_current_user();
		 // return array('profile_id'=>$profile_id,'paymentprofileid'=>$paymentprofileid);
		  	
		  //echo "Succesfully create customer profile : " . $profile_id . "\n";
		 
		  //echo "SUCCESS: PAYMENT PROFILE ID : " .$paymentprofileid  . "\n";
		  
		  //echo "<br><br>";
		  $tresponse = $this->chargeCustomerProfile($profile_id,$paymentprofileid,15);
		  print_r($tresponse);
	   }
	  else
	  {
		  $errorMessages = $response->getMessages()->getMessage();
		  \Session::flash('payment',$errorMessages[0]->getText());
		  return false;
		  echo "ERROR :  Invalid response\n";
		  
          echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "\n";
	  }
	  return $response;
  }
   public function charge_from_invoice($invoice_id){
	   $invoice = \App\Invoice::find($invoice_id);
	   $customer = $invoice->customer;
	   $amount = $invoice->amount;
	   $profileid = $customer->profileid;
	   $paymentprofileid = $customer->paymentprofileid;
	   
	   $res=$this->chargeCustomerProfile($profileid,$paymentprofileid,$amount);
	   
	   if($res !=false){
		   $inv = \App\Invoice::find($invoice_id);
		   $inv->payed_at = date('Y-m-d H:i:s');
		   $inv->payment_status = "Paid";
		   $inv->trans_id = $res['TRANS_ID'];
		   $inv->auth_code = $res['AUTH_CODE'];
		   $inv->save();
		   
		   //add funds 
		   $this->add_funds($inv->id);
		   return true;
		}
		 \Session::flash('payment', 'Card declined by issuer');
		return false;
	}
   function updateCustomerPaymentProfile($user,$CardNumber,$ExpirationDate,$CardCode){
	  
	  $customerProfileId =$user->profileid;
	  $customerPaymentProfileId =$user->paymentprofileid;
	  
	  // Common setup for API credentials
	  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
	  $merchantAuthentication->setName($this->_MERCHANT_LOGIN_ID);
      $merchantAuthentication->setTransactionKey($this->_MERCHANT_TRANSACTION_KEY);
      $refId = 'ref' . time();

	  //Set profile ids of profile to be updated
	  $request = new AnetAPI\UpdateCustomerPaymentProfileRequest();
	  $request->setMerchantAuthentication($merchantAuthentication);
	  $request->setCustomerProfileId($customerProfileId);
	  $controller = new AnetController\GetCustomerProfileController($request);


	  // We're updating the billing address but everything has to be passed in an update
	  // For card information you can pass exactly what comes back from an GetCustomerPaymentProfile
	  // if you don't need to update that info
	  $creditCard = new AnetAPI\CreditCardType();
	  $creditCard->setCardNumber($CardNumber);
	  $creditCard->setExpirationDate($ExpirationDate);
	  $creditCard->setCardCode($CardCode);
	  $paymentCreditCard = new AnetAPI\PaymentType();
	  $paymentCreditCard->setCreditCard($creditCard);

	  // Create the Bill To info for new payment type
	  $billto = new AnetAPI\CustomerAddressType();
	  $billto->setFirstName($user->fname);
	  $billto->setLastName($user->lname);
	  //$billto->setCompany("Souveniropolis");
	  $billto->setAddress($user->address);
	  $billto->setCity($user->city);
	  //$billto->setState("TX");
	  $billto->setZip($user->zip_code);
	  $billto->setCountry("USA");
	  

	  // Create the Customer Payment Profile object
	  $paymentprofile = new AnetAPI\CustomerPaymentProfileExType();
	  $paymentprofile->setCustomerPaymentProfileId($customerPaymentProfileId);
	  $paymentprofile->setBillTo($billto);
	  $paymentprofile->setPayment($paymentCreditCard);

	  // Submit a UpdatePaymentProfileRequest
	  $request->setPaymentProfile( $paymentprofile );

	  $controller = new AnetController\UpdateCustomerPaymentProfileController($request);
	  $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
	  if (($response != null) && ($response->getMessages()->getResultCode() == "Ok") )
	  {
		 //echo "Update Customer Payment Profile SUCCESS: " . "\n";
		 
		 // Update only returns success or fail, if success
		 // confirm the update by doing a GetCustomerPaymentProfile
		 $getRequest = new AnetAPI\GetCustomerPaymentProfileRequest();
		 $getRequest->setMerchantAuthentication($merchantAuthentication);
		 $getRequest->setRefId( $refId);
		 $getRequest->setCustomerProfileId($customerProfileId);
		 $getRequest->setCustomerPaymentProfileId($customerPaymentProfileId);

		 $controller = new AnetController\GetCustomerPaymentProfileController($getRequest);
		 $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
		 if(($response != null)){
			  if ($response->getMessages()->getResultCode() == "Ok")
			  {
				  return array('PaymentProfileId'=>$response->getPaymentProfile()->getCustomerPaymentProfileId());
				  /*echo "GetCustomerPaymentProfile SUCCESS: " . "\n";
				  echo "Customer Payment Profile Id: " . $response->getPaymentProfile()->getCustomerPaymentProfileId() . "\n";
				  echo "Customer Payment Profile Billing Address: " . $response->getPaymentProfile()->getbillTo()->getAddress(). "\n";*/
			  }
			  else
			  {
				 \Session::flash('payment', $errorMessages[0]->getText());
				  return false;
				/*  echo "GetCustomerPaymentProfile ERROR :  Invalid response\n";
				  $errorMessages = $response->getMessages()->getMessage();
		          echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "\n";*/
			  }
		  }
		  else{
			  \Session::flash('payment', 'Something went wrong');
			  return false;
			  echo "NULL Response Error";
		  }

	   }
	  else
	  {
		   
		 
		  $errorMessages = $response->getMessages()->getMessage();
		  \Session::flash('payment', 'Invalid card information');
	
				  return false;
		 echo "Update Customer Payment Profile: ERROR Invalid response\n";		  
		  echo "Response : " . $errorMessages[0]->getCode() . "  " .$errorMessages[0]->getText() . "\n";
	  }
	  return false;
  }
   function chargeCustomerProfile($profileid, $paymentprofileid,$amount){
    // Common setup for API credentials
    $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
    $merchantAuthentication->setName($this->_MERCHANT_LOGIN_ID);
    $merchantAuthentication->setTransactionKey($this->_MERCHANT_TRANSACTION_KEY);
    $refId = 'ref' . time();

    $profileToCharge = new AnetAPI\CustomerProfilePaymentType();
    $profileToCharge->setCustomerProfileId($profileid);
    $paymentProfile = new AnetAPI\PaymentProfileType();
    $paymentProfile->setPaymentProfileId($paymentprofileid);
    $profileToCharge->setPaymentProfile($paymentProfile);


    $transactionRequestType = new AnetAPI\TransactionRequestType();
    $transactionRequestType->setTransactionType( "authCaptureTransaction"); 
    $transactionRequestType->setAmount($amount);
    $transactionRequestType->setProfile($profileToCharge);

    $request = new AnetAPI\CreateTransactionRequest();
    $request->setMerchantAuthentication($merchantAuthentication);
    $request->setRefId( $refId);
    $request->setTransactionRequest( $transactionRequestType);
    $controller = new AnetController\CreateTransactionController($request);
    $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
    if ($response != null)
    {
      $tresponse = $response->getTransactionResponse();
      if (($tresponse != null) && ($tresponse->getResponseCode()== "1") ) {

		return array('TRANS_ID'=>$tresponse->getTransId(),'AUTH_CODE'=>$tresponse->getAuthCode());
      }
      elseif (($tresponse != null) && ($tresponse->getResponseCode()=="2") )
      {
		  \Session::flash('payment', 'Card declined by issuer');
		  return false;
         //echo  "ERROR" . "\n";
      }
      elseif (($tresponse != null) && ($tresponse->getResponseCode()=="4") )
      {
		  \Session::flash('payment', 'HELD FOR REVIEW');
		  return false;
          //echo  "ERROR: HELD FOR REVIEW:"  . "\n";
      }
    }
    else
    {
		\Session::flash('payment', 'Something went wrong');
		return false;
      //echo "no response returned";
    }
    return false;
  }
	
	/*
	Send Payment Status Email
	*/
	public function payment_notification($invoice,$status = false){
		if($status==true){
			//send payment complete email
			$data['invoice'] = $invoice;
			Mail::send('emails.invoice_paid', $data, function ($message) use ($invoice) {
				$message->to($invoice->customer()->email);
				$message->subject('Become a Business Partner');

			});
		}else {
			//payment desline
			
		}
	}
		
}
