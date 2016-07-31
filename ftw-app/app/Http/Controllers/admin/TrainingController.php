<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Training;
use App\TrainingCategory;
use Input;
use Validator;
use Session;
use Storage;
use App\Http\Controllers\Controller;

class TrainingController extends Controller
{
     public function index(Request $request){
		 if($request->id != ""){
			$data['obj'] = 	\App\Training::findOrFail($request->id);
		}
		$category = \App\TrainingCategory::with('training')->get();
		//$training = \App\Training::with('category')->get();
		//$data['training']=$training;
		$data['category']=$category;
		return view('admin/training/training',$data);	
	}
	 public function category(Request $request){
		if($request->id != ""){
			$data['obj'] = 	\App\TrainingCategory::findOrFail($request->id);
		}
		$category = \App\TrainingCategory::with('training')->get();
		$data['category']=$category;
		return view('admin/training/category',$data);	
	}
	public function delete_training(Request $request){
		if($request->id!=""){
			$training =\App\Training::find($request->id);
			
			if($training->pdf !=""){
				//delete file
				Storage::delete('uploads/'.$training->pdf);
			}

			$training->delete();
		}
		return redirect()->to('admin/training');
	}
	public function store_category(Request $request){
		if($request->title != ""){
			if($request->id == ""){
				//insert 
				$category = new \App\TrainingCategory;
				$category->title = $request->title;
				$category->text = $request->text;
				$category->save();	
			}else {
				//insert 
				$category = \App\TrainingCategory::findOrFail($request->id);
				$category->title = $request->title;
				$category->text = $request->text;
				$category->save();		
			}
			
		}
		return \Redirect::back();
	}
	
	public function store_training(Request $request){
		if($request->title != ""){
			if($request->id == ""){
				//insert 
				$training = new \App\Training;
				$training->category_id = $request->category_id;
				$training->title = $request->title;
				$training->youtube_vide = $request->youtube_vide;
				$training->text = $request->text;
				$training->save();	
			}else {
				//insert 
				$training = \App\Training::findOrFail($request->id);
				$training->category_id = $request->category_id;
				$training->youtube_vide = $request->youtube_vide;
				$training->title = $request->title;
				$training->text = $request->text;
				$training->save();		
			}
			
			
			//upload file 
			if ($request->hasFile('pdf')) {
				$upload = $this->pdf_upload($request);
				if($upload['status'] == true){
					$training->pdf =$upload['file_name'];
					$training->save();		
				}
			}
		}
		return \Redirect::back();
	}
	
	public function pdf_upload(Request $request) {
	  // getting all of the post data
	  $file = array('pdf' =>$request->file('pdf'));
	  // setting up rules
	  $rules = array('pdf' => 'mimes:pdf'); //mimes:jpeg,bmp,png and for max size max:10000
	  // doing the validation, passing post data, rules and the messages
	  $validator = \Validator::make($file, $rules);
	  if ($validator->fails()) {
		// send back to the page with the input data and errors
		Session::flash('error', $validator->errors()->get('pdf'));
		return array('status'=>false);
	  }
	  else {
		// checking file is valid.
		if ($request->file('pdf')->isValid()) {
		  $destinationPath = 'uploads'; // upload path
		  $extension =$request->file('pdf')->getClientOriginalExtension(); // getting image extension
		  $fileName = uniqid().'.'.$extension; // renameing image
		 $request->file('pdf')->move($destinationPath, $fileName); // uploading file to given path
		  // sending back with message
		  \Session::flash('success', 'Upload successfully'); 
		  return array('status'=>true,'file_name'=> $fileName);
		}
		else {
		  // sending back with error message.
		  \Session::flash('error', 'uploaded file is not valid');
		    return array('status'=>false);
		}
	  }
	}
}
