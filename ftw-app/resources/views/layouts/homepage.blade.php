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

<link rel="stylesheet" type="text/css" href="<?=url('lib/toastr-master/build/toastr.css')?>">
<script src="<?=url('lib/toastr-master/build/toastr.min.js')?>"></script>
</head>
<body>

<!-- HEADER START -->
<header id="header" class=""> 
  
  
@include('layouts.navbar')
  
  <!-- HEADER CAROUSEL START -->
  <div class="carousel fade animated flipInX" data-ride="carousel" id="featured"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <!-- <a id="service" href=""></a> -->
    </ol>
    <div class="carousel-inner fullheight">
      <div class="item one active"><img src="<?=url('assets/images/header-bg1.jpg')?>" alt="carousel-image">
        <div class="iteminner">
          <div class="itemTop">
            <div class="wrapper">
              <h1>Empower Yourself to Financial Freedom</h1>
              <p>Kick start your stay-at-home business venture today</p>
            </div>
            <!-- wrapper --> 
          </div>
          <div class="itemBottom">
            <h2>Better Options. Better Life.</h2>
            <p>In today’s fast-paced world, starting your own home-based business can be a daunting task.  The ingredients required – high-demand products, no traditional selling techniques,  a proven system, and the ability to be flexible in growing the business are all critical. Interestingly enough, where you are in life will also be important.  If you have an active family, time flexibility may be a big factor. A business professional?  The ability to participate part-time may be key.  Check out the information below and click on the link to learn more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- featured carousel --> 
  </div>
  <!-- HEADER CAROUSEL END --> 
</header>
<!-- HEADER END -->


@yield('content')


	<!-- Javascript -->

<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
</script>
<script src="<?=url('assets/js/bootstrap.js')?>"></script>
<script src="<?=url('assets/js/myscript.js')?>"></script>


</body>
</html>