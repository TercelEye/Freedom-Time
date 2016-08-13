<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $this->middleware('auth');
        return view('dashboard');
    }
	
	public function homepage(Request $request){
		if (!Auth::guest()){
			return redirect('dashboard');
		}
		session(['referrer_id'=>'']);
		if($request->referrer_id !=""){
			$user = \App\User::where('username',$request->referrer_id)->first();
			if($user==false){
				return redirect('/');
			}
		 	session(['referrer_id'=>$request->referrer_id]);
		}

    	return view('home');
	}
}
