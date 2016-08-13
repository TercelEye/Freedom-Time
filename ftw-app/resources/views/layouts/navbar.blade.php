 
  <!--HEADER NAVIGATION START -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="{{ url('') }}"><img src="<?=url('assets/images/logo.png')?>" alt=""></a> </div>
      <!-- navbar-header -->
      
      <div class="collapse navbar-collapse" id="collapse">
        @if (Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li class="active"> <a href="#" data-toggle="modal" data-target="#modalLogin" class="btn btn-info">Login</a> 
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
        @else 
         <ul class="nav navbar-nav navbar-right">
         @if(Auth::user()->is_admin == 1)
         <li>  <a href="{{ url('admin') }}">Dashboard</a> </li>
         @endif
          <li>  <a href="{{ url('dashboard') }}">{{ Auth::user()->username }}</a> </li>
          <li> <a href="{{ url('logout') }}">Logout</a> </li>
        </ul>
        <!-- navbar-right --> 
        @endif
        
      </div>
      <!-- collapse navbar-collapse --> 
    </div>
    <!-- container --> 
  </nav>
  <!--HEADER NAVIGATION END --> 