@extends('layouts.dashboard')

 @section('content')
 <br> <br> <br>
<div class="container">

@include('layouts.billing_steps')


<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        


        <br>
        <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Billing address</h3>
                       
                    </div>                    
                </div>
                <div class="panel-body">

        <form  id="billing_address" method="post" action="{{ url('user/edit_address') }}" >
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
</form>


<script type="text/javascript">
$('#billing_address').change(function(){

     var form = $(this);
    var $btn = $('.subscribe').button('loading');
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
            $btn.button('reset')
            toastr.success( json.message , "" );
            if(json.status == true){
               // window.location.replace("{{url('user/billing')}}");
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
    .done(function(response) {
        $btn.button('reset');
        //$('.subscribe').attr('disabled', true);
    })
    .fail(function( jqXHR, json ) { $btn.button('reset')});
    return false;


});


</script>

    </div><!-- end panel -->
</div><!-- end col -->

</div><!-- end row -->

  <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
   <div class="alert alert-info">Don't worry; your card information will never touch our servers.
</div>

		@if(count($errors) > 0 )
        <div class="alert alert-danger">
        	@foreach($errors as $k=>$m)
            	{{ $m }} <br>
            @endforeach
        </div>
        
        @endif
         <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="{{asset('assets')}}/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="CardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 col-md-3">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">Month</label>
                                    <select class="form-control" name="month" required>
                                        @for($m=1;$m<13;$m++)
                                        <option value="{{sprintf("%02d",$m)}}">{{sprintf("%02d",$m)}}</option>
                                        @endfor
                                    </select>
                                   
                                </div>
                            </div>
                             <div class="col-xs-4 col-md-4">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">Year </label>
                                     <select class="form-control" name="year" required>
                                        @for($y=date('Y');$y<date('Y',strtotime(date('Y')."+10 year"));$y++)
                                        <option value="{{$y}}">{{$y}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="CardCode"
                                        placeholder="CVC"
                                        value=""
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12">
                             {{ csrf_field() }}
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Start Subscription ($19.95)</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
         <?php /*?>   <div class="alert alert-danger"><strong>Note</strong> : This card details filled for testing purpose only</div><?php */?>
  </div>
</div>
</div>
@endsection