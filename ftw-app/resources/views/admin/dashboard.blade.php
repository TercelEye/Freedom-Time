@extends('admin.layouts.master')

@section('content')
<style type="text/css">
.panel.dashboard i {
      font-size: 165px;
}
.panel.dashboard .panel-content {
  text-align: center;
} 
.panel.dashboard .panel-content h3 {
    border-top: solid 1px #e2e2e2;
    padding-top: 15px;
}
.panel.dashboard .panel-content h3 a{
     font-size: 25px;
    text-decoration: none;
    color: #848484;
    font-weight: bold;
}
</style>
    <div class="row">
        <div class="col-md-4">
          <div class="panel dashboard">
                <div class="panel-content">
                    <i class="fa fa-fw fa-users"></i>
                    <h3><a href="{{url('admin/affiliates')}}">{{$affiliates_count}} affiliates</a></h3>
                  <p> 
                  </p>
                </div>
              </div><!-- end panel -->
        </div><!-- end col -->

        <div class="col-md-4">
          <div class="panel dashboard">
                <div class="panel-content">
                    <i class="fa fa-fw fa-bank"></i>
                    <h3><a href="#">${{$total_fund}}</a></h3>
                  <p> 
                  </p>
                </div>
              </div><!-- end panel -->
        </div><!-- end col -->

        <div class="col-md-4">
          <div class="panel dashboard">
                <div class="panel-content">
                    <i class="fa fa-fw fa-user"></i>
                    <h3><a href="#">{{$admin_count}} admins</a></h3>
                  <p> 
                  </p>
                </div>
              </div><!-- end panel -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection