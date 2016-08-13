@extends('layouts.homepage')

@section('title','FREEDOM || Home')

@section('content') 

<style type="text/css">

.main #maincontent .row .rightContent p span {
    cursor: text !important;
}
	</style>

<section class="main">
  <div class="page" id="maincontent">
    <div class="content container">
      <h2 class="text-center" id="topHeading">Different people, different needs</h2>
      <div class="row">
        <div class="singleContent one">
          <div class="leftImage col-xs-12 col-sm-6"> <img src="<?=url('assets/images/contentImage-1.jpg')?>" alt="Mom or Dad with family"> </div>
          <!-- leftImage -->
          <div class="rightContent col-xs-12 col-sm-6">
            <div class="wrapper">
              <h2>Are you a Mom or Dad with family?</h2>
              <h3>(And the pace of life is sometimes breathtaking)</h3>
              <p class="firstP">You are busy.  Maybe you are involved in sporting events with your kids 2 to 3 nights a week.  You’ve thought about a home-based business, but you’ve not found the right opportunity that can work with your schedule. </p>
              <hr>
              <p class="secondP">Bring your busy schedule with you!  Let’s see how we might be able to simplify things a bit in your life.  Clink on the link below to learn more.</p>
            </div>
            <!-- wrapper --> 
          </div>
          <!-- rightContent --> 
        </div>
        <!-- singleContent one-->
        
        <div class="singleContent two">
          <div class="leftImage col-xs-12 col-sm-6">
            <div class="imgWrapper"> <img src="<?=url('assets/images/contentImage-2.jpg')?>" alt="Career Professionals"> </div>
            <!-- imgWrapper --> 
          </div>
          <!-- leftImage -->
          <div class="rightContent col-xs-12 col-sm-6">
            <div class="wrapper">
              <h2>Are you a Career Professional?</h2>
              <h3>(Corporate, Medical, Law, Engineering, etc.)</h3>
              <p class="firstP">You are established.  You have a career, a solid education, and plenty of experience.  Your compensation may even be rock solid.  Yet, you’ve wondered if it is actually possible to do something part-time and eventually match <span>your</span> income.  Personal freedom and options are important to you but you are <span>admittedly</span> <span>skeptical</span>.</p>
              <hr>
              <p class="secondP">Healthy skepticism is good!  Bring it with you to the link below and discover an alternative ways to diversify your income.</p>
            </div>
            <!-- wrapper --> 
          </div>
          <!-- rightContent --> 
        </div>
        <!-- singleContent two-->
        
        <div class="singleContent three">
          <div class="leftImage col-xs-12 col-sm-6"> <img src="<?=url('assets/images/contentImage-3.jpg')?>" alt="Just getting started career"> </div>
          <!-- leftImage -->
          <div class="rightContent col-xs-12 col-sm-6">
            <div class="wrapper">
              <h2>Just getting started in your career?</h2>
              <p class="firstP">You are excited about life’s potential as your future is bright and life is good.  But what you really want is a legitimate way shorten the path to financial and personal success.</p>
              <hr>
              <p class="secondP">Let’s show you another way to increase the options available to you. </p>
              <p class="thirdP">Take a moment and click on the link below. </p>
              <a href="#" style=" cursor: text">No previous experience required!</a> </div>
            <!-- wrapper --> 
          </div>
          <!-- rightContent --> 
        </div>
        <!-- singleContent three-->
        
        <div class="singleContent four">
          <div class="leftImage col-xs-12 col-sm-6"> <img src="<?=url('assets/images/contentImage-4.jpg')?>" alt="nearing retirement"> </div>
          <!-- leftImage -->
          <div class="rightContent col-xs-12 col-sm-6">
            <div class="wrapper">
              <h2>Are you nearing retirement?</h2>
              <p class="firstP">You’ve worked all your life.  “Retirement” is close or perhaps the time is already upon you are open-minded to the right home based business.   The key for you is picking the right opportunity.  You need <span>products you can believe in</span> and an opportunity to work on <span>your</span> terms.</p>
              <hr>
              <p class="secondP">Congratulations if you are in this stage in your life!  Click on the link below to get your questions answered and learn how this might enhance your retirement options.</p>
            </div>
            <!-- wrapper --> 
          </div>
          <!-- rightContent --> 
        </div>
        <!-- singleContent four--> 
      </div>
      <!-- row --> 
    </div>
    <!-- content container --> 
  </div>
  <!-- maincontent page --> 
</section>
<!-- main --> 

