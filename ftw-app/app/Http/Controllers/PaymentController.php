<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Payment;
use Auth;
Use App\User;


class PaymentController extends Controller {
   
   public function billing_address(){
	    $user = \Auth::user();
	   	return view('payment/billing_address',compact('user'));
	}
   
   //credit card form
   public function paynow(Request $request){
   	   $errors = array();
	    $auth_user = \Auth::user();
		$found_invoice = \App\Invoice::where('user_id',$auth_user->id)
	  					->where('start_date','<=',date('Y-m-d'))
						->where('end_date','>=',date('Y-m-d'))
						->where('payment_status','Paid')
						->first();
		if($found_invoice!=false){
			return redirect('user/paypal-email');	
		}			
		
	   if(session('payment')!=""){
			$errors[] =  $request->session()->get('payment'); 
	   }
	   $user = \Auth::user();

	    return view('payment/card_form',compact('errors','user'));
   }
   public function paynow_process(Request $request){
	  $payemnt  = new \App\Payment;
	  
	  $CardNumber = $request->CardNumber;
	  $ExpirationDate =  $request->year."-". $request->month;
	  $CardCode =  $request->CardCode;
	  $status = $payemnt->user_billing_manual($CardNumber,$ExpirationDate,$CardCode);
	  if($status == true){
		  //add funds  
	  }
	  return \Redirect::back()->with('status',$status);
   }

   //paypal email after billing
    public function paypal_email(){
    	return view('payment.paypal_email');
    }
   //store payapal email
   public function store_paypal_email(Request $request){

   		$this->validate($request,[
   			 'paypal_email' =>'required|email',
   		]);

		$auth_user = \Auth::user();
		$user = User::find($auth_user->id);
		$user->paypal_email = $request->paypal_email;
		$user->save();

		return redirect('dashboard');
   }


   public function chargeCreditCard($amount=12){

	   
	  $payemnt  = new \App\Payment;
	  $CardNumber = "4111111111111111";
		$ExpirationDate = "2038-12";
		$CardCode = 123;
	  $status = $payemnt->user_billing_manual($CardNumber,$ExpirationDate,$CardCode);
	  print_r($status);
  }
}
