<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Affiliates;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AffiliatesController extends Controller
{
    public function all(){
		$affilites = \App\User::where('paymentprofileid','!=','')->with(['fund','affiliate'])->get();
		$data['affilites']=$affilites;
		//print_r($affilites);exit;
		return view('admin/afiliates/all',$data);	
	}
}
