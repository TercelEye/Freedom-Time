@extends('admin.layouts.master')

@section('content')

<div class="row">
<div class="col-md-5">

<div class="panel">
	<div class="panel-content">
    	<form method="post">
	<div class="form-group">
    	<label>Title</label>
    	<input type="text" class="form-control form-white" value="{{ $obj->title or '' }}" name="title">
    </div>
    <div class="form-group">
    	<label>Text</label>
    	<textarea name="text" class="form-control form-white" rows="5">{{ $obj->text or '' }}</textarea>
    </div>
	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ Request::input('id') }}">
    <input type="submit" class="btn btn-success"> 
     <a href="{{ url('admin/training/category') }}" class="btn btn-danger"> Close </a>
</form>
    </div>
</div>

</div><!-- end col -->
<div class="col-md-7">

<div class="panel">
	<div class="panel-content">

<table class="table table-bordered table-striped">
<thead>
	<tr> 
    	<th>ID</th> 
        <th>Title</th> 
        <th>Text</th> 
           <th></th> 
     </tr>
    </thead>
    <tbody>
    	@foreach($category as $row)
        	<tr>
            	<td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->text }}</td>
                <td> <a href="{{ url('admin/training/category?id='.$row->id) }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
    
</table>

</div>
</div><!-- end panel -->

</div><!-- end col -->
</div><!-- end row -->
@endsection