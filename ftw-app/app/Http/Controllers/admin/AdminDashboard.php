<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Fund;
use App\Http\Controllers\Controller;

class AdminDashboard extends Controller
{
    //admin dashboard
	
	public function index (){
		$affiliates_count = $this->get_all_affiliates();
		$admin_count = $this->get_admin();
		$total_fund = $this->get_total_fund();
		//return redirect()->to('admin/affiliates');
		return view('admin.dashboard',compact('affiliates_count','total_fund','admin_count'));	
	}

	//get all affiliates 
	private function get_all_affiliates(){
		return User::where('is_admin',0)->get()->count();
	}
	//get all affiliates 
	private function get_admin(){
		return User::where('is_admin',1)->get()->count();
	}
	//get all affiliates 
	private function get_total_fund(){
		return Fund::where('balance','!=',0)->get()->sum('balance');
	}
}
