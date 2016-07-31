<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminDashboard extends Controller
{
    //admin dashboard
	
	public function index (){
		return redirect()->to('admin/affiliates');
		return view('admin.dashboard');	
	}
}
