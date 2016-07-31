@extends('layouts.invite')

@section('title','FREEDOM ')
@section('content') 

<form method="post" id="form101">
<section class="main videoPage productsPage">
  <div id="topThirdProduct">
    <div class="content container">
      <div class="row">
     

        <p class="text-center topP">
        
   

       <div class="alert alert-success"> Your request send successfully.Someone will follow up with you in the next 48 hours to answer your questions and provide you with more information.
       </div>
       </p>
</div>
</div>
</div>
</section>
<!-- main --> 
</form>

<!-- FOOTER START -->
<footer class="page" id="footerVideoPage">
	<div class="content container-fluid">
		<div class="row">
			<div class="wrapper">
				<p class="text-center firstOneP">The person who invited you to this opportunity is</p>
				<p class="text-center">{{ $invitaion->sender->fname }} {{ $invitaion->sender->lname }}</p>
				<p class="text-center">{{ $invitaion->sender->tel }}</p>
				<p class="text-center lastOneP">{{ $invitaion->sender->email }}</p>		
			</div><!-- wrapper -->
		</div>
	</div>
</footer>
<!-- FOOTER END --> 
@endsection