@extends('layouts.invite')

@section('title','FREEDOM ')
@section('content') 

<style type="text/css">
#formsmain .firstRow .checkbox {
    margin-left: 0 !important;
}
.radio-inline, .checkbox-inline {
    padding-left: 21px 
}
.radio-inline + .radio-inline, .checkbox-inline + .checkbox-inline {
    margin-left: 0 !important;
}
.radio-inline, .checkbox-inline {
    padding-left: 21px !important;
}
</style>

<form method="post" id="form101">


<section class="main" id="formsmain">


 @if (count($errors) > 0)
 <br>
    <div class="alert alert-danger">
        <ul style="padding:5px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	


	<div class="row firstRow">
		<div class="content container">
			<h1 class="text-center">Tell us a little bit about yourself and what attracted you to our system</h1>
			
            <div class="formPart">
            
			
					<fieldset class="form-group col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-0">
						<label for="firstname">First Name</label>
						<input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" id="firstname" placeholder="">
					</fieldset>
					<fieldset class="form-group col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-0">
						<label for="lastname">Last Name</label>
						<input type="text" name="last_name" value="{{ old('last_name') }}"  class="form-control" id="lastname" placeholder="">
					</fieldset>
				
				<div class="checkbox form-group col-sm-12">
					<input id="check1" type="checkbox" {{ (old('age_verify')==1?"checked":"") }}  name="age_verify"  value="1">
					<label for="check1">I verify that I am over 18 years old.</label>
				</div>
			</div><!-- formPart -->
		</div><!-- content container -->
	</div><!-- row firstRow -->












	<div class="row secondRow">
		<div class="content container">
			<h1 class="text-left">YOUR VISION OF SUCCESS</h1>
			<h3 class="text-left">There are many reasons someone wants to build their own home based business.  Click on the options that BEST fit what you’d want from your own business:</h3>



<?php $your_vision = [
		'Get our of debt',
		'Have the option to not work a job',
		'The ability to help others in need',
		'Education fund for your kids/grandkids',
		'General repair around the house',
		'A new home',
		'Hobbies you’d like to pursue',
		'The ability to customize your life',
		'Better control of time',
		'Peace of Mind',
		'Retirement fund',
		'Other',
];
$your_vision_post = (old('your_vision')!=""? old('your_vision') :array());

