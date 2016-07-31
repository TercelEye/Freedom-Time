<?php

namespace App;


use App\User;
use App\Fund;
use Illuminate\Database\Eloquent\Model;

class Affiliates extends Model
{
    public function user(){
		return $this->hasOne('\App\User','id','user_id');
		//return $this->belongsTo('\App\User','user_id','id');	
	}
	 public function fund(){
		return $this->belongsTo('\App\Fund','id','user_id');
	}
}
