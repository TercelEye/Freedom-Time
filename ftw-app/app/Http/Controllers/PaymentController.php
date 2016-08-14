<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Payment;


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
			return redirect('dashboard');	
		}			
		
	   if(session('payment')!=""){
			$errors[] =  $request->session()->get('payment'); 
	   }
	    return view('payment/card_form',compact('errors'));
   }
   public function paynow_process(Request $request){
	  $payemnt  = new \App\Payment;
	  
	  $CardNumber = $request->CardNumber;
	  $ExpirationDate =  $request->ExpirationDate;
	  $CardCode =  $request->CardCode;
	  $status = $payemnt->user_billing_manual($CardNumber,$ExpirationDate,$CardCode);
	  if($status == true){
		  //add funds  
	  }
	  return \Redirect::back()->with('status',$status);
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
