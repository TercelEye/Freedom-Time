@extends('layouts.invite')

@section('title','FREEDOM || Product Fresh air')
@section('content') 




<section class="main">
	<div class="page" id="fresh_airMain">
		<div class="content container">



	<div class="row">
		<h2 class="text-left">Fresh air surround with Active Technology for Air Surfaces</h2>


		<div class="leftyContent col-sm-8">
			<div class="banner">
				<img src="<?=url('assets/images/fresh-air1.jpg')?>" alt="Fresh Air Banner">
			</div><!-- banner -->

			<div class="navigationz freshair">
				<ul>
					<li><a class="active" href="#">Overview</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">Specifications</a></li>
				</ul>
			</div><!-- navigationz -->





			<!-- OVERVIEW OF LEFTY -->
			<div class="portion freshair" id="overview">
				<div class="topRow">
					<div class="leftH4">
						<h4>Why FreshAir?</h4>
					</div><!-- leftH4 -->

					<div class="rightVideoButton">









						<a class="signup upnavlink" href="#" data-toggle="modal" data-target="#watchVideoOverview"><i class="fa fa-play-circle-o fa-lg"></i>Watch video</a>
						<!-- Modal -->
						<div class="modal fade" id="watchVideoOverview" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
										<h2 class="modal-title text-center"></h2>
									</div><!-- modal-header -->
									<div class="modal-body">
										<div class="row">
											<div class="bodyContents">
												<div class="videoWrapper">

													<video controls type="video/mp4" preload="none" poster="<?=url('assets')?>/images/videoImage.jpg">
														<source src="<?=url('assets/videos/fresh_air.mp4')?>" autostart="false" type="video/mp4">
														<source src="<?=url('assets')?>/videos/fresh_air.webm" autostart="false" type="video/webm">
														<source src="<?=url('assets')?>/videos/fresh_air.ogv" autostart="false" type="video/ogg">
													</video>

												</div><!-- videoWrapper -->
											</div><!-- bodyContents -->
										</div>
									</div><!-- modal-body -->
									<div class="modal-footer"></div><!-- modal-footer -->
								</div><!-- modal-content -->

							</div><!-- modal-dialog -->
						</div><!-- modal fade -->






























					</div><!-- rightVideoButton -->
				</div><!-- topRow -->

				<div class="bottomTextRow">
					<p class="firstP">Have you ever thought about what's really polluting your home environment? Little ones bring the day's germs home with them and spread them everywhere. Garbage cans are funky. The smell of leftover spicy food can linger for days. And who knows what surprises our pets bring in with them.</p>
					<p class="secondP">Now imagine eliminating that pollution at the source. We're not talking about spraying a cloud of flower-fragranced chemicals. Our solution is as easy as pushing a button to keep things cleaner and safer to touch, not to mention smelling fresher. The FreshAir Surround by Vollara is a revolutionary air purifier that does so much more than clean the air. Using the same science as nature, FreshAir Surround destroys odors, eliminates smoke and reduces harmful contaminants ordinary cleaning can leave behind.</p>
					<p class="thirdP">So how does the FreshAir Surround clean and freshen the air? In short, it is technology based on how nature keeps things safe and clean outdoors. The natural processes found in thunderstorms, sunlight, and lightning are re-created indoors. Negatively charged ions remove pollutants from the air. ActivePure Technology duplicates nature to safely reduce contaminants on surfaces.</p>
					<p class="fourthP">FreshAir Surround by Vollara is like 24/7 healthy home insurance. It is the core of Vollara's total protection for whole-home environmental conditioning. FreshAir is always working - sending out an active army of safe and natural ions as well as pollutant-controlling, odor reducing and oxygen-rich 'scrubbers' to make your home safer and healthier.</p>


					<h5>Benefits of FreshAir Surround</h5>

					<p class="fifthP">- Removes airborne contaminants and allergens - reducing asthma and allergy symptoms for a healthier body</p>
					<p class="sixthP">- Freshens air and removes odors in otherwise stale-prone environments</p>
					<p class="seventhP">- Removes dirt and dust from the air to make cleaning easier Optional Ozone Free bulb allows for operation without creating ozone.</p>
					<p class="lastP">FreshAir Surround does not meet California requirements and cannot be shipped to California or Canada.</p>
				</div><!-- bottomTextRow -->


				<div class="modelPhoto girl">
					<img src="<?=url('assets')?>/images/fresh-air-model.jpg" alt="">
				</div><!-- modelPhoto girl-->
			</div><!-- portion overview -->











			<!-- FEATURES OF LEFTY -->
			<div class="portion freshair" id="features">
				<div class="topRow">
					<h4>ActivePure “Certified Space Technology”</h4>
				</div><!-- topRow -->

				<div class="bottomTextRow">
					<p class="firstP">The advanced technology contained within the FreshAir Surround serves to make breathing easier, cleaner and healthier. This convenient, in-home unit provides the cleanest, freshest air possible throughout the entire home.</p>




					<p class="gultiP one"><span class="circlesBlue"></span><span class="extension">Uses super oxide ions and hydro peroxides created by ActivePure Technology to remove contaminants</span></p>
					<p class="gultiP two"><span class="circlesBlue"></span><span class="extension">Negatively charged ions remove microscopic particles from the air that will reduce allergens and harmful airborne pollutants</span></p>
					<p class="gultiP three"><span class="circlesBlue"></span><span class="extension">Features a high intensity UVC light that makes use of the same oxidation and ionizing properties of light as naturally occurring sunlight</span></p>
					<p class="gultiP four"><span class="circlesBlue"></span><span class="extension">FreshAir Surround with ActivePure Technology, Certified Space Technology™, creates healthier living spaces</span></p>
					<p class="gultiP five"><span class="circlesBlue"></span><span class="extension">Normal Mode uses our exclusive ActivePure (RCI) technology to produce safe, low-level, natural oxidizers and super oxide ions for basic, everyday applications</span></p>
					<p class="gultiP six"><span class="circlesBlue"></span><span class="extension">High Mode adds the power of activated oxygen for faster coverage and increased elimination of smoke, odor, and surface contaminants</span></p>
					<p class="gultiP seven"><span class="circlesBlue"></span><span class="extension">8-hour Away Mode increases the maximum output of activated oxygen for incredible effectiveness in unoccupied areas</span></p>
					<p class="gultiP eight"><span class="circlesBlue"></span><span class="extension maintenance includes">Includes a remote control for easy operation</span></p>
					<p class="gultiP nine"><span class="circlesBlue"></span><span class="extension maintenance">An optional prefilter is available if your environment is exceptionally dusty</span></p>
					<p class="gultiP ten"><span class="circlesBlue"></span><span class="extension maintenance">Improves the quality of air in an environment up to 3,000 sq. feet</span></p>
					<p class="gultiP eleven"><span class="circlesBlue"></span><span class="extension">IntelliAir Technology alerts you when normal maintenance is needed or service is required</span></p>



					<p class="lastP">FreshAir Surround does not meet California requirements and cannot be shipped to California or Canada.</p>
				</div><!-- bottomTextRow -->


				<div class="modelPhoto boy">
					<img src="<?=url('assets')?>/images/fresh-air-model-boy.jpg" alt="">
				</div><!-- modelPhoto boy-->
			</div><!-- portion features -->









			<!-- SPECIFICATIONS OF LEFTY -->
			<div class="portion freshair" id="specifications">
				<div class="topRow">
					<h4>FreshAir Surround Specifications</h4>
				</div><!-- topRow -->

				<div class="bottomTextRow">
					<div class="wrapper">
						<div class="innerWrapper">



									<div class="tableWrapper table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th></th>
													<th>Email Address</th>
												</tr>
											</thead>
											<tbody>
												<tr class="bluish">
													<td class="boldy topper">Electrical</td>
													<td>
														<p class="topP">• 100 ~ 240 VAC 50/60 Hz External Power Supply </p>
														<p>• 50 watts maximum power consumption </p>
														<p>• Negative ion generation</p>
													</td>
												</tr>
												<tr>
													<td class="boldy topper">size</td>
													<td>
														<p class="topP">• Dimensions: 12" high x 9" wide x 12" deep (30.5 cm x 22.9 cm x 30.5 cm) </p>
														<p>• Weight: 16 pounds</p>
													</td>
												</tr>
												<tr class="bluish">
													<td class="boldy">Purification Plate Output (High Mode)</td>
													<td> > 0.05 ppm</td>
												</tr>

												<tr>
													<td class="boldy topper">coverage</td>
													<td>	
														<p class="topP">Covers a range of 250 ft2 | (23 m2) to 3000 ft2 (279 m2)* </p>
														<p class="boldy">* Depends on variables such as severity and frequency of pollution, humidity, and temperature.</p>
													</td>
												</tr>
												<tr class="bluish">
													<td class="boldy">Applications</td>
													<td>Homes, offices, salons, medical/dental offices, light industrial</td>
												</tr>
												<tr>
													<td class="boldy">Warranty</td>
													<td>Three (3) year limited warranty</td>
												</tr>
											</tbody>
										</table>	
									</div><!-- tableWrapper -->






						</div><!-- innerWrapper -->
					</div><!-- wrapper -->
				</div><!-- bottomTextRow -->
			</div><!-- portion features -->
		</div><!-- leftyContent -->
















		<div class="rightySidebar col-sm-4">
			<div class="wrapper wrapperTop">
				<h4>Space Technology Certified</h4>
				<img src="<?=url('assets')?>/images/fresh-air-space.jpg" alt="Space Technology">
				<p>From the space station to your space. Vollara’s ActivePure products utilize technology originally developed for space travel</p>
			</div><!-- wrapper wrapperTop-->

			<div class="wrapper wrapperBottom">
				<h4>Active technology for your home</h4>
				<img src="<?=url('assets')?>/images/fresh-air-activepure.jpg" alt="Active Pure Products">
				<p>ActivePure products offer active technology to conveniently and effectively treat the air and surfaces in your home.</p>
			</div><!-- wrapper wrapperBottom-->
		</div><!-- rightySidebar -->





		
	</div><!-- row -->


				
		</div><!-- content container -->
	</div><!-- page fresh_airMain -->



	<div class="anchorBottom container">
		<a class="prettyBottomGoBack" href="{{ url('video?invitation='.Request::input('invitation'))}}"><span><</span> Go back</a>
	</div>
</section><!-- main -->



<!-- FOOTER START -->
<footer class="page" id="footerfresh_airPage">
	<div class="content container-fluid">
		<div class="row">
			<div class="wrapper">
				<p class="text-center">info@freedomtimeandwealth.com</p>		
			</div><!-- wrapper -->
		</div>
	</div>
</footer>
<!-- FOOTER END -->

@endsection






















































