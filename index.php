<?php get_header(); ?>	

			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper" font="tinyHands.woff">Latest Posts</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Latest</a></li>
										</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
	<div class="sidebar-social">
highlight_file
	</div>	

 
        <!-- START .main-contents -->
			<div class="main-contents">
				
				<div class="container">
                <div class="row">
                <div class="col-md-9">
                    <div class="post-desc">
                        
                        <?php while(have_posts()): the_post(); ?>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
<div class="g-plusone" data-size="tall"></div>
<div class="g-follow" data-href="https://plus.google.com/u/0/110341730404197981214" data-rel="publisher"></div>						 
						 <?php  the_tags();  ?>
					<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
	
						<?php endwhile; ?>
                     </div> 
                  </div>
                  <div class="col-md-3">
                    	<?php $side_ads = get_option('site_side_ads'); if($side_ads != '') { echo stripslashes ($side_ads); } else { echo ''; } ?>
                    </div> 
                   </div>   
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                </div><!-- /container -->
				
			</div>
		<!-- END .main-contents -->
        
        <!-- START footer -->
			<footer>
				<!-- START #ft-footer -->
				<div id="ft-footer">
					<div class="footer-overlay">
						<div class="container">
							<div class="row">
						
							</div>
					  </div>
					</div>
				</div>
				<!-- END #ft-footer -->
        
<?php get_footer(); ?>        