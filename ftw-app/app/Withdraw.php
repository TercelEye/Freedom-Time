<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }

     public function user(){
		return $this->belongsTo('\App\User','user_id','id');
	}
}
