<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
	protected $fillable = [
			'invitation_id',
			'first_name',
			'last_name',
			'age_verify',
			'your_vision',
			'your_vision_note',
			'your_idea',
			'your_income_1year',
			'have_fast_businesses',
			'if_businesses_success',
			'faild_reason',
			'faild_reason_note',
			'why_you_join',
			'woking_hours',
			'funding_support_intrest',
			'expenses_limit',
			'payment_method',
			'payment_method_note',
			'best_way_to_earn',
			'statement_agree',
			'like_to_public',
			'teaching_others',
			'would_like_workhard',
			'life_attitude',
			'comments',
	];
	 
	// set
    public function setYourVisionAttribute($value) {
        $this->attributes['your_vision'] = json_encode($value);
    }
	 public function setFaildReasonAttribute($value) {
        $this->attributes['faild_reason'] = json_encode($value);
    }
	 public function setPaymentMethodAttribute($value) {
        $this->attributes['payment_method'] = json_encode($value);
    }
	
	//get 
	public function getYourVisionAttribute($value) {
        return json_decode($value);
    }
	public function getFaildReasonAttribute($value) {
        return json_decode($value);
    }
	public function getPaymentMethodAttribute($value) {
        return json_decode($value);
    }
	
	public function getAgeVerifyAttribute($value) {
        return ($value==1?"Yes":"No");
    }




}
