<?php

namespace App\Http\Controllers\admin;

use Validator;
use App\Http\Controllers\Controller;
use App\User;
use App\Fund;
use App\Withdraw;
use Session;
use Illuminate\Http\Request;


class WithdrawController extends Controller
{
    public function index()
    {
        $withdraws = Withdraw::all();
        return view('admin.withdraw.index', compact('withdraws'));
    }
    public function create(Request $request)
    {
        $withdraw = new Withdraw;
        //echo $request->user_id;exit();
        // $wthdraw = $request->all();
        if($request->amount){
        	 $withdraw->amount = $request->amount;
        }
        if($request->user_id){
        	 $withdraw->user_id = $request->user_id;
        }
        $users    = User::where('is_admin', 0)->get();
        $request->session()->put('errors', []);
  		//$errors =  session()->get('errors');
  		//$errors =  $request->session()->flash('errors', 'ds');
  		//$errors = $request->session()->get('errors', array());
  		//echo "DDDDDD";print_r($errors);//exit;
        return view('admin.withdraw.form', compact('withdraw', 'users'));
    }
    //insert
    public function store(Request $request)
    {

			//$request->session()->flash('errors','ddggddd');
        $validator = Validator::make($request->all(), [
            'amount'  => 'required',
            'user_id' => 'required',
            'note'    => 'required',
        ]);

        $validator->after(function ($validator) use($request) {
            if (!$this->is_have_money($request->user_id,$request->amount)) {
                $validator->errors()->add('amount', 'Customer should have sufficient balance in account to withdraw.');
            }
        });

        if ($validator->fails()) {


            return redirect()->back()
            	->with('errors',$validator->errors());
                //->withErrors($validator);
        }
        if($this->deduct_funds($request->user_id,$request->amount)){
	        $withdraw          = new Withdraw;
	        $withdraw->user_id = $request->user_id;
	        $withdraw->amount  = $request->amount;
	        $withdraw->note    = $request->note;
	        $withdraw->save();
    	}

        return redirect('admin/wthdraw'); //->back()->with('success',true);
    }
    //validation 
    private function is_have_money($user_id,$amount){
    	$funds = Fund::where('user_id',$user_id)->where('balance','>=',$amount)->first();

    	if($funds!=false){

    		return true;
    	}
    	return false;
    }
    //deduct funds
    private function deduct_funds($user_id,$amount){
    	$funds = Fund::where('user_id',$user_id)->where('balance','>=',$amount)->first();
    	if($funds!=""){
    		$funds->balance = $funds->balance - $amount;
    		$funds->save();
    		return true;
    	}
    	return false;
    }

    public function edit($id){
   		$withdraw = Withdraw::findOrFail($id);
        $users    = User::where('is_admin', 0)->get();
        $note = true;
        return view('admin.withdraw.form', compact('withdraw', 'users', 'errors','note'));
    }

    public function destroy(Request $request){
    	$wthdraw = Withdraw::findOrFail($request->id);

    	$user_id = $wthdraw->user_id;
    	$amount = $wthdraw->amount;
    	$wthdraw->delete();

    	$funds = Fund::where('user_id',$user_id)->first();
    	$funds->balance = $funds->balance+$amount;
		$funds->save();

    	return redirect()->back();
    }
}
