@extends('layouts.invite')

@section('title','FREEDOM || Product Nutrition')
@section('content')
<section class="main">
  <div class="page" id="fresh_airMain">
    <div class="content container">
      <div class="row">
        <h2 class="text-left">Essentials for Life Complete Foundational Nutrition</h2>
        <div class="leftyContent col-sm-8">
          <div class="banner"> <img src="<?=url('assets')?>/images/neutra-banner.jpg" alt="Fresh Air Banner"> </div>
          <!-- banner -->
          
          <div class="navigationz neutra">
            <ul>
              <li><a class="active" href="#">Overview</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Supplements Facts</a></li>
            </ul>
          </div>
          <!-- navigationz --> 
          
          <!-- OVERVIEW OF LEFTY -->
          <div class="portion neutra" id="overview">
            <div class="topRow">
              <div class="leftH4">
                <h4>Vitamins, Minerals, Antioxidants, Flora, and Enzymes.</h4>
              </div>
              <!-- leftH4 -->
              
              <div class="rightVideoButton pdfDownloaded"> <a class="pdfLink" href="<?=url('assets')?>/pdfs/EssentialsForLifeSupplementSellSheet.pdf" target="_blank">Essentials for Life product sheet</a> </div>
              <!-- rightVideoButton --> 
            </div>
            <!-- topRow -->
            
            <div class="bottomTextRow">
              <p class="firstP">Essentials for Life is so much more than just a multi-vitamin and mineral supplement; it's a complete nutritional supplement system that addresses core daily nutritional supplementation needs with vitamins, minerals, antioxidants, flora, and enzymes. Essentials for Life combines six different products into one amazing system:.</p>
              <p class="secondP">- Vitamins (Re:Gain): Complete, whole food multi-vitamins replenish essential nutrients for a healthy body</p>
              <p class="thirdP">- Minerals (Re:Claim): Patented chelated minerals with maximum absorption to promote energy and stamina</p>
              <p class="fourthP">- Digestive Enzymes (Re:Absorb): Vital enzymes necessary for proper digestion and nutrient utilization of the foods you eat</p>
              <p class="fifthP">- Antioxidants (Re:Inforce): Potent antioxidants for complete protection against the damaging effects of free radicals</p>
              <p class="sixthP">- Flora (Re:Balance): Billions of stabilized probiotics to help suppress harmful bacteria and promote optimal health</p>
              <p class="seventhP">- Fat-Digesting Enzymes (Re:Lease): Specific nutrients for metabolizing fat and supporting healthy blood sugar levels</p>
              <p class="eighthP">Essentials for Life provides a 100% whole-food nutritional foundation to support overall health and energy. Daily exposure to stress, a poor diet, alcohol, smoking, and many other factors can deplete the body's store of vitamins, minerals, enzymes, and friendly flora. Essentials for Life helps rebuild these essential components of good health, creating a nutritional baseline for more targeted supplementation while aiding with digestion, metabolism, and supplementing nutrients missing from modern diets.</p>
              <p class="ninthP">- Provides all the vitamins and nutrients necessary for the creation of energy and overall health</p>
              <p class="tenthP">- Replenishes minerals to promote stronger bones, healthy hair, skin, and nails, and helps maintain muscle tone</p>
              <p class="eleventhP">- Provides high levels of antioxidants to help protect from the risks of free radical damage</p>
              <p class="twelfthP">- Replaces enzymes to support proper digestion to help maximize nutrients and energy from meals</p>
              <p class="thirteenthP">- Replaces beneficial intestinal bacteria to strengthen the immune system and support overall health</p>
              <p class="fourteenthP">- Increases the body's ability to make lean muscle and burn fat while exercising</p>
              <p class="fifteenthP">- Patented chromium source to support healthy insulin function, minimize mood swings, support healthy blood sugar levels, and reduce food cravings</p>
              <h5>Take Essentials for Life if:</h5>
              <p class="sixteenthP">- You experience low energy levels</p>
              <p class="seventeenthP">- You are under chronic stress</p>
              <p class="eighteenthP">- You smoke or drink alcoholic beverages regularly</p>
              <p class="nineteenthP">- You don't eat five servings of fruits and vegetables per day</p>
              <p class="tweentiethP">- You drink coffee or tea</p>
              <p class="twentyfirstP">- You have difficulty losing weight</p>
              <p class="lastP">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
            </div>
            <!-- bottomTextRow -->
            
            <div class="modelPhoto girl"> <img src="<?=url('assets')?>/images/neutraveggie.jpg" alt=""> </div>
            <!-- modelPhoto girl--> 
          </div>
          <!-- portion overview --> 
          
          <!-- FEATURES OF LEFTY -->
          <div class="portion neutra" id="features">
            <div class="topRow">
              <h4>100% Vegetarian Formula with CAeDS</h4>
            </div>
            <!-- topRow -->
            
            <div class="bottomTextRow">
              <p class="firstP">Essentials for Life is a complete and powerful combination of whole-food vitamins, chelated minerals, antioxidants, digestive enzymes, fat-burning enzymes, and probiotics, delivered on a cellular level for maximum effectiveness.</p>
              <p class="gultiP one"><span class="circlesBlue"></span><span class="extension">Essentials for Life includes a proprietary whole-food vitamin and antioxidant blend</span></p>
              <p class="gultiP two"><span class="circlesBlue"></span><span class="extension">Essentials for Life also includes both proprietary digestive enzyme and probiotic blends</span></p>
              <p class="gultiP three"><span class="circlesBlue"></span><span class="extension">Essentials for Life is a 100% vegetarian formula and includes a custom formulated Chelate Activated Enzyme Delivery System (CAeDS®), ensuring the nutrients in this supplement are delivered to the cells of the body for maximum effectiveness</span></p>
              <p class="gultiP four"><span class="circlesBlue"></span><span class="extension">Essentials for Life contains no lactose, gluten, MSG, salt, sugar, artificial colors, flavors, sweeteners, or chemical preservatives, additives or fillers</span></p>
              <p class="secondP">Allergens: Contains milk and lecithin from soy. Contains no other major allergens (Contains no egg, wheat, peanuts, nuts, corn, fish or shellfish).</p>
              <p class="thirdP">Consult with your health practitioner and/or pharmacist if you are using any medications.</p>
              <p class="lastP">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.</p>
            </div>
            <!-- bottomTextRow -->
            
            <div class="modelPhoto boy"> <img src="<?=url('assets')?>/images/neutra-model-girl.jpg" alt=""> </div>
            <!-- modelPhoto boy--> 
          </div>
          <!-- portion features --> 
          
          <!-- SPECIFICATIONS OF LEFTY -->
          <div class="portion supplements" id="specifications">
            <div class="topRow">
              <h4>Essentials for Life Supplement Facts</h4>
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
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bluish">
                          <td class="boldy topper">Serving Size 2 Capsules</td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Servings Per Container 84</td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy"></td>
                          <td>Amount Per Serving</td>
                          <td>% DV*</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Vitamin A (100% as natural beta-carotene)</td>
                          <td>500 IU</td>
                          <td>10%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Vitamin C</td>
                          <td>20 mg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Vitamin D [as cholecalciferol (D3)]</td>
                          <td>800 IU</td>
                          <td>200%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Vitamin E (as natural mixed tocopherols)</td>
                          <td>10 IU</td>
                          <td>33%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Vitamin K (as K2 menaquinone-7 from soy)</td>
                          <td>20 mcg</td>
                          <td>25%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Thiamin (as thiamin HCI)</td>
                          <td>0.5mg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Riboflavin</td>
                          <td>0.56mg</td>
                          <td>33%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Niacin (as niacinamide)</td>
                          <td>6.6 mg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Vitamin B6 (as pyridoxal-5-phosphate)</td>
                          <td>0.66 mg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Folate (as (6S)-5-methyltetrahydrofolic acid, glucosamine salt)</td>
                          <td>133 mcg</td>
                          <td>33%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Vitamin B12 (as methylcobalamin)</td>
                          <td>2 mcg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Biotin</td>
                          <td>100 mcg</td>
                          <td>33%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Pantothenic acid (as D-calcium pantothenate)</td>
                          <td>3.3 mg</td>
                          <td>33%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Calcium (as TRAACS® calcium glycinate chelate)</td>
                          <td>50 mg</td>
                          <td>5%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Iron (as Ferrochel® ferrous bisglycinate chelate)</td>
                          <td>0.76 mg</td>
                          <td>4%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Iodine (as potassium iodide)</td>
                          <td>50 mcg</td>
                          <td>33%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Magnesium (as TRAACS® magnesium bisglycinate chelate, magnesium oxide, TRAACS® magnesium glycyl glutamine)</td>
                          <td>25 mg</td>
                          <td>6%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Zinc (as TRAACS® zinc bisglycinate chelate)</td>
                          <td>3 mg</td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Selenium (as Albion® selenium glycinate complex)</td>
                          <td>5 mcg</td>
                          <td>7%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Copper (as TRAACS® copper bisglycinate chelate)</td>
                          <td>0.4 mg</td>
                          <td>20%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Manganese (as TRAACS® manganese glycinate chelate)</td>
                          <td>0.26 mg</td>
                          <td>13%</td>
                        </tr>
                        <tr>
                          <td class="boldy topper">Chromium (as TRAACS® chromium nicotinate glycinate chelate)</td>
                          <td>70 mcg</td>
                          <td>58%</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Molybdenum (as TRAACS® molybdenum glycinate chelate)</td>
                          <td>5 mcg</td>
                          <td>7%</td>
                        </tr>
                        <tr>
                          <td class="boldy">Proprietary Whole Food Vitamin and Antioxidant Blend:</td>
                          <td>265 mg</td>
                          <td>†</td>
                        </tr>
                        <tr>
                          <td class="boldy topper vanishes_right">Acerola fruit extract, vegetarian yeast, kelp, rutin, broccoli, Brussels sprouts, safflower oil powder, spinach leaf, beet root, blackstrap molasses, chlorella algae, cranberry, Jerusalem artichoke tubers, quercetin dihydrate, alfalfa juice powder, blueberry fruit, carrot root, ginger rhizome, grape seed extract, green pepper fruit, olive leaf extract, raspberry juice powder, shiitake mushroom, spirulina, sweet potato tuber, turmeric rhizome extract, olive fruit extract, pine bark extract, resveratrol</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Proprietary Digestive Enzyme Blend:</td>
                          <td>140 mg</td>
                          <td>†</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">Acid protease, fungal protease, glucoamylase, invertase, malt diastase, lactase, cellulase, lipase, fungal amylase, peptidase</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">Proprietary Probiotic Blend:</td>
                          <td>100 mg</td>
                          <td>†</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">Lactobacillus acidophilus, Bifidobacterium lactis, Streptococcus thermophilus, Bifidobacterium breve, Lactobacillus rhamnosus, Lactobacillus paracasei, Lactobacillus plantarum, Bifidobacterium bifidum, Bifidobacterium longum, Bifidobacterium adolescentis in a base of fructo-oligosaccharides</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy">CAeDS® Blend:</td>
                          <td>357 mg</td>
                          <td>†</td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">TRAACS® calcium glycinate chelate, TRAACS® magnesium bisglycinate chelate, magnesium oxide, TRAACS® zinc bisglycinate chelate, TRAACS® magnesium glycyl glutamine, TRAACS® copper bisglycinate chelate, TRAACS® manganese glycinate chelate, TRAACS® vanadium nicotinate glycinate chelate</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">Daily value (DV) not established</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">Other ingredients: Hypromellose, rice flour, vegetable stearic acid, ascorbic acid and silica.</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
                        </tr>
                        <tr class="bluish">
                          <td class="boldy vanishes_right">Albion, Ferrochel and TRAACS® are registered trademarks of Albion Laboratories, Inc.</td>
                          <td class="vanishes one"></td>
                          <td class="vanishes"></td>
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
            <h4>Whole Food Foundational Nutrition</h4>
            <img src="<?=url('assets')?>/images/neutra-food.jpg" alt="Active Pure Products">
            <p>Essentials for Life is a complete, whole-food, foundational daily nutrition supplement with vitamins, minerals, antioxidants, flora, and enzymes.</p>
          </div>
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
