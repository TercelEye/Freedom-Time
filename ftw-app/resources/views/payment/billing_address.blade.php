@extends('layouts.dashboard')
<style type="text/css">
	a.btn:hover {
		font-size: inherit !important;
	}
</style>


 @section('content') <br>
 <br>
 <br>
 
 <div class="container">
 	
 	<div class="row">
 	<div class="col-md-offset-4 col-md-3">
 		<h4>Billing address</h4>
 		
 		<hr>
 		<form  method="post" action="{{ url('user/edit_address') }}" >
   <div class="form-group">
     <label for="usr">Address:</label>
     <input type="text" name="address" value="{{ $user->address }}" required class="form-control" id="address">
   </div>
  <div class="form-group">
     <label for="pwd">City:</label> 
     <input type="email" name="city" value="{{ $user->city }}" required class="form-control" id="city">
   </div>
  <div class="form-group">
     <label for="pwd">Zip code:</label>
     <input type="text"  name="zip_code" value="{{ $user->zip_code }}" required class="form-control" id="phone">
   </div>
  <a onClick="edit_address(this)" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Update & confirm </a>
</form>

 	</div><!-- end col -->
 	
 </div><!-- end row -->
 
 </div>
 

<script type="text/javascript">
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
			if(json.status == true){
				window.location.replace("<?=url('user/billing')?>");
			}
           
			
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