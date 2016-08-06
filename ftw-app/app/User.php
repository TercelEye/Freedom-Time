<?php

namespace App;


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
        });
		
    }
	
	public function fund(){
		return $this->belongsTo('\App\Fund','id','id');
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
	
	/*public function Affiliate(){
		return $this->hasOne('App\Affiliates', 'invited_by');
	}*/
}
