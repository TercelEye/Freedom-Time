@extends('admin.layouts.master')

@section('content')



<table class="table table-bordered table-striped">
<thead>
	<tr> 
    	<th>ID</th> 
        <th>Name</th> 
        <th>Email</th> 
        <th>Username</th> 
        <th>Funds</th> 
     </tr>
    </thead>
    <tbody>
    	@foreach($affilites as $row)
        	<tr>
            	<td>{{ $row->id }}</td>
                <td>{{ $row->user->fname }} {{ $row->user->lname }}</td>
                <td>{{ $row->user->email }}</td>
                <td>{{ $row->user->username }}</td>
                <td>$ {{ $row->fund->balance }}</td>
            </tr>
        @endforeach
    </tbody>
    
</table>

@endsection