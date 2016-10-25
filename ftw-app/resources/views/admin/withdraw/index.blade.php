@extends('admin.layouts.master')

@section('content')

<div class="row">

<div class="col-md-12">

<div class="panel">
<div class="panel-heading">
    <h2>Money Wthdrawal</h2>
</div>
	<div class="panel-content">

<table class="table table-bordered table-striped">
<thead>
	<tr> 
        <th>ID</th> 
        <th>User</th> 
    	<th>Paypal email</th> 
        <th>Amount</th> 
        <th>Note</th> 
           <th></th> 
           <th></th> 
     </tr>
    </thead>
    <tbody>
    	@foreach($withdraws as $row)
        	<tr>
            	<td>{{ $row->id }}</td>
                <td>{{ $row->user->username }}</td>
                <td>{{ $row->user->paypal_email }}</td>
                <td>{{ $row->amount }}</td>
                <td>{{ $row->note }}</td>
                <td> <a href="{{ url('admin/wthdraw/edit/'.$row->id) }}">view</a></td>
                <td> 
                <form action="{{url('admin/wthdraw/delete')}}" method="post">
                    <input type="hidden" name="id" value="{{$row->id}}">
                    {{ csrf_field() }}
                    <input type="submit" name="delete" class="btn btn-sm btn-danger" value="delete">
                </form>
              </td>
            </tr>
        @endforeach
    </tbody>
    
</table>

</div>
</div><!-- end panel -->

</div><!-- end col -->
</div><!-- end row -->
@endsection