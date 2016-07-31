@extends('layouts.dashboard')

@section('title','FREEDOM || Register')
@section('content') 


<section class="main" id="register">
	<div class="content container">
		<div class="row">
			<div class="mainDiv col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
				<div class="formWrapper">
					<a href="#"><h3 class="text-uppercase">Create An Account</h3></a>
					 <form class="form-horizontal" role="form" method="POST" action="{{ url('/register/'.$username) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="invited_by" value="{{ $invited_by }}">
						<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
							<label for="usr">Username: <sup>*</sup></label>
							<input type="text" class="form-control" name="username"  value="{{ old('username') }}" id="usr">
                              @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
						</div>
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
							<label for="pwd">First Name: <sup>*</sup></label>
							<input type="text" class="form-control" name="fname" value="{{ old('fname') }}"  id="email">
                              @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
						</div>
                         <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
							<label for="pwd">Last Name: <sup>*</sup></label>
							<input type="text" class="form-control" name="lname" value="{{ old('lname') }}"  id="email">
                              @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
						</div>
                    
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="pwd">Email: <sup>*</sup></label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}"  id="email">
                              @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="pwd">Password: <sup>*</sup></label>
							  <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</div>
                       <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label for="pwd">Confirm Password: <sup>*</sup></label>
							  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
						</div>
                        
                       
                         <button class="btn btn-info">  Register Now</button> 
					<?php /*?>	<a href="#" class="btn btn-info" id="registerLink">
                        Register Now</a><?php */?>
					</form>			
				</div><!-- formWrapper -->			
			</div><!-- mainDiv -->
		</div><!-- row -->
	</div>
</section>






@endsection 