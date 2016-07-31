@extends('layouts.invite')

@section('title','FREEDOM ')
@section('content') 

<form method="post" id="form101">
<section class="main videoPage productsPage">
  <div id="topThirdProduct">
    <div class="content container">
      <div class="row">
     


 @if (count($errors) > 0)
 <br>
    <div class="alert alert-danger">
        <ul style="padding:5px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <p class="text-center topP">
        
        
     <?php $products = (old('intrest_products') !="" ? old('intrest_products') : array('dd'=>'ssd')) ;  //print_r($products);exit;?>

        You have indicated that you have interest in one or more of the products and would like more information. Would you please share with us which products you like in particular and why? Someone will follow up with you in the next 48 hours to answer your questions and provide you with more information.</p>
        <p class="bottomP">Select the products you are interested in:</p>
        <div class="singlecolumn one col-sm-3">
          <div class="wrapper">
            <div class="checkbox productCheckbox">
                <p>
                  <input type="checkbox" name="intrest_products[]" {{ ( in_array("Fresh air",$products) ? 'checked' :'')  }} value="Fresh air" id="test1" />
                  <label for="test1"></label>
                </p>
           
            </div>
            <div class="imgWrapper"> <img src="<?=url('assets')?>/images/freshair.png" alt=""> </div>
            <!-- imgWrapper -->
            <div class="contentWrapper">
              <h3>Fresh air</h3>
              <p>Sanitizes Surfaces</p>
              <p>Purifies Air</p>
              <p>Up to 3,000 sq. ft.</p>
            </div>
            <!-- contentWrapper --> 
          </div>
          <!-- wrapper --> 
        </div>
        <!-- singlecolumn one -->
        
        <div class="singlecolumn two col-sm-3">
          <div class="wrapper">
            <div class="checkbox productCheckbox">
           
                <p>
                  <input type="checkbox" name="intrest_products[]" {{ ( in_array("Living water",$products) ? 'checked' :'')  }} value="Living water" id="test2" />
                  <label for="test2"></label>
                </p>
        
            </div>
            <div class="imgWrapper"> <img src="<?=url('assets')?>/images/livingwater.png" alt=""> </div>
            <!-- imgWrapper -->
            <div class="contentWrapper">
              <h3>Living water</h3>
              <p>Hydrating</p>
              <p>alkaline</p>
              <p>State-Of-The-Art</p>
            </div>
            <!-- contentWrapper --> 
          </div>
          <!-- wrapper --> 
        </div>
        <!-- singlecolumn two -->
        
        <div class="singlecolumn three col-sm-3">
          <div class="wrapper">
            <div class="checkbox productCheckbox">
              
                <p>
                  <input type="checkbox" name="intrest_products[]" {{ ( in_array("Laundry Pure",$products) ? 'checked' :'')  }} value="Laundry Pure" id="test3" />
                  <label for="test3"></label>
                </p>
          
            </div>
            <div class="imgWrapper"> <img src="<?=url('assets')?>/images/laundrypure.png" alt=""> </div>
            <!-- imgWrapper -->
            <div class="contentWrapper">
              <h3>Laundry Pure</h3>
              <p>Clean Laundry w/</p>
              <p>Not Hot water</p>
              <p>No Detergent</p>
            </div>
            <!-- contentWrapper --> 
          </div>
          <!-- wrapper --> 
        </div>
        <!-- singlecolumn three -->
        
        <div class="singlecolumn four col-sm-3">
          <div class="wrapper">
            <div class="checkbox productCheckbox">
              
                <p>
                  <input type="checkbox" name="intrest_products[]" {{ ( in_array("Essentials for Life",$products) ? 'checked' :'')  }} value="Essentials for Life"  id="test4" />
                  <label for="test4"></label>
                </p>
         
            </div>
            <div class="imgWrapper"> <img src="<?=url('assets')?>/images/essential.png" alt=""> </div>
            <!-- imgWrapper -->
            <div class="contentWrapper">
              <h3>Essentials for Life</h3>
              <p>6-in-1 Product</p>
              <p class="doubling">Fat-Digesting Enzymes</p>
              <p>Probiotics</p>
            </div>
            <!-- contentWrapper --> 
          </div>
          <!-- wrapper --> 
        </div>
        <!-- singlecolumn four --> 
      </div>
      <!-- row --> 
    </div>
    <!-- content container --> 
  </div>
  <!-- topThirdProduct -->
  
  <div class="productsPageBottomTextArea">
    <div class="content container">
      <div class="row">
        <div class="topArea col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
          <div class="checkbox productCheckbox">
              <p>
                <input type="checkbox"  {{ ( old('quality_check')==1 ? 'checked' :'')  }} name="quality_check" value="1" id="test111" />
                <label for="test111"></label>
              </p>
          </div>
          <p class="text-left rightP">I’d really be interested in a FREE Healthy Home Air and Surface Quality Check Up ($ 39.00 value).  Please send the kit to me so I can test my own home!</p>
        </div>
        <!-- topArea -->
        
        <div class="wrapper col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
          <p class="text-center topP">Tell us why you like these products and what information would you require:</p>
          <div class="form-group">
            <textarea class="form-control" name="note" rows="8" id="comment">{{ old('note') }}</textarea>
          </div>
        </div>
        <!-- wrapper -->
        
        <div class="bottomAreaDisclaimer col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
          <p class="text-left"><span>WIN-WIN ALERT: </span>If the person who invited you to this information is a friend of yours, your interest and possible usage of these products is an excellent way for you to enjoy these products while supporting your friend as they grow their business.</p>
         {{ csrf_field() }}

          <a class="submitButton" href="#" onClick="document.getElementById('form101').submit();">submit</a> </div>
        <!-- bottomAreaDisclaimer --> 
        
      </div>
      <!-- row --> 
    </div>
    <!-- content container --> 
  </div>
  <!-- productsPageBottomTextArea --> 
  
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