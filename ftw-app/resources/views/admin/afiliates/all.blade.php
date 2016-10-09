@extends('admin.layouts.master')

@section('content')



<table class="table table-bordered table-striped">
<thead>
	<tr> 
    	<th>ID</th> 
           <th>Username</th>      
        <th>Name</th> 
        <th>Email</th> 
        <th>Paypal Email</th> 
        <th>Affiliates</th> 
        
        <th>Funds</th> 
        <th></th> 
        <th></th> 
     </tr>
    </thead>
    <tbody>
    	@if($affilites !=false)
    	@foreach($affilites as $row)
        	<tr class="{{($row->is_admin==1?"success":"")}}">
            	<td>{{ $row->id }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->fname }} {{ $row->lname }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->paypal_email }}</td>
                <td>{{ $row->affiliate->sub_affiliates or '-' }}</td>
                
                
                <td>$ {{ $row->fund->balance or '0' }}</td>
                <td>
                @if(isset($row->fund->balance) && $row->fund->balance > 0 && $row->is_admin == 0)
                    <a class="btn btn-sm btn-success" href="{{url('admin/wthdraw/create?user_id='.$row->id.'&amount='.$row->fund->balance)}}">Withdraw</a>
                @endif
                </td>
                <td>
                    

<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#userInfo_{{$row->id}}">
 info
</button>

<!-- Modal -->
<div class="modal fade" id="userInfo_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ $row->username }}</h4>
      </div>
      <div class="modal-body">
            <table class="table table-bordered table-hover table-striped">
            <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{ $row->fname }} {{ $row->lname }}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>{{ $row->username }}</td>
                </tr> 
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ $row->email }}</td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>:</td>
                    <td>{{ $row->tel }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>{{ $row->address }}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>:</td>
                    <td>{{ $row->city }}</td>
                </tr>
                  <tr>
                    <td>Paypal Email</td>
                    <td>:</td>
                    <td>{{ $row->paypal_email }}</td>
                </tr>
                <tr>
                    <td>Paypal</td>
                    <td>:</td>
                    <td><strong>Payment profile id</strong> : {{ $row->paymentprofileid }} |
                <strong>Profile id</strong> : {{ $row->profileid }}</td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button
      </div>
    </div>
  </div>
</div>
                </td>
            </tr>
        @endforeach
        @endif
    </tbody>
    
</table>

@endsection