<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<!-- Core CSS -->
<link rel="stylesheet" href="<?=url('assets/css/bootstrap.css')?>">
<link rel="stylesheet" href="<?=url('assets/css/font-awesome.min.css')?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?=url('assets/css/main.css')?>">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="<?=url('assets/js/jquery.min.js')?>"></script> 
<script src="<?=url('assets/js/bootstrap.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=url('lib/toastr-master/build/toastr.css')?>">
<script src="<?=url('lib/toastr-master/build/toastr.min.js')?>"></script>
<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
</script>

</head>
<body>

<!-- HEADER START -->
<header id="header" class="dashboardPage   @if (Auth::guest())  createaccountpage @endif"> 
  
  <!--HEADER NAVIGATION START -->
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="<?=url('')?>"><img src="<?=url('assets/images/logo.png')?>" alt=""></a> </div>
      <!-- navbar-header --> 
      
      @if (Auth::guest())
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="#" data-toggle="modal" data-target="#modalLogin" class="btn btn-info">Login</a> 
           <!-- Modal -->
            <div class="modal fade" id="modalLogin" role="dialog">
              <div class="modal-dialog"> 
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header"> <a href="#">
                    <h3 class="text-uppercase">Login</h3>
                    </a>
                    <button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
                    <h2 class="modal-title text-center"></h2>
                  </div>
                  <!-- modal-header -->
                  <div class="modal-body">
                    <div class="row">
                      <div class="bodyContents">
                      	<div class="login_alert"></div>
                        <form class="form-horizontal" role="form" method="POST" >
                        
                          <div class="form-group">
                            <label for="usr">Email or Username:</label>
                            <input type="text" name="email" class="form-control" id="usr">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" name="password" class="form-control" id="pwd">
                          </div>
                        <div class="form-group">   
                    <a  href="{{ url('/password/reset') }}" style="color:#868686;font-size:12px; padding:0px;">Forgot Your Password?</a>
                    </div>
                        <a  onClick="login(this)" style="    width: 100%; margin:0;" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Login</a>
                        </form>
                        
                        <script type="text/javascript">
                        	function login(elem){
								  var form = $(elem).closest("form" ).serialize();
								  $.post( "{{ url('user/login') }}", form)
  .done(function( data ) {
	  $('.login_alert').html(data.message);
   		if(data.auth == true){
			window.location.replace("{{ url('dashboard') }}");

		}
  });
	
							}
                        </script>
                        
                      </div>
                      <!-- bodyContents --> 
                    </div>
                  </div>
                  <!-- modal-body -->
                  <div class="modal-footer"></div>
                  <!-- modal-footer --> 
                </div>
                <!-- modal-content --> 
                
              </div>
              <!-- modal-dialog --> 
            </div>
            <!-- modal fade --> 
            
          </li>
         
        </ul>
        <!-- navbar-right --> 
        
      </div>
      <!-- collapse navbar-collapse --> 
      
      @else
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-left">
          <li class="active one"><a href="#">Training</a></li>
          <li class="two"><a href="#">Account</a></li>
          <li class="three"><a href="#">Candidate Feedback</a></li>
        </ul>
        <!-- navbar-left -->
        
        <ul class="nav navbar-nav navbar-right">
         @if(Auth::user()->is_admin == 1)
         <li>  <a href="{{ url('admin') }}">Dashboard</a> </li>
         @endif
<?php /*?>          <li > <a style="padding-left:0;" href="{{ url('dashboard') }}">{{ Auth::user()->username }} </a> </li>
<?php */?>          <li> <a style="padding-left:0;" href="{{ url('logout') }}">Logout</a> </li>
        </ul>
        <!-- navbar-right --> 
        
      </div>
      <!-- collapse navbar-collapse --> 
      
      @endif </div>
    <!-- container --> 
  </nav>
  <!--HEADER NAVIGATION END --> 
  
</header>
<!-- HEADER END --> 

@yield('content') 

<!-- FOOTER START -->
<footer class="page" id="footer">
  <div class="content container-fluid">
    <div class="row paragraphRow">
      <p class="text-center">info@freedomtimeandwealth.com</p>
    </div>
  </div>
</footer>
<!-- FOOTER END --> 

<!-- Javascript --> 


 
<script src="<?=url('assets/js/myscript.js')?>"></script>
</body>
</html>