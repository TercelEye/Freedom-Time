<?php

namespace App;
use App\Affiliates;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	 protected $dates = ['created_at', 'updated_at', 'start_date','end_date'];
    public function customer(){
		return $this->hasOne('\App\User','id','user_id');
	}
	
	
}
