@extends('layouts.invite')

@section('title','FREEDOM || Product LivingWater')
@section('content')
<section class="main">
  <div class="page" id="fresh_airMain">
    <div class="content container">
      <div class="row">
        <h2 class="text-left">LivingWater for Ionized Alkaline Healthier Water</h2>
        <div class="leftyContent col-sm-8">
          <div class="banner"> <img src="<?=url('assets')?>/images/livingwater-banner.jpg" alt="Fresh Air Banner"> </div>
          <!-- banner -->
          
          <div class="navigationz livingwater">
            <ul>
              <li><a class="active" href="#">Overview</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Specifications</a></li>
            </ul>
          </div>
          <!-- navigationz --> 
          
          <!-- OVERVIEW OF LEFTY -->
          <div class="portion livingwater" id="overview">
            <div class="topRow">
              <div class="leftH4">
                <h4>All water is not created equal</h4>
              </div>
              <!-- leftH4 -->
              
              <div class="rightVideoButton"> <a class="signup upnavlink" href="#" data-toggle="modal" data-target="#watchVideoOverviewlivingwater"><i class="fa fa-play-circle-o fa-lg"></i>Watch video</a> 
                <!-- Modal -->
                <div class="modal fade" id="watchVideoOverviewlivingwater" role="dialog">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
                        <h2 class="modal-title text-center"></h2>
                      </div>
                      <!-- modal-header -->
                      <div class="modal-body">
                        <div class="row">
                          <div class="bodyContents">
                            <div class="videoWrapper">
                              <video controls type="video/mp4" preload="none" poster="<?=url('assets')?>/images/livingwaterposter.jpg">
                                <source src="<?=url('assets')?>/videos/living_water.mp4" autostart="false" type="video/mp4">
                                <source src="<?=url('assets')?>/videos/living_water.webm" autostart="false" type="video/webm">
                                <source src="<?=url('assets')?>/videos/living_water.ogv" autostart="false" type="video/ogg">
                              </video>
                            </div>
                            <!-- videoWrapper --> 
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
                
              </div>
              <!-- rightVideoButton --> 
            </div>
            <!-- topRow -->
            
            <div class="bottomTextRow">
              <p class="firstP">Drinking enough water isn’t really enough. You have to drink the right kind of water - water that will help buffer acid, help remove toxins, and is easily absorbed by your body. You need great tasting water with antioxidant properties and proper pH levels.</p>
              <p class="secondP">Having a LivingWater is like owning a limitless supply of alkaline, ionized, healthy water. You get pH-balancing, healthy alkaline water for drinking and cooking, strong alkaline water for washing vegetables, and acidic water for cleaning. Plus, when you drink alkaline water regularly, you’re helping your body to hydrate itself as well as flush out toxins and waste products. If you’re trying to lose weight, you may get a boost there as well. Overall, there’s no better way to help stay healthy.</p>
              <p class="thirdP">Utilizing Direct Disk Ionization (DDI) Technology™, LivingWater is a revolutionary approach to water ionization. Designed by the inventor who holds the first water ionization engine patent, it does not require numerous plates or membranes. While conventional units require a low flow rate to maximize ORP (Oxidation Reduction Potential), LivingWater with Direct Disk Ionization (DDI) Technology™ can achieve the same ORP levels at a higher flow rate. The Direct Disk Ionization Technology and constant power output design produce ionized water with the least amount of electrical energy needed. Similar to a compact fluorescent lightbulb which uses less energy for the same amount of light output as an incandescent bulb, LivingWater is a more efficient use of energy than conventional plate units.</p>
              <h5>Benefits of LivingWater</h5>
              <p class="fifthP">- Provides acid-buffering alkaline water for drinking and cooking, right at your faucet</p>
              <p class="sixthP">- Produces acidic water for cleaning without chemicals</p>
              <p class="seventhP">- Generates water with excellent negative Oxidation Reduction Potential (ORP) for increased antioxidant properties</p>
              <p class="eighth">- Easily installs to your existing faucet with no special plumbing.</p>
              <p class="lastP">With proper care and maintenance, the LivingWater provides a longer service life than conventional plate units and features a 5-year limited warranty</p>
            </div>
            <!-- bottomTextRow -->
            
            <div class="modelPhoto girl"> <img src="<?=url('assets')?>/images/livingwater-modelwater.jpg" alt=""> </div>
            <!-- modelPhoto girl--> 
          </div>
          <!-- portion overview --> 
          
          <!-- FEATURES OF LEFTY -->
          <div class="portion livingwater" id="features">
            <div class="topRow">
              <h4>Super-hydrating Water with Antioxidant Properties</h4>
            </div>
            <!-- topRow -->
            
            <div class="bottomTextRow">
              <p class="gultiP one"><span class="circlesBlue"></span><span class="extension">A patented constant power output design monitors the TDS (Total Dissolved Solids) level of the source water and automatically adjusts accordingly to maintain a constant pH level</span></p>
              <p class="gultiP two"><span class="circlesBlue"></span><span class="extension">The LivingWater is designed to operate in low or high TDS areas, even when the TDS is in the thousands</span></p>
              <p class="gultiP three"><span class="circlesBlue"></span><span class="extension">Accidental use of hot water will not harm the unit as there are no membranes. A unique water-cooled power supply allows for continual operation without risk of overheating. Most conventional plate ionizers can only operate for a limited period of time before they must be shut off in order to cool down</span></p>
              <p class="gultiP four"><span class="circlesBlue"></span><span class="extension">LivingWater offers 8 different pH levels, ranging from 4.0 acidic water to 10.0 alkaline water plus a SUPER function to achieve extreme pH levels when needed</span></p>
              <p class="gultiP five"><span class="circlesBlue"></span><span class="extension">The LivingWater features a reusable mineral port for use with common sea salt for enhanced mineralization for higher levels of pH</span></p>
              <p class="gultiP six"><span class="circlesBlue"></span><span class="extension">An easy to read, multicolor LCD control panel keeps track of performance particulars, including total liters produced, life indicators, and pH setting. Each pH setting changes the background color of the LCD</span></p>
              <p class="gultiP seven"><span class="circlesBlue"></span><span class="extension">The Living Water® is water resistant so that splashes and spills will not harm the electronics</span></p>
              <p class="gultiP eight"><span class="circlesBlue"></span><span class="extension">Easy to install with only 2 connections, water in and drain out, and LivingWater can be installed to the left or right of the sink, without any adjustments</span></p>
              <p class="gultiP nine"><span class="circlesBlue"></span><span class="extension">A unique Switching Mode Power Supply makes the LivingWater always ready for international use. The unit can be plugged into 100v, 110v, 220v or 240v without any adjustment. A country-specific plug adapter is all that is needed</span></p>
              <p class="gultiP ten"><span class="circlesBlue"></span><span class="extension maintenance">Water passes through two filters before ionization occurs:</span></p>
              <p class="subPofTen one"><span>-</span> The first filter is a carbon and sediment filter which removes unpleasant tastes and odors from the water.</p>
              <p class="subPofTen two"><span>-</span> The second filter is a carbon and food grade calcium sulfite filter to ensure proper mineralization of the water using good calcium</p>
              <p class="subPofTen three"><span>-</span> Filters can be easily removed and replaced with a simple twist and lock design</p>
              <p class="gultiP eleven"><span class="circlesBlue"></span><span class="extension">LivingWater was designed for easy maintenance. The unit has an automatic cleaning cycle every 12 minutes of use. Annual cleaning can be performed at home with the port adapter and cleaning kit</span></p>
              <p class="lastP">With proper care and maintenance, the LivingWater provides a longer service life than conventional plate units and features a 5-year limited warranty</p>
            </div>
            <!-- bottomTextRow -->
            
            <div class="modelPhoto boy"> <img src="<?=url('assets')?>/images/livingwater-model-girl.jpg" alt=""> </div>
            <!-- modelPhoto boy--> 
          </div>
          <!-- portion features --> 
          
          <!-- SPECIFICATIONS OF LEFTY -->
          <div class="portion livingwater" id="specifications">
            <div class="topRow">
              <h4>LivingWater Specifications</h4>
            </div>
            <!-- topRow -->
            
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
                          <td class="boldy topper">Electrode Type</td>
                          <td> Titanium steel w/platinum </td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Water Filtrations</td>
                          <td> Two filter system </td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Filter Life</td>
                          <td>10,000 liters</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">pH Range</td>
                          <td> 2.0 ~ 11.0+ depending on water source conditions </td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">ORP Range</td>
                          <td>+500mv to -400mv</td>
                        </tr>
                        <tr>
                          <td class="boldy">size</td>
                          <td>10.8 in. wide x 12.4 in. high x 5.5 in. deep</td>
                        </tr>
                        <tr>
                          <td class="boldy">Weight (lbs.)</td>
                          <td>8.1</td>
                        </tr>
                        <tr>
                          <td class="boldy">Water Temp</td>
                          <td>39° F (4° C) to 95° F (35° C)</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- tableWrapper --> 
                  
                </div>
                <!-- innerWrapper --> 
              </div>
              <!-- wrapper --> 
            </div>
            <!-- bottomTextRow --> 
          </div>
          <!-- portion features --> 
        </div>
        <!-- leftyContent -->
        
        <div class="rightySidebar col-sm-4">
          <div class="wrapper wrapperTop">
            <h4>Support for a Green Lifestyle</h4>
            <img src="<?=url('assets')?>/images/laundry-green-lifestyle.jpg" alt="Active Pure Products">
            <p>Vollara offers ways to reduce chemicals, clear the air, and clean up the water in your home.</p>
          </div>
          <!-- wrapper wrapperTop-->
          
          <div class="wrapper wrapperBottom">
            <h4>Pro Athletes Know</h4>
            <img src="<?=url('assets')?>/images/livingwater-proathlete.jpg" alt="Space Technology">
            <p>Air, water, and nutrition products from Vollara are used every day by professional sports team, athletes, and trainers.</p>
            <a href="{{ url('products/letter?invitation='.Request::input('invitation'))}}" class="proAthleteButton">Learn More</a> </div>
          <!-- wrapper wrapperBottom--> 
        </div>
        <!-- rightySidebar --> 
        
      </div>
      <!-- row --> 
      
    </div>
    <!-- content container --> 
  </div>
  <!-- page fresh_airMain -->
  
  <div class="anchorBottom container"> 
  <a class="prettyBottomGoBack" href="{{ url('video?invitation='.Request::input('invitation'))}}"><span><</span> Go back</a> </div>
</section>
<!-- main --> 

<!-- FOOTER START -->
<footer class="page" id="footerfresh_airPage">
  <div class="content container-fluid">
    <div class="row">
      <div class="wrapper">
        <p class="text-center">info@freedomtimeandwealth.com</p>
      </div>
      <!-- wrapper --> 
    </div>
  </div>
</footer>
<!-- FOOTER END --> 

@endsection
