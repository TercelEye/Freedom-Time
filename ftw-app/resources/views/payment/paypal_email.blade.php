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
                        <h3 class="panel-title display-td" >Your Earnings</h3>
                       
                    </div>                    
                </div>
                <div class="panel-body">
@include('shared.errors')
        <form  id="billing_address" method="post" >
   <div class="form-group">
     <label for="usr">Paypal Email:</label>
     <input type="text" name="paypal_email" value="{{ Auth::user()->paypal_email }}" required class="form-control" id="paypal_email">
   </div>

    {{ csrf_field() }}
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Save </button>

</form>

   </div><!-- end panel -->
</div><!-- end col -->

</div><!-- end row -->
</div>
</div>
@stop