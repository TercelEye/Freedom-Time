<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function freshair(){
		return view('products/freshair');	
	}
	public function laundry(){
		return view('products/laundry');	
	}
	public function livingwater(){
		return view('products/livingwater');	
	}
	public function neutra(){
		return view('products/neutra');	
	}
	public function letter(){
		return view('products/letter');	
	}
}