<!-- FOOTER START -->
<footer class="page" id="footer">
  <div class="content container-fluid">
    <div class="row">
    
   
    @if(Request::input('referrer_id') !="")
      <a href="#" data-toggle="modal" data-target="#modalWatchTheVideo" class="btn btn-info">Watch The Video</a> 	
   <?php /*?>  <script type="text/javascript">
	 $(document).ready(function(e) {
        $("#modalWatchTheVideo").modal('show');
    });
    
     </script><?php */?>
    @else 
     	      <a href="#" data-toggle="modal" data-target="#modalReferrerID" class="btn btn-info">Watch The Video</a> 	

    @endif
      <!-- watch vide details form -->
      <div class="modal fade" id="modalWatchTheVideo" role="dialog">
        <div class="modal-dialog"> 
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header"> <a href="#">
              <h3 class="text-uppercase">Watch video</h3>
              </a>
              <button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
              <h2 class="modal-title text-center"></h2>
            </div>
            
            <!-- modal-header -->
            <div class="modal-body">
              <div class="row">
                <div class="bodyContents">
                  <form role="form" action="{{ url('can-watch') }}" method="post" id="watch_video">
                  	<div class="ajax_error"></div>
                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input type="text" name="name" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Email:</label>
                      <input type="email" name="email" autocomplete="off"  value="{{ Request::input('email') }}" class="form-control" {{ (Request::input('email')!=""? 'readonly' : '') }} id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Phone:</label>
                      <input type="text" name="phone"  class="form-control" id="phone">
                    </div>
                   
                    <a id="watch_video_submit" class="btn btn-info"><!-- <button class="btn btn-info">Submit</button> -->Submit</a>
                  </form>
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
      <!-- end watch vide details form  --> 
      
       <!-- userid form -->
      <div class="modal fade" id="modalReferrerID" role="dialog">
        <div class="modal-dialog"> 
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header"> 
                          <button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>

            <a href="#">
              <h3 class="text-uppercase">Please let us know who referred you
</h3>
              </a>
              <h2 class="modal-title text-center"></h2>
            </div>
            
            <!-- modal-header -->
            <div class="modal-body">
              <div class="row">
                <div class="bodyContents" style="padding:25px;">
                  <form role="form" action="{{ url('referrer_id_validate') }}" method="post" id="wsatch_video">
                  	<div class="ajax_error"></div>
                  
                    <div class="form-group">
                      <label for="pwd">Enter the ID of the person who referred you:</label>
                      <input type="text" {{ (Request::input('referrer_id')!=""? 'readonly' : '') }}  name="referrer_id" autocomplete="off" value="{{ Request::input('referrer_id') }}"  class="form-control" id="spass">
                    </div>
                    <a id="referrer_id_validate" style="font-size: 17px;padding: 7px;height: 43px; width: 100%;" class="btn btn-sm btn-info"><!-- <button class="btn btn-info">Submit</button> -->Submit</a>
                  </form>
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
      <!-- end watch vide details form  --> 
      
    </div>
    
    <script type="text/javascript">
    $("#watch_video_submit").click(function(e) {
		
		  var $btn = $(this).button('loading')
		  
        var form_data = $(this).closest('form').serialize();
		
		
		var form = $(this).closest('form');

    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) 
        {
			 $btn.button('reset')
            toastr.success( json.message , "" );
			window.location.replace(json.url);
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response)
    {
        //
		
		
		
    })
    .fail(function( jqXHR, json ) 
    {
      
    });
    return false;
		
		
		
		
		
    });
	
	  $("#referrer_id_validate").click(function(e) {
		
		  var $btn = $(this).button('loading')
		  
        var form_data = $(this).closest('form').serialize();
		
		
		var form = $(this).closest('form');

    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) 
        {
			$btn.button('reset')
			if(json.status == true) {
				$("#modalWatchTheVideo").modal('show');	 
				$("#modalReferrerID").modal('hide');	 
			}
            //toastr.success( json.message , "" );
			//window.location.replace(json.url);
			
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
			$btn.button('reset')
			 if(jqXhr.status  ==0) {
				  toastr.error( 'could not connect to server' , "Connection Error " );
				   
			 }
			 
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
			
            toastr.error( errorsHtml , "Validation Error " );
			 
        }
    })
    .done(function(response)
    {
        //
		
		
		
    })
    .fail(function( jqXHR, json ) 
    {
      
    });
    return false;
		
		
		
		
		
    });
    </script>
    
    <div class="row paragraphRow">
      <p class="text-center">info@freedomtimeandwealth.com</p>
    </div>
  </div>
</footer>
<!-- FOOTER END --> 

@endsection 