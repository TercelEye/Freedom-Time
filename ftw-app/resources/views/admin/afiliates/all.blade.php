@extends('admin.layouts.master')

@section('content')



<table class="table table-bordered table-striped">
<thead>
	<tr> 
    	<th>ID</th> 
           <th>Username</th>      
        <th>Name</th> 
        <th>Email</th> 
        <th>Payment</th> 
        <th>Funds</th> 
     </tr>
    </thead>
    <tbody>
    	@if($affilites !=false)
    	@foreach($affilites as $row)
        	<tr>
            	<td>{{ $row->id }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->fname }} {{ $row->lname }}</td>
                <td>{{ $row->email }}</td>
                <td><strong>Payment profile id</strong> : {{ $row->paymentprofileid }} |
                <strong>Profile id</strong> : {{ $row->profileid }}
                </td>
                
                <td>$ {{ $row->fund->balance or '0' }}</td>
            </tr>
        @endforeach
        @endif
    </tbody>
    
</table>

@endsection