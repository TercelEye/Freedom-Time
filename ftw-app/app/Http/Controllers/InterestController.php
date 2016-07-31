<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Application;

use App\Http\Requests;

class InterestController extends Controller
{
	/****** only products *******/
    public function only_product(Request $request){
		$invitation_id = \Crypt::decrypt($request->invitation);
		$invitaion = \App\Invitation::where('id',$invitation_id)->with('sender')->first();
		if (session('success')){
			return view('interest/thanks',compact('invitaion'));
		}else {
			return view('interest/only_product',compact('invitaion'));
		}
	}
	
	public function store_only_product(Request $request){
		
		
 		$validator = Validator::make($request->all(), [
          'intrest_products' => 'required',
			'note' => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return \Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		//store to database
		$invitation_id = \Crypt::decrypt($request->invitation);
		$invitaion = \App\Invitation::find($invitation_id);
		$invitaion->intrest_products = json_encode($request->intrest_products);
		$invitaion->note = $request->note;
		$invitaion->quality_check = $request->quality_check;
		$invitaion->feedback = "Blue";
		$invitaion->save();
		
		//send email
		$invitation_id = \Crypt::decrypt($request->invitation);
		$invitaion = \App\Invitation::where('id',$invitation_id)->with('sender')->first();
		$data['invitaion'] = $invitaion;
		Mail::send('emails.interest_only_producst', $data, function ($message) use ($invitaion) {
			$message->from('noreply@freedomtimeandwealth.com', 'Freedom Time');
			$message->subject('Intrest Only Products :: Request more info');
			$message->to($invitaion->sender->email);
		});
		return \Redirect::back()->with('success',true);
	}
	
	/*********** FIll Form *****************/
	
	public function form(Request $request){
		$invitation_id = \Crypt::decrypt($request->invitation);
		$invitaion = \App\Invitation::where('id',$invitation_id)->with('sender')->first();
		if (session('success')){
			return view('interest/thanks',compact('invitaion'));
		}else {
			return view('interest/form',compact('invitaion'));
		}
	}
	public function store_form(Request $request){
		$invitation_id = \Crypt::decrypt($request->invitation);
		$validator = Validator::make($request->all(), [
          'first_name' => 'required|min:5',
			'last_name' => 'required|min:5',
        ]);
		
		 $validator->after(function  ($validator) use ($request){
			if(count($request->all()) < 26)
				$validator->errors()->add('all_fields', 'Please check if you\'ve filled all the fields with valid information and try again. Thank you.'.count($request->all()));
		 });
		 

        if ($validator->fails()) {
            return \Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }
		$post = $request->all();
		$post['invitation_id']=$invitation_id;
		$insert = \App\Application::create($post);
		
		//store to database
		$invitaion = \App\Invitation::find($invitation_id);
		$invitaion->feedback = ($request->click == 1 ? "Green" : "Yellow");
		$invitaion->save();
		
		//send email
		$application = \App\Application::find($insert->id);
		$data['application'] = $application;
		$data['invitaion'] = $invitaion;
		Mail::send('emails.application', $data, function ($message) use ($invitaion) {
			$message->from('noreply@freedomtimeandwealth.com', 'Freedom Time');
			$message->subject('Freedom Time Application Form :: Request more info');
			$message->to($invitaion->sender->email);
		});
		return \Redirect::back()->with('success',true);
	}
	
	public function cancel_invitation(Request $request){
		//store to database
		$invitation_id = \Crypt::decrypt($request->invitation);
		$invitaion = \App\Invitation::find($invitation_id);
		$invitaion->feedback =  "Red" ;
		$invitaion->save();
		return \Redirect::to('/');
	}
	
}
