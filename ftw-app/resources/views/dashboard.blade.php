@extends('layouts.dashboard')

@section('title','FREEDOM || Dashboard')
@section('content') 
<?php /*?>
<div class="alert alert-warning">Your email not confirmed <a href="#">click here </a> to re-send activation email</div>
<?php */?>
<section class="main" id="dashboard">
  <div class="content container">
    <div id="training">
    
    @if($category !=false)
    @foreach($category as $cat)
      
      <div class="row row1">
        <h3 class="text-center">{{ $cat->title }}</h3>
        <p class="text-left">{{ $cat->text }}</p>
      </div>
      <!-- row row1 -->
      
      
       @if($cat->training !=false)
        	@foreach($cat->training as $row)
              <div class="row row2">
                <div class="wrapper">
                  <div class="lefty col-sm-8">
                    <div class="contentWrapper">
                      <h3 class="text-left">{{ $row->title }}</h3>
                      <p class="text-left">{{ $row->text }}</p>
                    </div>
                    <!-- contentWrapper --> 
                  </div>
                  <!-- lefty -->
                  
                  <div class="righty col-sm-4">
                    <div class="contentWrapper"> 
                    
                    <a class="watchthevideo" href="#" data-toggle="modal" data-target="#vide_watch_{{ $row->id }}">Watch the video</a>
                    
                     <a class="downloadthepdf" target="_blank" href="{{ url('uploads/'.$row->pdf) }}">Download the pdf</a> </div>
                    
                        <!-- Modal -->
                        <div class="modal fade" id="vide_watch_{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">{{ $row->title }}</h4>
                              </div>
                              <div class="modal-body">
                                <?php 
								$v="";
			strtok( $row->youtube_vide, '?');

  parse_str(strtok(''));

			?>
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{ $v or '' }}" frameborder="0" allowfullscreen></iframe>
                              </div>
                             
                            </div>
                          </div>
                        </div>

                    <!-- contentWrapper --> 
                  </div>
                  <!-- righty --> 
                </div>
                <!-- wrapper --> 
              </div>
              <!-- row row2 -->
       		@endforeach
     	@endif
      
      
      
      
     @endforeach
     @endif
      

    </div>
    <!-- training -->
    
    <div id="account">
      <div class="row row8">
        <div class="leftLinks col-sm-3">
          <ul>
            <li class="active"><a href="#">Contact Info</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Fund withdrawal</a></li>
            <li><a href="#">Billing</a></li>
          </ul>
        </div>
        <!-- leftLinks -->
        
        <div class="rightContents col-sm-9">
          <div id="contactinfo">
            <div class="editInformationBlock">
              <h3 class="text-left">Edit Information</h3>
              <p class="text-left firstP"><span>Username: </span> {{ $user->username }}</p>
              <p class="text-left secondP"><span>Email Address: </span> {{ $user->email }}</p>
              <br>
              <form role="form" method="post" action="{{ url('user/edit_information') }}" id="edit_information" class="form-inline">
                <div class="form-group">
                  <label for="usr">First Name:</label>
                  <input type="text" name="fname" value="{{ $user->fname }}" class="form-control" id="usr">
                </div>
                <div class="form-group">
                  <label for="pwd">Last Name:</label>
                  <input type="text" name="lname" value="{{ $user->lname }}" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Phone Number:</label>
                  <input type="text" name="tel" value="{{ $user->tel }}"  class="form-control" id="phone">
                </div>
                <a onClick="edit_information(this)" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Update</a>
              </form>
            </div>
            <!-- editInformationBlock -->
            
            <div class="editAddressBlock">
              <h3 class="text-left">Edit Address</h3>
              <form role="form" method="post" action="{{ url('user/edit_address') }}" class="form-inline">
                <div class="form-group">
                  <label for="usr">Address:</label>
                  <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="address">
                </div>
                <div class="form-group">
                  <label for="pwd">City:</label>
                  <input type="email" name="city" value="{{ $user->city }}" class="form-control" id="city">
                </div>
                <div class="form-group">
                  <label for="pwd">Zip code:</label>
                  <input type="text"  name="zip_code" value="{{ $user->zip_code }}" class="form-control" id="phone">
                </div>
                <a onClick="edit_address(this)" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Update</a>
              </form>
            </div>
            <!-- editAddressBlock --> 
          </div>
          <!-- contactinfo -->
          
          <div id="changepassword">
            <h3 class="text-left">Change Password</h3>
            <form role="form" method="post" action="{{ url('user/edit_password') }}" class="form-inline">
              <div class="form-group">
                <label for="usr">Old password:</label>
                <input type="password" name="old_password" class="form-control" id="oldpassword">
              </div>
              <div class="form-group">
                <label for="pwd">New Password:</label>
                <input type="password" name="password"  class="form-control" id="newpassword">
              </div>
              <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control" id="confirmpassword">
              </div>
              <a  onClick="edit_password(this)" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Update</a>
            </form>
          </div>
          <!-- changepassword -->
          
          <div id="affiliates">
            <h3 class="text-left">Affiliate Management</h3>
            <form role="form" method="post" action="{{ url('invitation/send_invitation') }}" id="invite_form" class="form-horizontal invite_form">
              <div class="form-group">
                <label for="usr">To invite someone to your sales funnel, enter their email address bellow</label>
                <input type="email" name="email" required style="display:inline-block" class="form-control"  placeholder="Ex : user@email.com"> 
                <input type="submit" id="submit" style="    font-size: 18px" class="btn-xs btn btn-success" value="Send Invitation">
              </div>
              </form>
               <form role="form" method="post" action="{{ url('invitation/send_affiliate') }}" id="affiliate_form" class="form-horizontal invite_form">
              <div class="form-group affliateSecondFormGroup">
                <label for="usr">To register a new affiliate, use this link</label>
                  <input type="email" name="email" disabled style="display:inline-block" class="form-control" value="{{ url('register/'.$user->username) }}"> 
              <?php /*?>   <input type="submit" id="submit" style="    font-size: 18px" class="btn-xs btn btn-success" value="Send Invitation"><?php */?>
              </div>
            </form>
            <script type="text/javascript">
			
			
   $(".invite_form").on("submit", function(){
	event.preventDefault();
   var form= $(this);
	 // var $btn = (this).closest('#submit').button('loading')


    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) 
        {
			 //$btn.button('reset')
			 load_my_candidates();
            toastr.success( json.message , "" );
			//window.location.replace(json.url);
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			//$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response)
    {
        //
		
		
		
    })
    .fail(function( jqXHR, json ) 
    {
      
    });
    return false;

 })
 
 

            </script>
            
           <div class="load_my_affi"></div>
            <!-- tableWrapper --> 
          </div>
          <!-- affiliates -->
          
          <div id="changepaypalemail">
            <h3 class="text-left">Fund withdrawal</h3>
            <div class="pull-right">
            	<small>available balance</small>
            	<h2>${{ $fund->balance or 0 }}</h2>
            </div>
            <form role="form" method="post" action="{{ url('user/edit_paypalemail') }}" id="invite_form" class="form-horizontal invite_form">
              <div class="form-group">
                <label for="pwd">Enter your new paypal email address:</label>
                <input type="email" name="paypal_email" value="{{ $user->paypal_email }}" class="form-control" id="paypalemailchange">
              </div>
              <a onClick="edit_paypalemail(this)" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Withdraw</a>
              
            </form>
            
            
          </div>
          <!-- changepaypalemail --> 
          
          <div id="billing"> 
           <h3  class="text-left" style="    border-bottom: 1px solid #383838;
    padding-bottom: 9px;    margin-top: -3px;
    font-size: 25px;
    margin-bottom: 30px">Invoices</h3>
          	<table class="table table-bordered table-striped">
            	<thead>
                	<tr>
                    	<td>#</td>
                        <td>Invoice date</td>
                        <td>Amount</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                	@if($invoices !=false)
                        @foreach($invoices as $row)
                            <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->start_date->format('M,d Y') }} <strong>to</strong> {{ $row->end_date->format('M,d Y') }}</td>
                            <td>{{ $row->amount }}</td>
                            <td><span class="btn btn-sm btn-{{ ($row->payment_status== 'Paid'?'success':'warning') }}">{{ $row->payment_status }}</span></td>
                        </tr>
                        @endforeach
                   @endif
                    
                </tbody>
            </table>
          </div>
        </div>
        <!-- rightContents --> 
      </div>
      <!-- row row8 --> 
    </div>
    <!-- account -->
    
    <div id="candidatefeedback">
      <div class="row row9">
        <h3 class="text-center firstH">Contact ‘Everyone Wins’ Guidelines</h3>
        <p class="text-left firstOne"><span class="green1">GREEN</span> or <span class="yellow1">YELLOW</span> = Follow-up ideally with a senior partner in a three-way call</p>
        <p class="text-left secondOne"><span class="red1">RED</span> = Your prospect is not interested at this time and no follow-up is needed on your end. Do you realize how  much people appreciate this option? You are letting the SYSTEM do the work and are acting as a true professional in your business!  Congratulations! </p>
        <p class="text-left thirdOne"><span class="blue1">BLUE</span> = This is a possible customer. Follow-up -- ideally with a senior partner - in a three-way call.</p>
        
        <div class="my_candidates"></div>
      
        
        <!-- tableWrapper --> 
        
      </div>
      <!-- row row9 --> 
    </div>
    <!-- candidateFeedback --> 
    
  </div>
  <!-- content container --> 
