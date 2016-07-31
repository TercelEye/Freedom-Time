@extends('layouts.invite')

@section('title','FREEDOM || Video')
@section('content') 


<section class="main videoPage">
	<div id="topFirstDescrip">
		<div class="content container">
			<div class="row">
				<h1>BETTER OPTIONS. BETTER LIFE.</h1>
				<h2>IT’S AS EASY AS 1, 2, 3...</h2>
				<ul>
					<li><a href="">1) Watch a short 12-minute video   </a></li>
					<li><a href="">2) Review the product tours </a></li>
					<li><a href="">3) Indicate your level of interest</a></li>
				</ul>
			</div><!-- row -->
		</div><!-- content container -->
	</div><!-- topFirstDescrip -->





	<div id="topSecondVideo">
		<div class="content container">
			<div class="row">
				<p class="text-center topP"><span>Step 1 of 3:</span> Learn more about this amazing opportunity in this short 12-minute video</p>
				<div class="leftVideo col-sm-8">
					<iframe src="https://player.vimeo.com/video/55073825" width="941" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div><!-- leftVideo -->

				<div class="rightContent col-sm-4">
					<div class="wrapper">
						<p>In this video you will learn...</p>
						<ul>
							<li><a href=""> - How to create long-term residual income and “now” money.</a></li>
							<li><a href=""> - Reviewing the # 1 ingredient for success in a home based business.</a></li>
							<li><a href=""> - How to successfully grow a home based business without traditional selling techniques.</a></li>
						</ul>
					</div><!-- wrapper -->
				</div><!-- rightContent -->

			</div><!-- row -->

		</div><!-- content container -->
	</div><!-- topSecondVideo -->


	<hr class="container videoPageHr">


	<div id="topThirdProduct">
		<div class="content container">
			<div class="row">
				<p class="text-center topP"><span>Step 2 of 3:</span> View the product tours to learn why your timing is perfect to make a potential fortune with these unique, cutting-edge, green technologies. Important: View the air and water tours first as these are our primary product offerings</p>

				<div class="singlecolumn one col-sm-3">
					<div class="wrapper">
						<div class="imgWrapper">
							<img src="<?=url('assets/images/freshair.png')?>" alt="">
						</div><!-- imgWrapper -->
						<div class="contentWrapper">
							<h3>Fresh air</h3>
							<p>Sanitizes Surfaces</p>
							<p>Purifies Air</p>
							<p>Up to 3,000 sq. ft.</p>
							<a href="{{ url('products/freshair?invitation='.Request::input('invitation'))}}" class="btn btn-info">view the tour</a>	
						</div><!-- contentWrapper -->
					</div><!-- wrapper -->
				</div><!-- singlecolumn one -->

				<div class="singlecolumn two col-sm-3">
					<div class="wrapper">
						<div class="imgWrapper">
							<img src="<?=url('assets/images/livingwater.png')?>" alt="">
						</div><!-- imgWrapper -->
						<div class="contentWrapper">
							<h3>Living water</h3>
							<p>Hydrating</p>
							<p>alkaline</p>
							<p>State-Of-The-Art</p>
							<a href="{{ url('products/livingwater?invitation='.Request::input('invitation'))}}" class="btn btn-info">view the tour</a>				
						</div><!-- contentWrapper -->
					</div><!-- wrapper -->
				</div><!-- singlecolumn two -->

				<div class="singlecolumn three col-sm-3">
					<div class="wrapper">
						<div class="imgWrapper">
							<img src="<?=url('assets/images/laundrypure.png')?>" alt="">
						</div><!-- imgWrapper -->
						<div class="contentWrapper">
							<h3>Laundry Pure</h3>
							<p>Clean Laundry w/</p>
							<p>Not Hot water</p>
							<p>No Detergent</p>
							<a href="{{ url('products/laundrypure?invitation='.Request::input('invitation'))}}" class="btn btn-info">view the tour</a>
						</div><!-- contentWrapper -->
					</div><!-- wrapper -->
				</div><!-- singlecolumn three -->

				<div class="singlecolumn four col-sm-3">
					<div class="wrapper">
						<div class="imgWrapper">
							<img src="<?=url('assets/images/essential.png')?>" alt="">
						</div><!-- imgWrapper -->
						<div class="contentWrapper">
							<h3>Essentials for Life</h3>
							<p>6-in-1 Product</p>
							<p class="doubling">Fat-Digesting Enzymes</p>
							<p>Probiotics</p>
							<a href="{{ url('products/neutra?invitation='.Request::input('invitation'))}}" class="btn btn-info">view the tour</a>	
						</div><!-- contentWrapper -->
					</div><!-- wrapper -->
				</div><!-- singlecolumn four -->
			</div><!-- row -->
		</div><!-- content container -->
	</div><!-- topThirdProduct -->


	<hr class="container videoPageHr">


	<div id="topFourInterest">
		<div class="content container">
			<p class="text-center topP"><span>Step 3:</span> Let us know your level of interest</p>
			<div class="row">
				<div class="singleTab one col-sm-3">
					<div class="wrapper">
						<a href="{{ url('interest/form?click=1&invitation='.Request::input('invitation'))}}" >
						Ready to go
						</a>
						
					</div><!-- wrapper -->
				</div><!-- singleTab one -->

				<div class="singleTab two col-sm-3">
					<div class="wrapper">
						<a href="{{ url('interest/form?click=2&invitation='.Request::input('invitation'))}}" >
						Have a few questions
						</a>
						<div class="modal fade" id="modalhaveafewquestions" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
									<div class="modal-header">
										<button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
										<h2 class="modal-title text-center"></h2>
									</div><!-- modal-header -->
									<div class="modal-body">
										<div class="row">
											<div class="bodyContents">
												<form role="form">
													<div class="form-group">
														<label for="usr">Username:</label>
														<input type="text" class="form-control" id="usr">
													</div>
													<div class="form-group">
														<label for="pwd">Password:</label>
														<input type="password" class="form-control" id="pwd">
													</div>
												</form>
											</div><!-- bodyContents -->
										</div>
									</div><!-- modal-body -->
									<div class="modal-footer"></div><!-- modal-footer -->
								</div><!-- modal-content -->

							</div><!-- modal-dialog -->
						</div><!-- modal fade -->
					</div><!-- wrapper -->
				</div><!-- singleTab two -->

				<div class="singleTab three col-sm-3">
					<div class="wrapper">
						<a href="" data-toggle="modal" data-target="#modalnotformeatthistime" data-placement="right" title="Thanks, but this is not for me right now.">
						Not for me at this time
						</a>
						<div class="modal fade" id="modalnotformeatthistime" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">

										<p>You have decided this is not for you at this time and we respect your decision.</p>

										<button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
										<h2 class="modal-title text-center"></h2>
									</div><!-- modal-header -->
									<div class="modal-body">
										<div class="row">
											<div class="bodyContents">
												<p class="firstP">Your interest status will now be sent to the person who invited you to this oppertunity.</p>
												<p class="secondP">click 'OK' to send or click 'CANCEL' to change to a different interest status</p>
												<p class="thirdP">NOTE: GREEN and YELLOW will provide the opportunity to learn more about these products and opportunity.</p>
												<a class="redbuttonok" href="{{ url('interest/cancel?invitation='.Request::input('invitation')) }}" >OK</a>
												<a class="redbuttoncancel" href="#" data-dismiss="modal">CANCEL</a>
											</div><!-- bodyContents -->
										</div>
									</div><!-- modal-body -->
									<div class="modal-footer"></div><!-- modal-footer -->
								</div><!-- modal-content -->
							</div><!-- modal-dialog -->
						</div><!-- modal fade -->
					</div><!-- wrapper -->
				</div><!-- singleTab three -->

				<div class="singleTab four col-sm-3">
					<div class="wrapper">
						<a href="{{ url('interest/only-products?invitation='.Request::input('invitation'))}}" data-toggle="tooltip" data-placement="right" title="I’m really more interested in the products and want more information.">
						  Interested in products only
						</a>
					</div><!-- wrapper -->
				</div><!-- singleTab four -->
			</div><!-- row -->
			<h1 class="text-center text-uppercase">EVERYONE WINS <span>in the</span> FREEDOM, TIME & WEALTH™ System!</h1>
		</div><!-- content container -->	
	</div><!-- topFourInterest -->
</section><!-- main -->


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

