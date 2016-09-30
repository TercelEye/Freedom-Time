<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="{{asset('assets/admin')}}/images/favicon.png" type="image/png">
    <title>Administrator</title>
    <link href="{{asset('assets/admin')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets/admin')}}/css/theme.css" rel="stylesheet">
    <link href="<{{asset('assets/admin')}}/css/ui.css" rel="stylesheet">
    <link href="{{asset('assets/admin/layout')}}/css/layout.css" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="{{asset('assets/admin')}}/plugins/metrojs/metrojs.min.css" rel="stylesheet">
    <link href="{{asset('assets/admin')}}/plugins/maps-amcharts/ammap/ammap.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="{{asset('assets/admin')}}/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
  
  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
  <!-- BEGIN BODY -->
  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <a href="{{ url ('admin') }}" style="background-image:none;">Freedom Time</a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h4>
                <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                  <i class="online"></i><span>Administrator</span>
                  </button>
                
                </div>
              </div>
            </div>
          </div>
          <div class="menu-title">
            Navigation 
      
          </div>
          <ul class="nav nav-sidebar">
         <?php /*?>   <li  {!! Request::is('admin') ? 'class="nav-active active"' : '' !!}><a  href="{{ url('admin') }}"><i class="icon-home"></i><span>Dashboard</span></a></li><?php */?>
         
          
          
           <li {!! Request::is('admin/affiliates') ? 'class="nav-active active"' : '' !!}>
              <a href="{{ url('admin/affiliates') }}"><i class="icon-user"></i><span>Affiliates</span></a>
             
            </li>


           <li {!! Request::is('admin/wthdraw') ? 'class="nav-active active"' : '' !!}>
              <a href="{{ url('admin/wthdraw') }}"><i class="icon-user"></i><span>Wthdraw</span></a>
             
            </li>
         
            <li class="nav-parent {!! Request::is('admin/training/*') ||  Request::is('admin/training') ? 'nav-active active' : '' !!} ">
              <a href=""><i class="icon-docs"></i><span>Training </span><span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="{{ url('admin/training/category') }}"> Category</a></li>
                <li><a href="{{ url('admin/training') }}"> All Trainings</a></li>
              </ul>
            </li>
         
       
          </ul>
          <!-- SIDEBAR WIDGET FOLDERS -->
         
          <div class="sidebar-footer clearfix">
        
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
           
            <a class="pull-left btn-effect" href="{{ url('logout') }}" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
              <ul class="nav nav-icons">
                <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="language-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-globe"></i>
                <span>Language</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#" data-lang="en"><img src="<?=asset('assets/admin')?>/images/flags/usa.png" alt="flag-english"> <span>English</span></a>
                  </li>
         
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
   <?php /*?>           <!-- BEGIN NOTIFICATION DROPDOWN -->
              <li class="dropdown" id="notifications-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-bell"></i>
                <span class="badge badge-danger badge-header">6</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">12 Pending Notifications</p>
                  </li>
                  <li>
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                      <li>
                        <a href="#">
                        <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                        Steve have rated your photo
                        <span class="dropdown-time">Just now</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                        John added you to his favs
                        <span class="dropdown-time">15 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-file-text p-r-10 f-18"></i>
                        New document available
                        <span class="dropdown-time">22 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">40 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                        Meeting in 1 hour
                        <span class="dropdown-time">1 hour</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18"></i>
                        Server 5 overloaded
                        <span class="dropdown-time">2 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                        Bill comment your post
                        <span class="dropdown-time">3 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">2 days</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="#" class="pull-left">See all notifications</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END NOTIFICATION DROPDOWN -->
              <!-- BEGIN MESSAGES DROPDOWN -->
              <li class="dropdown" id="messages-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-paper-plane"></i>
                <span class="badge badge-primary badge-header">
                8
                </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">
                      You have 8 Messages
                    </p>
                  </li>
                  <li class="dropdown-body">
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?=asset('assets/admin')?>/images/avatars/avatar3.png" alt="avatar 3">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Alexa Johnson</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?=asset('assets/admin')?>/images/avatars/avatar4.png" alt="avatar 4">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>John Smith</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?=asset('assets/admin')?>/images/avatars/avatar5.png" alt="avatar 5">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Bobby Brown</strong>  
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="<?=asset('assets/admin')?>/images/avatars/avatar6.png" alt="avatar 6">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>James Miller</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="mailbox.html" class="pull-left">See all messages</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END MESSAGES DROPDOWN --><?php */?>
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img src="<?=asset('assets/admin')?>/images/avatars/user1.png" alt="user image">
                <span class="username">Hi, {{ Auth::user()->fname }} </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ url('dashboard') }}"><i class="icon-user"></i><span>My Account</span></a>
                  </li>
                  <li>
                    <a href="{{ url('dashboard') }}"><i class="icon-settings"></i><span>Change Password</span></a>
                  </li>
                  <li>
                    <a href="{{ url('logout') }}"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              <!-- CHAT BAR ICON -->
            
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-thin">
          @yield('content')
         
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2016 </span>
                <span>TercelEye</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="http://terceleye.com/" target="_blank" class="m-r-10">Support</a> | <a href="http://terceleye.com/"  target="_blank" class="m-l-10 m-r-10">Terms of use</a> | <a  target="_blank" href="http://terceleye.com/" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
     
    </section>

    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    <script src="<?=asset('assets/admin')?>/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/gsap/main-gsap.min.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="<?=asset('assets/admin')?>/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="<?=asset('assets/admin')?>/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="<?=asset('assets/admin')?>/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="<?=asset('assets/admin')?>/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="<?=asset('assets/admin')?>/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="<?=asset('assets/admin')?>/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="<?=asset('assets/admin')?>/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="<?=asset('assets/admin')?>/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="<?=asset('assets/admin')?>/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="<?=asset('assets/admin')?>/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="<?=asset('assets/admin')?>/js/builder.js"></script> <!-- Theme Builder -->
    <script src="<?=asset('assets/admin')?>/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="<?=asset('assets/admin')?>/js/application.js"></script> <!-- Main Application Script -->
    <script src="<?=asset('assets/admin')?>/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="<?=asset('assets/admin')?>/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="<?=asset('assets/admin')?>/js/quickview.js"></script> <!-- Chat Script -->
    <script src="<?=asset('assets/admin')?>/js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPT -->
    <script src="<?=asset('assets/admin')?>/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
    <script src="<?=asset('assets/admin')?>/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
    <script src="<?=asset('assets/admin')?>/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
    <script src="<?=asset('assets/admin')?>/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
    <script src="<?=asset('assets/admin')?>/js/widgets/todo_list.js"></script>
    <script src="<?=asset('assets/admin')?>/plugins/metrojs/metrojs.min.js"></script> <!-- Flipping Panel -->
    <script src="<?=asset('assets/admin')?>/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
    <script src="<?=asset('assets/admin')?>/plugins/charts-highstock/js/highstock.min.js"></script> <!-- financial Charts -->
    <script src="<?=asset('assets/admin')?>/plugins/charts-highstock/js/modules/exporting.min.js"></script> <!-- Financial Charts Export Tool -->
    <script src="<?=asset('assets/admin')?>/plugins/maps-amcharts/ammap/ammap.min.js"></script> <!-- Vector Map -->
    <script src="<?=asset('assets/admin')?>/plugins/maps-amcharts/ammap/maps/js/worldLow.min.js"></script> <!-- Vector World Map  -->
    <script src="<?=asset('assets/admin')?>/plugins/maps-amcharts/ammap/themes/black.min.js"></script> <!-- Vector Map Black Theme -->
    <script src="<?=asset('assets/admin')?>/plugins/skycons/skycons.min.js"></script> <!-- Animated Weather Icons -->
    <script src="<?=asset('assets/admin')?>/plugins/simple-weather/jquery.simpleWeather.js"></script> <!-- Weather Plugin -->
    <script src="<?=asset('assets/admin')?>/js/widgets/widget_weather.js"></script>
    <script src="<?=asset('assets/admin')?>/js/pages/dashboard.js"></script>
    <!-- END PAGE SCRIPT -->
    <script src="<?=asset('assets/admin/layout')?>/js/layout.js"></script>
  </body>
</html>