</section>
<!-- main --> 

<script type="text/javascript">
function load_my_affilites(){
	$(".load_my_affi").load("{{ url('invitation/my_affilites') }}")	
}
function load_my_candidates(){
	$(".my_candidates").load("{{ url('invitation/my_candidates') }}")	
}
$(document).ready(function(e) {
    load_my_candidates();
	load_my_affilites();
});

//edit_information
function edit_information(e){
	var form = $(e).closest('form');
	var $btn = $(e).button('loading');
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
			$btn.button('reset')
            toastr.success( json.message , "" );
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response) {$btn.button('reset')})
    .fail(function( jqXHR, json ) { $btn.button('reset')});
    return false;
}

//edit_information
function edit_address(e){
	var form = $(e).closest('form');
	var $btn = $(e).button('loading');
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
			$btn.button('reset')
            toastr.success( json.message , "" );
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response) {$btn.button('reset')})
    .fail(function( jqXHR, json ) { $btn.button('reset')});
    return false;
}

//edit_paypalemail
function edit_paypalemail(e){
	var form = $(e).closest('form');
	var $btn = $(e).button('loading');
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
			$btn.button('reset')
            toastr.success( json.message , "" );
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response) {$btn.button('reset')})
    .fail(function( jqXHR, json ) { $btn.button('reset')});
    return false;
}

//edit_password
function edit_password(e){
	var form = $(e).closest('form');
	var $btn = $(e).button('loading');
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
			$btn.button('reset')
            toastr.success( json.message , "" );
			$(form)[0].reset();
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response) {$btn.button('reset')})
    .fail(function( jqXHR, json ) { $btn.button('reset')});
    return false;
}
</script>

@endsection 