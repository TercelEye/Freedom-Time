@extends('layouts.invite')

@section('title','FREEDOM || letters')
@section('content')
<section class="main letters">
  <div class="content container">
    <div class="topPart">
      <div class="row row1">
        <h2 class="text-left">Professional Sports Teams Know</h2>
        <p class="text-left">Professional sports teams know the value of maintaining good health and proper nutrition. With an exclusive line up of alkaline water, active air purification, and tested nutritional products, Vollara offers a competitive advantage both on and off the field.</p>
      </div>
      <!-- row row1 -->
      
      <div class="row row2">
        <div class="lefty col-xs-12 col-sm-2">
          <div class="imgWrapper"> <img src="<?=url('assets')?>/images/livingwater-proathlete.jpg" alt=""> </div>
          <!-- imgWrapper --> 
        </div>
        <!-- lefty -->
        
        <div class="righty col-xs-12 col-sm-10">
          <div class="contentWrapper">
            <p class="grayish text-left">“On behalf of the 2011 World Champion St. Louis Cardinals, I’d like to thank you for an outstanding product.” </p>
            <p class="smallest text-left">Pete Prinzi <br>
              Head Strength Coach, St. Louis Cardinals</p>
          </div>
          <!-- contentWrapper --> 
        </div>
        <!-- righty --> 
      </div>
      <!-- row row2 --> 
      
    </div>
    <!-- topPart -->
    
    <div class="bottomPart">
      <div class="row row1">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Pete Prinzi</h4>
            <p class="smallest text-left">Head Strength Coach, St. Louis Cardinals</p>
            <p class="text-left regular">"The Vollara Living Water unit installed in the weight room has been a vital addition. The unit is very popular. Our players definitely notice the difference in their hydration levels..."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/petepdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/PetePrinzi.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/PetePrinzi.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row1 -->
      
      <div class="row row2">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Mathew Krause</h4>
            <p class="smallest text-left">Strength & Conditioning Cooridinator, Cincinnati Reds</p>
            <p class="text-left regular">Developing high quality products that clean our air and water are essential not only to performance, but to all of us personally. It shows that Vollara cares about people."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/mathewpdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf2">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf2" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/MathewKrause.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/MathewKrause.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row2 -->
      
      <div class="row row3">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Kevin Rand</h4>
            <p class="smallest text-left">Director of Medical Services/Head Athletic Trainer, Detroit Tigers</p>
            <p class="text-left regular">"I feel very strongly that the LivingWater plays a pivotal role in allowing players to reach their goals."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/kevinpdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf3">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf3" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/KevinRand.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/KevinRand.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row3 -->
      
      <div class="row row4">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Ryan Stoneberg</h4>
            <p class="smallest text-left">Minor League Strength & Conditioning Cooridinator, Kansas City Royals</p>
            <p class="text-left regular">"On behalf of our entire medical staff, I would like to thank you and all the members of Vollara for their assistance in bringing us an edge on the competition."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/ryanpdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf4">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf4" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/RyanStoneberg.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/RyanStoneberg.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row4 -->
      
      <div class="row row5">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Ty Hill</h4>
            <p class="smallest text-left">Strength & Conditioning Coach, Kansas City Royals</p>
            <p class="text-left regular">"Once we began to compare Re:Fuel, Re:Flex, and LivingWater to the competition, Vollara clearly stood above the rest..."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/typdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf5">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf5" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/TyHill.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/TyHill.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row5 -->
      
      <div class="row row6">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Mark Brennan</h4>
            <p class="smallest text-left">Minor League Strength & Conditioning Coordinator, Miami Marlins</p>
            <p class="text-left regular">"...that following began to grow due to the players hearing first hand testimonials from other players that were already reaping the benefits of hydration. Players were excited to be drinking water."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/markpdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf6">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf6" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/MarkBrennan.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/MarkBrennan.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row6 -->
      
      <div class="row row7">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Donavan Santas</h4>
            <p class="smallest text-left">Strength & Conditioning Coordinator, Toronto Blue jays</p>
            <p class="text-left regular">"Consequently, Vollara's FreshAir Surround and LivingWater units have found a permanent place in our most used and highly populated Bobby Mattick Training Complex in Dunedin, FL."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/donavanpdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf7">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf7" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/DonavanSantas.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/DonavanSantas.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row7 -->
      
      <div class="row row8">
        <div class="rowWrapper">
          <div class="left col-xs-12 col-sm-10">
            <h4 class="text-left">Lee Kuntz</h4>
            <p class="smallest text-left">Head Athletic Trainer, Washington Nationals</p>
            <p class="text-left regular">"We are using the Vollara LivingWater unit as part of our hydration strategy for our athletes and also utilize the FreshAir Surround in our athletic training room to provide a clean, fresh atmosphere."</p>
          </div>
          <!-- left -->
          
          <div class="righty col-xs-12 col-sm-2">
            <div class="rightyWrapper">
              <div class="top"> <img src="<?=url('assets')?>/images/leepdf.jpg" alt=""> </div>
              <!-- top -->
              
              <div class="bottom"> <a class="signup upnavlink pdfLink" href="" data-toggle="modal" data-target="#modalpdf8">view letter</a> 
                <!-- Modal -->
                <div class="modal fade" id="modalpdf8" role="dialog">
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
                            <object data="<?=url('assets')?>/pdfs/LeeKuntz.pdf#view=Fit" type="application/pdf" width="100%" height="850" class="objecty">
                              <p><a href="<?=url('assets')?>/pdfs/LeeKuntz.pdf"></a> </p>
                            </object>
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
              <!-- bottom --> 
            </div>
            <!-- rightyWrapper --> 
          </div>
          <!-- righty --> 
        </div>
        <!-- rowWrapper --> 
      </div>
      <!-- row row8 -->
      
      <p class="text-left lastRowedP">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
    </div>
    <!-- bottomPart --> 
  </div>
  <div class="anchorBottom container"> <a class="prettyBottomGoBack" href="{{ url('products/livingwater?invitation='.Request::input('invitation'))}}"><span><</span> Go back</a> </div>
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