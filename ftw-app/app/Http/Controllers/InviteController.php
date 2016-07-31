<?php

namespace App\Http\Controllers;

use Crypt;
use Mail;
use App\User;
use App\Invitation;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;


class InviteController extends Controller
{
	private $error = 0;
	
	public function my_affilites(){
		$user = \Auth::user();
		$affilites = \App\Affiliates::where('invited_by',$user->id)->with('user')->get();
		$data['affilites']=$affilites;
		return view('user/my_affilites',$data);	
	}
	
	public function my_candidate(){
		$user = \Auth::user();
		$data['invitations'] =  \App\Invitation::where('user_id',$user->id)->get();
		return view('user/my_candidate',$data);
	}
	
	public function send_invitation(Request $request){
		$user = \Auth::user();
		
	
		$validator =   Validator::make($request->all(), [
			 'email' => 'required|email|unique:users',
		 ],
		 [ 
		 	'email.unique' => 'This :attribute email already registered'
		 ]);
		 
		  $invitation_exists = \App\Invitation::where('email', \Request::input('email') )
						->where('user_id',$user->id)
						->first();
						
		 $validator->after(function  ($validator) use ($invitation_exists){
			if($invitation_exists != false)
				$validator->errors()->add('email', 'Invitaion already Send' );
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}
		 
	
		//create invitaion
		$pass_code = uniqid();
		
		$invitation = new Invitation;
        $invitation->email = $request->email;
		$invitation->secret_pascode = $pass_code;
		$invitation->user_id = $user->id;
        $invitation->save();
		
		//send email
		$data['link'] = url('/?code='.$pass_code.'&email='.$request->email);
		$data['user'] = $user;
		$data['pass_code'] = $pass_code;
		$data['from'] = $user;
		$data['to_email'] =$request->email;
		Mail::send('emails.invitation', $data, function ($message) use ($request) {
			$message->from('noreply@freedomtimeandwealth.com', 'Freedom Time');
			$message->subject('You Got Invitaion From Freedom Time');
			$message->to($request->email);
		});
		
		
		//return 
		$response['message'] = 'Invitation sent successfully';
		$response['status']=true;
		return \Response::json($response, 200 ); // Status code here

	}
	
	public function send_affiliate(Request $request){
		$user = \Auth::user();
		
		$validator =   Validator::make($request->all(), [
			 'email' => 'required|email|unique:users',
		 ],
		 [ 
		 	'email.unique' => 'This :attribute email already registered'
		 ]);
		 
		 
		  $invitation_exists = \App\Invitation::where('email', \Request::input('email') )
						->where('user_id',$user->id)
						->first();
						
		 $validator->after(function  ($validator) use ($invitation_exists){
			if($invitation_exists != false)
				$validator->errors()->add('email', 'Invitaion already Send' );
		 });


		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}
		 
	
		//create invitaion
		$pass_code = uniqid();
		
		$invitation = new Invitation;
        $invitation->email = $request->email;
		$invitation->secret_pascode = $pass_code;
		$invitation->user_id = $user->id;
        $invitation->is_affiliate = 1;
		$invitation->save();
		
		//send email
		$data['link'] = url('/');
		$data['user'] = $user;
		$data['pass_code'] = $pass_code;
		$data['from'] = $user;
		$data['to_email'] =$request->email;
		Mail::send('emails.invitation', $data, function ($message) use ($request) {
			$message->from('noreply@freedomtimeandwealth.com', 'Freedom Time');
			$message->to($request->email);
		});
		
		
		//return 
		$response['message'] = 'Invitation sent successfully';
		$response['status']=true;
		return \Response::json($response, 200 ); // Status code here

	}
	
    public function video(Request $request){
		
		
		try {
			$invitation_id = \Crypt::decrypt($request->invitation);
			$invitaion = \App\Invitation::where('id',$invitation_id)->with('sender')->first();
			//print_r($invitaion);
			//exit;
			//echo $invitation;
			return view('video',compact('invitaion'));	
			
		} catch (DecryptException $e) {
			 return redirect('/');
		}

		
	}
	
	
	 public function video_validate(Request $request){
		$data['false']=true;

		 $validator =   Validator::make($request->all(), [
			 'email' => 'required|email|unique:users',
			 'name' => 'required',
			 'phone' => 'required|digits:10',
			 'first_name' => 'required_with:last_name', 
		 ]);
		 $invitation = \App\Invitation::where('email', \Request::input('email') )
						->where('secret_pascode',\Request::input('secret'))
						->first();
						
		 $validator->after(function  ($validator) use ($invitation){
			if($invitation == false)
				$validator->errors()->add('secret', 'Invalid secret passcode' );
		 });

		
		if ($validator->fails()) {
			//validation error
			$data['error'] = $validator->errors()->all();
  			return \Response::json($data, 422 ); // Status code here
		}else {
			//all goods
			
			$invite = \App\Invitation::find($invitation->id);
			$invite->name = $request->name;
			$invite->tel = $request->phone;
			$invite->save();

			$data['message'] = 'verification complete you are redirecting';
			$data['status']=true;
			if($invitation->is_affiliate == 0){
				$data['url']=url('video?invitation='. \Crypt::encrypt($invitation->id));
			}else {
				$data['url']=url('register?invitation='. \Crypt::encrypt($invitation->id));
			}
		}
		return \Response::json($data, 200 ); // Status code here
	}
}
