<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Validator;
use App\User;
use App\Invoice;
use App\Fund;
use App\Affiliates;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{	
	public function login(Request $request){
		$auth = false;
		$credentials = $request->only('email', 'password');
		$message='<div class="alert alert-danger">Invalid username or password</div>';
		
	
		if (Auth::attempt(['email' => $request->email, 'password' =>$request->password], $request->has('remember'))  || Auth::attempt(['username' => $request->email, 'password' =>$request->password], $request->has('remember')) ) {
            // Authentication passed...
         	$auth = true; // Success
			$message='<div class="alert alert-success">Loging successfully</div>';
        }
		
		
		
		return response()->json([
				'auth' => $auth,
				'message' =>$message
		]);
		
	}
    public function dashboard(){
		
		$user = \Auth::user();
		$found_invoice = \App\Invoice::where('user_id',$user->id)
					->where('start_date','<=',date('Y-m-d'))
					->where('end_date','>=',date('Y-m-d'))
					->where('payment_status','Paid')
					->first();
		if($found_invoice==false && Auth::user()->is_admin != 1){
			return redirect('user/billing');	
		}
		$fund = \App\Fund::where('user_id',$user->id)->first();
		$invoices = \App\Invoice::where('user_id',$user->id)->get();
		
		$category = \App\TrainingCategory::with('training')->get();
					
		return view('dashboard',compact('user','fund','invoices','category'));
	}
	public function register(Request $request, $username){
		$user = \App\User::where('username', $username)->first();
		if($user==false){
			return redirect('/');
		}
		$invited_by = $user->id;
		return view('register',compact('username','invited_by'));
	}
	public function edit_information(Request $request){
		
		$messages = [
			'lname.required'    => 'The Last name field is required.',
			'lname.min'    => 'The Last name must be at least 4 characters.',
			'fname.required'    => 'The First name field is required.',
			'fname.min'    => 'The Last First must be at least 4 characters.',
		];
		
		$validator =   Validator::make($request->all(), [
			 'lname' => 'required|min:4',
			 'fname' => 'required|min:4',
			 'tel' => 'required|digits:10',
		 ],$messages);
		 
		 
		 $auth_user = \Auth::user();
						
		 $validator->after(function  ($validator) use ($auth_user){
			if($auth_user == false)
				$validator->errors()->add('auth', 'You are not authorized' );
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}else {
			$user = \App\User::find($auth_user->id);
			$user->fname= $request->fname;
			$user->lname= $request->lname;
			$user->tel= $request->tel;
			$user->save();
			
			$data['message'] = 'Your information update completed';
			$data['status']=true;
			return \Response::json($data, 200 ); // Status code here
		}
	}
	public function edit_address(Request $request){
		
		$messages = [
			'land_phone.required'    => 'The Phone field is required.',
			'land_phone.digits'    => 'The Phone must be 10 digits.',
		];
		
		$validator =   Validator::make($request->all(), [
			 'address' =>'required|min:4',
			 'city' => 'required|min:4',
			 'land_phone' => 'required|digits:10',
		 ],$messages);
		 
		 
		 $auth_user = \Auth::user();
						
		 $validator->after(function  ($validator) use ($auth_user){
			if($auth_user == false)
				$validator->errors()->add('auth', 'You are not authorized' );
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}else {
			$user = \App\User::find($auth_user->id);
			$user->address= $request->address;
			$user->city= $request->city;
			$user->zip_code= $request->zip_code;
			$user->save();
			
			$data['message'] = 'Your Address update completed';
			$data['status']=true;
			return \Response::json($data, 200 ); // Status code here
		}
	}
	public function edit_paypalemail(Request $request){
		
		$messages = [
			'land_phone.required'    => 'The Phone field is required.',
			'land_phone.digits'    => 'The Phone must be 10 digits.',
		];
		
		$validator =   Validator::make($request->all(), [
			 'paypal_email' =>'required|email',
		 ],$messages);
		 
		 
		 $auth_user = \Auth::user();
						
		 $validator->after(function  ($validator) use ($auth_user){
			if($auth_user == false)
				$validator->errors()->add('auth', 'You are not authorized' );
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}else {
			$user = \App\User::find($auth_user->id);
			$user->paypal_email= $request->paypal_email;
			$user->save();
			
			$data['message'] = 'Your Paypal Email update completed';
			$data['status']=true;
			return \Response::json($data, 200 ); // Status code here
		}
	}
	public function edit_password(Request $request){
		
		
		
		$validator =   Validator::make($request->all(), [
			'old_password'=>'required',
			'password' => 'required|min:6|confirmed',
		 ]);
		 
		 
		 $auth_user = \Auth::user();
						
		 $validator->after(function  ($validator) use ($request){
			  $user = \Auth::user();
			if (!Hash::check($request->old_password, $user->getAuthPassword())) {
				$validator->errors()->add('auth', 'Invalid Old password' );
			}
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}else {
			$user = \App\User::find($auth_user->id);
			$user->password= bcrypt($request->password);
			$user->save();
			
			$data['message'] = 'Your password update completed';
			$data['status']=true;
			return \Response::json($data, 200 ); // Status code here
		}
	}
}
