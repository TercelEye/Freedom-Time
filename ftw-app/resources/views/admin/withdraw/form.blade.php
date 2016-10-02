@extends('admin.layouts.master')

@section('content')

<div class="row">
<div class="col-md-12">

<div class="panel">
	<div class="panel-content">


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    	<form method="post">
    
    <div class="form-group">
        <label>User</label>
        <select name="user_id" class="form-control form-white" >
            @foreach($users as $row)
            <option {{($withdraw->user_id == $row->id?'selected':'')}} value="{{$row->id}}">{{$row->username}}</option>
            @endforeach
        </select>
    </div>

	<div class="form-group">
    	<label>Amount</label>
    	<input type="text" class="form-control form-white" value="{{ $withdraw->amount }}" name="amount">
    </div>
    <div class="form-group">
    	<label>Note</label>
    	<textarea name="note" class="form-control form-white" rows="5">{{ $withdraw->note or '' }}</textarea>
    </div>
	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ Request::input('id') }}">
    <input type="submit" class="btn btn-success"> 
     <a href="{{ url('admin/wthdraw') }}" class="btn btn-danger"> Close </a>
</form>
    </div>
</div><!-- end panel -->

</div><!-- end col -->
</div><!-- end row -->

@stop
