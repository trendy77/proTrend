<?php
/*
 * Template Name: Template Home Page
 * @package Wordpress
 * @subpackage Travel Theme
*/
?>

<?php get_header(); ?>
    		
			<!-- START #main-slider -->
			<div id="main-slider">
				<div id="content-slider">
					<ul>
						<!-- START Slide 1 -->
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                        <?php 
			
							$parisbg = get_option('site_parisbg');
							if($parisbg != '') {
							echo '<img src='.$parisbg.' alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />';
								} else {
										echo '';
							}
	   					 ?>
																	
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Paris, France
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-yellow sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px; ">Starting From $295
							</div>
						</li>
						<!-- END Slide 1 -->
						
						<!-- START Slide 2 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000">
							 <?php 
			
							$autraliabg = get_option('site_autraliabg');
							if($autraliabg != '') {
							echo '<img src='.$autraliabg.' alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />';
								} else {
										echo '';
							}
	   					 ?>
							
												
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sft stb slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="500"
								data-start="800"
								data-easing="Expo.easeIn"
								data-endspeed="600"
								data-endeasing="Expo.easeInOut"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Sydney, Australia
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-yellow sfr stl headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power0.easeOut"
								data-endspeed="500"
								data-endeasing="Back.easeOut"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">Starting From $269
							</div>
						</li>
						
						<!-- START Slide 3 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							 <?php 
			
							$journeybg = get_option('site_journeybg');
							if($journeybg != '') {
							echo '<img src='.$journeybg.' alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />';
								} else {
										echo '';
							}
	   					 ?>
							
							
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Luxury Journeys
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-yellow sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">Starting From $399
							</div>
						</li>
						<!-- END Slide 3 -->
					</ul>
				</div>
				<div id="slider-overlay"></div>
			</div>
			<!-- END #main-slider -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container" id="home-page">
					<!-- START .tour-plan -->
					<div class="plan-tour">
                    	
						
					</div>
					<!-- END .tour-plan -->
					<div class="clearfix"></div>
                    <center><p><?php $top_ads = get_option('site_top_ads'); if($top_ads != '') { echo stripslashes ($top_ads); } else { echo ''; } ?></p></center>
					<h2 class="ft-heading text-upper">TOP DESTINATIONS</h2>

					<div class="carousel">
						<ul class="slides">
							<li>
								<div class="row">
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="london"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/london.jpg" alt="featured Scroller" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="london">London, United Kingdom</a></h4>
										    </div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="paris"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/paris.jpg" alt="Paris" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="paris">Paris, France</a></h4>
											  </div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="toronto"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/toronto.jpg" alt="Toronto" /></a>
											</span>
							  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="toronto">Toronto, Canada</a></h4>
					</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item"><span class="ft-image"><a href="new-york"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/new-york.jpg" alt="New York" /></a></span>
										  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="new-york">New York, United State</a></h4>
											</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
								  </div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="rome"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/rome.jpg" alt="featured Scroller" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="rome">Rome, Italy</a></h4>
											  </div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="bangkok"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bangkok.jpg" alt="Bangkok" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="bangkok">Bangkok, Thailand</a></h4>
											  </div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="dubai"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/dubai.jpg" alt="Dubai" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="dubai">Dubai, United Arab Emirates</a></h4>
												</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="tokyo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tokyo.jpg" alt="Tokyo" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="tokyo">Tokyo, Japan</a></h4>
												</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="las-vegas"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/las-vegas.jpg" alt="Las Vegas" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="las-vegas">Las Vegas, United States</a></h4>
												</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="singapore"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/singapore.jpg" alt="Singapore" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="singapore">Singapore</a></h4>
												</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="barcelona"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/barcelona.jpg" alt="Barcelona" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="barcelona">Barcelona, Spain</a></h4>
											  </div>
										  <div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="nassau"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/nassau.jpg" alt="Nassau" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="nassau">Nassau, Bahamas</a></h4>
											  </div>
										  <div class="ft-foot-ex">
											
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="san-juan"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/san-juan.jpg" alt="San Juan" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="san-juan">San Juan, Puerto Rico</a></h4>
											  </div>
										  <div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="cancun"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/cancun.jpg" alt="Cancun" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="cancun">Cancun, Mexico</a></h4>
											  </div>
										  <div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="montego-bay"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/montegobay.jpeg" alt="Montego Bay" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="montego-bay">Montego Bay, Jamaica</a></h4>
											</div>
										  <div class="ft-foot-ex">
												
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="sydney"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/australia.jpg" alt="Sydney" /></a>
											</span>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="sydney">Melbourne, Australia</a></h4>
												</div>
											<div class="ft-foot-ex">
												
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>  	
					</div>
				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START .main-contents .bom-contents -->
			<div class="main-contents bom-contents">
				<div class="container">
					<h2 class="ft-heading text-upper">POPULAR HOTELS</h2>
					<div class="carousel">
						<ul class="slides">
							<li>
								<div class="row">
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="caribe-hilton-san-juan"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/caribe-hilton.jpg" alt="Caribe Hilton San Juan" /></a>
											</span>
											
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="caribe-hilton-san-juan">Caribe Hilton San Juan</a></h4>
												<span class="ft-offer text-upper">From $148</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Caribe Hilton San Juan is conveniently located for sightseeing in San Juan, with Fortin de San Geronimo del Boqueron...</p>
											</div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">San Juan, Puerto Rico</span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/pr.png" alt="" /></span>
											</div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="millennium-gloucester"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/millenium-glocester.jpg" alt="Millennium Gloucester" /></a>
											</span>
											
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="millennium-gloucester">Millennium Gloucester</a></h4>
												<span class="ft-offer text-upper">From $141</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Situated in Central London, Millennium Gloucester features relaxed accommodation...</p>
										  </div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">London, United Kingdom</span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/en.png" alt="" /></span>
											</div>
									  </div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="baiyoke-sky-hotel"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/baiyoke-sky-hotel.jpg" alt="Baiyoke Sky Hotel" /></a>
											</span>
											
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="baiyoke-sky-hotel">Baiyoke Sky Hotel</a></h4>
												<span class="ft-offer text-upper">From $56</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Standing 88 stories high, Baiyoke Sky Hotel is the tallest hotel in Thailand and promotes...</p>
										  </div>
									  <div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Bangkok, Thailand </span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/th.png" alt="" /></span>
										  </div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="dorsett-singapore"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/dorsett-hotel.jpg" alt="Dorsett Singapore" /></a>
											</span>
											
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="dorsett-singapore">Dorsett Singapore</a></h4>
												<span class="ft-offer text-upper">From 220 $</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
											 <p>This modern hotel is conveniently set in Singapore City Centre and provides an outdoor...</p>
										  </div>
									  <div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Chinatown, Singapore</span>
											<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/sg.png" alt="" /></span>
										  </div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="keio-plaza-hotel-tokyo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/keio-plaxa-hotel-tokyo.jpg" alt="Keio Plaza Hotel Tokyo" /></a>
											</span>
											
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="keio-plaza-hotel-tokyo">Keio Plaza Hotel</a></h4>
												<span class="ft-offer text-upper">From $192</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Showcasing impressive views of Shinjuku, Keio Plaza Hotel Tokyo is set in Tokyo and  ...</p>
										  </div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Tokyo, Japan</span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/jp.png" alt="" /></span>
											</div>
									  </div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="novotel-paris-tour-eiffel"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/novetel.jpg" alt="Novotel Paris Tour Eiffel" /></a>
											</span>
											
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="novotel-paris-tour-eiffel">Novotel Paris Tour</a></h4>
												<span class="ft-offer text-upper">From $113</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Situated in Paris, this 4-star property is modern and contemporary. It showcases views of Seine...</p>
										  </div>
									  <div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Paris, France </span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/fr.png" alt="" /></span>
										  </div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="ft-item">
											<span class="ft-image">
												<a href="luxor-las-vegas"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/luxor-hotel-and-casino.jpg" alt="Luxor Las Vegas" /></a>
											</span>
											
							  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="luxor-las-vegas">Luxor Las Vegas</a></h4>
												<span class="ft-offer text-upper">From $36</span>
											</div>
                                            
                                            <div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Luxor hotel &amp; casino las vegas is ideally situated for sightseeing in Las Vegas, with Luxor...</p>
										  </div>
							  <div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Las Vegas, United States</span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/us.png" alt="" /></span>
										  </div>
										</div>
										
										<div class="ft-item">
											<span class="ft-image">
												<a href="barcelo-sants-hotel"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/barcelo-sants.jpg" alt="Barcelo Sants Hotel" /></a>
											</span>
										
									  <div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="barcelo-sants-hotel">Barcelo Sants Hotel</a></h4>
												<span class="ft-offer text-upper">From $48</span>
											</div>
                                            
                                            	<div class="ft-data">
												<a class="ft-4star"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/4star.png" alt="" /></a>
												<p>Situated in Barcelona, this 4-star property is unique and modern. It also provides an executive...</p>
										  </div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft">Barcelona, Spain</span>
												<span class="ft-flag"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/es.png" alt="" /></span>
											</div>
									  </div>
									</div>
								</div>
							</li>
							<!-- Extra hotels was here -->
						</ul>  	
					</div>
				</div>
			<p>&nbsp;</p>
             <center><p><?php $footer_ads = get_option('site_footer_ads'); if($footer_ads != '') { echo stripslashes ($footer_ads); } else { echo ''; } ?></p></center>
            </div>
			<!-- END .main-contents .bom-contents -->
			
			<!-- START footer -->
			<footer>
				<!-- START #ft-footer -->
				<div id="ft-footer">
					<div class="footer-overlay">
						<div class="container">
							<div class="row">
                            <center><h3>We offer the Best Services</h3></center>
								<!-- section 1 -->
								<section class="col-md-6">
                                	<i class="fa fa-tags fa-4x"></i>
									<h3>BEST DEALS</h3>
									<p>Find hotel deals from thousands of travels sites. </p>
									<div class="tl-author"></div>
								</section>
								
								<!-- section 2 -->
								<section class="col-md-6">
                                    <i class="fa fa-book fa-4x"></i>
									<h3>EASY BOOKINGS</h3>
									<p>Simply search, select and book your trips at one place. </p>
									<div class="tl-author"></div>
								</section>
                                
                                <!-- section 3 -->
								<section class="col-md-6">
                                    <i class="fa fa-money fa-4x"></i>
									<h3>BEST PRICE</h3>
									<p>Find the best price possible for your desired hotel. </p>
									<div class="tl-author"></div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ft-footer -->
				
<?php get_footer(); ?>						