<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
	public function sender(){
		return $this->hasOne('\App\User','id','user_id');
		//return $this->belongsTo('\App\User','user_id','id');	
	}
    
}