?>



			<div class="checkboxWrapper">
				<div class="checkbox">
                	<?php foreach($your_vision as $k => $v): ?>
					<input id="v_check<?=$k?>" type="checkbox" <?= (in_array($v,$your_vision_post)?"checked":"") ?>  name="your_vision[]" value="<?=$v?>">
					<label for="v_check<?=$k?>"><?=$v?></label>
                    <?php endforeach;?>
				</div>
				
					<fieldset class="form-group">
						<textarea class="form-control" name="your_vision_note" id="exampleTextarea" rows="5">{{ old ('your_vision_note') }}</textarea>
					</fieldset>
				
			</div><!-- checkboxWrapper -->





			<div class="secondndtextareaWrapper">
				<h3 class="text-left">Describe what you’d ideally like your life to be like in 12 months.  Have fun with this and write as if you already have this lifestyle!</h3>
				
					<fieldset class="form-group">
					
                    <textarea class="form-control" name="your_idea" id="exampleTextarea" rows="5">{{ old ('your_idea') }}</textarea>
					</fieldset>
				
			</div><!-- secondndtextareaWrapper -->



	

			<div class="radiobuttonWrapper">
				<h3 class="text-left">Given what you know right now about this opportunity, what do you think a realistic income might be within 1 year of starting your business:</h3>
				<div class="radios">
					
                    <?php 
		$your_income_1year =[
			'$2000 / month',
			'$5000 / month',
			'$10000 / month',
			'$15000 / month',
		];
	?>
    
                    	<?php foreach($your_income_1year as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="your_income_1year" <?=(old('your_income_1year') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
				
					
				</div>		
			</div><!-- radiobuttonWrapper -->
		</div><!-- content container -->
	</div><!-- row secondRow -->












	<div class="row thirdRow">
		<div class="content container">
			<h1 class="text-left">PAST EXPERIENCE WITH OTHER HOME BASED BUSINESSES</h1>





			<div class="radioBlockOne blocks">
				<h3 class="text-left">Have you started a home based business in the past?</h3>
				<div class="radios">
					
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="have_fast_businesses" <?=(old('have_fast_businesses') == 'yes' ?'checked':'') ?> value="yes"/>Yes
						</label>
						<label class="radio-inline">
							<input type="radio" class="checkradios"  name="have_fast_businesses" <?=(old('have_fast_businesses') == 'no' ?'checked':'') ?> value="no"/>No
						</label>
					
				</div><!-- radios -->	
			</div><!-- radioBlockOne -->





			<div class="radioBlockTwo blocks">
				<h3 class="text-left">If you did do a home based business in the past, do you feel you were successful?</h3>
				<div class="radios">
					
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="if_businesses_success" <?=(old('if_businesses_success') == 'yes' ?'checked':'') ?> value="yes"/>Yes
						</label>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="if_businesses_success" <?=(old('if_businesses_success') == 'no' ?'checked':'') ?> value="no"/>No
						</label>
						<label class="radio-inline leftMarginRadio">
							<input type="radio" class="checkradios" name="if_businesses_success" <?=(old('if_businesses_success') == 'never' ?'checked':'') ?> value="never"/>I’ve never been in a home based business
						</label>
					
				</div><!-- radios -->	
			</div><!-- radioBlockTwo -->





			<div class="checkboxBlock blocks">
					<h3 class="text-left">If you did not have the success you wanted in a previous business, which best represent your situation</h3>
				<div class="checkboxWrapper">
                
                <?php


 $faild_reason = [
		'Lack of support',
		'Company went out of business',
		'Low quality products',
		'Morale was low',
		'My heart was not in it',
		'This question does not apply to me',
		'Other',
];
$faild_reason_post = (old('faild_reason')!=""? old('faild_reason') :array());

?>

					<div class="checkbox">
					<?php foreach($faild_reason as $k => $v): ?>
					<input id="f_check<?=$k?>" type="checkbox" <?= (in_array($v,$faild_reason_post)?"checked":"") ?>  name="faild_reason[]" value="<?=$v?>">
					<label for="f_check<?=$k?>"><?=$v?></label>
                    <?php endforeach;?>
					</div>
					
						<fieldset class="form-group">
							<textarea class="form-control" id="exampleTextarea" rows="5" name="faild_reason_note">{{ old('faild_reason_note') }}</textarea>
						</fieldset>
				
				</div><!-- checkboxWrapper -->
			</div><!-- checkboxBlock -->





			<div class="secondtextareaWrapper">
				<h3 class="text-left">Why do you feel you’d be a good fit to work with our team of successful entrepreneurs?</h3>
				
					<fieldset class="form-group">
						<textarea class="form-control" id="exampleTextarea" rows="5" name="why_you_join">{{ old('why_you_join') }}</textarea>
					</fieldset>
				
			</div><!-- secondtextareaWrapper -->
		</div><!-- content container -->
	</div><!-- row thirdRow -->












	<div class="row fourthRow">
		<div class="content container">
			<h1 class="text-left">Resources</h1>
			<h3 class="text-left">We have many people participating from all walks of life with a variety of resources.  Some have time and very little money.  Some have money to put into their business and very little time.  Options are available for all.</h3>





			<div class="radioBlockOne blocks">
				<h3 class="text-left innerHeading">If you felt this was a business you wanted to pursue, how much time would you ideally like to put into your business:</h3>
				<div class="radios">
				
                
                                    <?php 
		$woking_hours =[
			'5 – 10 hours/week',
			'10 – 15 hours/week',
			'15 – 25 hours/week',
			'25 – 40 + hours/week',
		];
	?>
    
                    	<?php foreach($woking_hours as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="woking_hours" <?=(old('woking_hours') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
				
					
				</div><!-- radios -->	
			</div><!-- radioBlockOne -->





			<div class="radioBlockTwo blocks">
				<h3 class="text-left innerHeading">We have options available for new business owners to actually work with company funding and support.  If funding support was made available to you, would you be interested in learning more</h3>
				<div class="radios">
					
                    
                          <?php 
		$funding_support_intrest =[
			'Yes',
			'No',
		];
	?>
    
                    	<?php foreach($funding_support_intrest as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="funding_support_intrest" <?=(old('funding_support_intrest') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
					
				</div><!-- radios -->	
			</div><!-- radioBlockTwo -->





			<div class="radioBlockThree blocks">
				<h3 class="text-left innerHeading">In any business there are often optional expenses (setting up voicemail, advertising, business cards, etc.).  In this business, these optional expenses often run between $ 300.00 and $ 400.00 dollars or more.  If you felt you wanted to pursue this business (it made sense to you), what amount would be most manageable to you:</h3>
				<div class="radios">
                
                        <?php 
		$expenses_limit =[
			'$0',
			'$1 - $250',
			'$250 - $500',
			'$500 - $1000',
			'$1000 - $2000',
			'$2000 or more IF I feel it makes sense to me',
		];
	?>
    
                    	<?php foreach($expenses_limit as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="expenses_limit" <?=(old('expenses_limit') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
				
						
				
				</div><!-- radios -->	
			</div><!-- radioBlockThree -->





			<h3 class="text-left innerHeading separatedOne">Many of our parnters use credit cards for micellaneous business expenses to run their business.  Others prefer to use cash or debit cards or a combination of all 3.</h3>





			<div class="checkboxBlock blocks">
					<h3 class="text-left">Which would you most likely use to run your business:</h3>
				<div class="checkboxWrapper">
                
                    <?php


 $payment_method = [
		'Credit Card',
		'Debit Card',
		'Cash',
		'No Credit Cards',
];
$payment_method_post = (old('payment_method')!=""? old('payment_method') :array());

?>

					<div class="checkbox">
					<?php foreach($payment_method as $k => $v): ?>
					<input id="p_check<?=$k?>" type="checkbox" <?= (in_array($v,$payment_method_post)?"checked":"") ?>  name="payment_method[]" value="<?=$v?>">
					<label for="p_check<?=$k?>"><?=$v?></label>
                    <?php endforeach;?>
					</div>
                  
						<fieldset class="form-group">
							<textarea class="form-control" id="exampleTextarea" rows="5" name="payment_method_note">{{ old('payment_method_note') }}</textarea>
						</fieldset>
					
				</div><!-- checkboxWrapper -->
			</div><!-- checkboxBlock -->
		</div><!-- content container -->
	</div><!-- row fourthRow -->












	<div class="row fifthRow">
		<div class="content container">
			<h1 class="text-left">SUCCESS AND MINDSET</h1>





			<div class="radioBlockOne blocks">
				<h3 class="text-left">In your view, what is the best way to earn income</h3>
				<div class="radios">
					
                    
                     <?php 
		$best_way_to_earn =[
			'Own my own business',
			'Employee',
			'Investor',
		];
	?>
    
                    	<?php foreach($best_way_to_earn as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="best_way_to_earn" <?=(old('best_way_to_earn') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
					
				</div><!-- radios -->	
			</div><!-- radioBlockOne -->





			<div class="radioBlockTwo blocks">
				<h3 class="text-left">Do you agree with this statement:  “It is better to follow a path that is proven than reinvent a pathway.”</h3>
				<div class="radios">
					
                    
                       <?php 
		$statement_agree =[
			'Yes',
			'No',
			'Maybe',
		];
	?>
    
                    	<?php foreach($statement_agree as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="statement_agree" <?=(old('statement_agree') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
					
				</div><!-- radios -->	
			</div><!-- radioBlockTwo -->





			<div class="radioBlockThree blocks">
				<h3 class="text-left">When you become successful, would you be willing to allow us to use your success story to be published on our website and other materials?</h3>
				<div class="radios">
                
                
                    <?php 
		$like_to_public =[
			'Yes',
			'No',
			'Maybe',
		];
	?>
    
                    	<?php foreach($like_to_public as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="like_to_public" <?=(old('like_to_public') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
					
					
					
				</div><!-- radios -->	
			</div><!-- radioBlockThree -->





			<div class="radioBlockFour blocks">
				<h3 class="text-left">If you had success in a business through a step-by-step process, would you be willing to teach others how to be successful as well?</h3>
				<div class="radios">
					
                        <?php 
		$teaching_others  =[
			'Yes',
			'No',
			'Maybe',
		];
	?>
    
                    	<?php foreach($teaching_others  as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="teaching_others" <?=(old('teaching_others') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
						
					
				</div><!-- radios -->	
			</div><!-- radioBlockFour -->





			<div class="radioBlockFive blocks">
				<h3 class="text-left">Would you work harder in your own home based business than you would for your current employer?</h3>
				<div class="radios">
					
                    	
                        <?php 
		$would_like_workhard  =[
			'Yes',
			'No',
			'Maybe',
			'Currently work hard in my own business',
		];
	?>
    
                    	<?php foreach($would_like_workhard  as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="would_like_workhard" <?=(old('would_like_workhard') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
						
					
				</div><!-- radios -->	
			</div><!-- radioBlockFive -->





			<div class="radioBlockSix blocks">
				<h3 class="text-left">How would you describe your attitude towards life?</h3>
				<div class="radios">
					
                    
                     <?php 
		$life_attitude  =[
			'Always optimistic even when challenges come my way',
			'Generally happy but often influenced by my circumstances',
			'Frustrated most of the time',
			'Need direction and am open to learning',
		];
	?>
    
                    	<?php foreach($life_attitude  as $k => $v):?>
						<label class="radio-inline">
							<input type="radio" class="checkradios" name="life_attitude" <?=(old('life_attitude') == $v ?'checked':'') ?> value="<?=$v?>" /> <?=$v?>
						</label>
                        <?php endforeach; ?>
                        
	
					
				</div><!-- radios -->	
			</div><!-- radioBlockSix -->





			<div class="lastBox">
				<h3 class="text-left">Additonal comments you’d like for us to know</h3>
				
					<fieldset class="form-group">
						<textarea class="form-control" id="exampleTextarea" rows="5" name="comments">{{ old ('comments') }}</textarea>
					</fieldset>
				
				<p class="text-left">After hitting submit, you will be contacted within 48 hours by your partner as to your application status!  Best of success!</p>
				<h3 class="text-left bottomHeading"><span>Note: </span>Green and Yellow status gets priority for call backs and positoning within the team.</h3>
			</div><!-- lastBox -->





			<div class="bottomButtonBlock">
            
				<a href="#" onClick="document.getElementById('form101').submit();" class="btn btn-success col-xs-12 col-sm-3">submit</a>
				<a href="{{ url('video?invitation='.Request::input('invitation'))}}" class="btn btn-danger col-xs-12 col-sm-3">Cancel</a>
			</div><!-- bottomButtonBlock -->
		</div><!-- content container -->
	</div><!-- row fifthRow -->

</section><!-- main formsMain -->





{{ csrf_field() }}

</form>

<!-- FOOTER START -->
<footer class="page" id="footerVideoPage">
	<div class="content container-fluid">
		<div class="row">
			<div class="wrapper">
				<p class="text-center firstOneP">The person who invited you to this opportunity is</p>
				<p class="text-center">{{ $invitaion->sender->fname }} {{ $invitaion->sender->lname }}</p>
				<p class="text-center">{{ $invitaion->sender->tel }}</p>
				<p class="text-center lastOneP">{{ $invitaion->sender->email }}</p>		
			</div><!-- wrapper -->
		</div>
	</div>
</footer>
<!-- FOOTER END --> 
@endsection