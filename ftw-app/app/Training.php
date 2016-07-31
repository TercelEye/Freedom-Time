<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    public function category(){
		return $this->belongsTo('\App\TrainingCategory','category_id','id');
	}
}
