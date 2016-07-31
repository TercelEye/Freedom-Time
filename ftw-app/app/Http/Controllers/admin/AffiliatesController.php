<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AffiliatesController extends Controller
{
    public function all(){
		$affilites = \App\Affiliates::with('user')->with('fund')->get();
		$data['affilites']=$affilites;
		return view('admin/afiliates/all',$data);	
	}
}
