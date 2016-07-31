@extends('layouts.dashboard')

 @section('content')
 <br> <br> <br>
<div class="container">
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
                            <img class="img-responsive pull-right" src="<?=asset('assets')?>/accepted_c22e0.png">
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
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                      
                                        class="form-control" 
                                        name="ExpirationDate"
                                        placeholder="YYYY-DD"
                                        autocomplete="cc-exp"
                                        required 
                                    />
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
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Start Subscription ($39)</button>
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