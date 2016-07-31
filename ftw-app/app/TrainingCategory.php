<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingCategory extends Model
{
     public function training(){
		return $this->hasMany('\App\Training','category_id','id');
	}
}
