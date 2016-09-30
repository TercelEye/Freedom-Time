@extends('admin.layouts.master')

@section('content')

<div class="row">
<div class="col-md-12">

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
</div><!-- end panel -->

</div><!-- end col -->
</div><!-- end row -->

@stop
