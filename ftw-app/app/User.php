<?php

namespace App;

use App\Affiliates;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	
	  protected static function boot(){
        parent::boot();

        static::created(function($user){
			//ad affiliates
			$affiliate = new Affiliates();
			$affiliate->invited_by = $user->invited_by;
			$affiliate->user_id = $user->id;
			$affiliate->save();

            //add sub afiliates count
            $inviter = Affiliates::find($user->invited_by); 
            $inviter->sub_affiliates = $inviter->sub_affiliates + 1;
            $inviter->save(); 

        });
		
    }
	
	public function fund(){
		return $this->belongsTo('\App\Fund','id','user_id');
	}
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'invited_by', 'username', 'fname', 'lname','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function affiliate(){
		return $this->hasOne('App\Affiliates', 'invited_by');
	}
}
