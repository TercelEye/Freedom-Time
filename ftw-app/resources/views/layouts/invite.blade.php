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
</head>
<body>



<!-- HEADER START -->
<header id="header" class="videoPage">

	@include('layouts.navbar')

</header>
<!-- HEADER END -->

<br><br><br><br><br><br>

@yield('content')






	<!-- Javascript -->
<script src="<?=url('assets/js/jquery.min.js')?>"></script>
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