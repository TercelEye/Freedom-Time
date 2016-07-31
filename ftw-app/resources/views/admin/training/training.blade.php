@extends('admin.layouts.master')

@section('content')

@if(Session::has('error'))
<div class="alert alert-danger">
@foreach (Session::get('error') as $message)
   {{ $message }} <br>
@endforeach
</div>
@endif

<div class="row">
	<div class="col-md-6">
   		 <div class="panel">
	<div class="panel-content">
    	<form method="post" enctype="multipart/form-data">
   <div class="form-group">
    	<label>Category</label>
        <select name="category_id" class="form-control form-white">
        	@foreach($category as $row)
        	<option value="{{ $row->id }}" <?php if( Request::input('id')!=""){?> {{ ($row->id== $obj->category_id?"selected":"") }} <?php } ?> > {{ $row->title }}</option>
            @endforeach
        </select>
    	
    </div>    
        
	<div class="form-group">
    	<label>Title</label>
    	<input type="text" class="form-control form-white" value="{{ $obj->title or '' }}" name="title">
    </div>
    
    <div class="form-group">
    	<label>Youtube URL</label>
    	<input type="text" class="form-control form-white" value="{{ $obj->youtube_vide or '' }}" name="youtube_vide">
    </div>
    
     <div class="form-group">
    	<label>Pdf File</label>
    	<input type="file" class="form-control form-white" name="pdf">
    </div>
    
    <div class="form-group">
    	<label>Text</label>
    	<textarea name="text" class="form-control form-white" rows="5">{{ $obj->text or '' }}</textarea>
    </div>
    
	{{ csrf_field() }}
    <input type="hidden" name="id" value="{{ Request::input('id') }}">
    <input type="submit" class="btn btn-success"> 
     <a href="{{ url('admin/training') }}" class="btn btn-danger"> Close </a>
</form>
    </div>
</div>
    </div><!-- end col 6 -->
    
    @if(Request::input('id')!="")
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-content">
            <?php 
			strtok( $obj->youtube_vide, '?');

  parse_str(strtok(''));

			?>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $v or '' }}" frameborder="0" allowfullscreen></iframe>
           <a target="_blank" href="{{ url('uploads/'.$obj->pdf) }}" class="btn btn-lg btn-block btn-primary">
           <i class="fa fa-file-pdf-o pull-left"></i>Download PDF</a>
            </div>
        </div>
    </div>
    @endif
</div><!--end row-->


<?php if($category!=false){ foreach ($category as $cat):
$training = $cat->training;
?>
  		 <div class="panel">
	<div class="panel-content">
    <h2>{{ $cat->title }}</h2>
<table class="table table-bordered table-striped">
<thead>
	<tr> 
    	<th>ID</th> 
        <th>Title</th> 
        <th>Text</th> 
        <th>Pdf File</th> 
        <th>Youtube URL</th>
        <th width="50"></th> 
        <th width="10"></th> 
     </tr>
    </thead>
    <tbody>
    	@if($training!=false)
    	@foreach($training as $row)
        	<tr>
            
            	<td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->text }}</td>
                <td>{{ $row->pdf }}</td>
                <td>{{ $row->youtube_vide }}</td>
                <td><a class="btn btn-sm btn-warning" href="{{ url('admin/training?id='.$row->id)}}"> Edit </a></td>
                 <td>
                 <form method="post" onsubmit="return confirm('Do you really want to delete this?');" action="{{ url('admin/delete_training') }}">
                 	{{ csrf_field() }}
    				<input type="hidden" name="id" value="{{ $row->id }}">
                    <input type="submit" class="btn btn-sm btn-danger" value="delete">
                 </form>
                 </td>
            </tr>
        @endforeach
        @endif
    </tbody>
    
</table>

</div>
</div><!-- end panel -->
<?php endforeach; } ?>
@endsection