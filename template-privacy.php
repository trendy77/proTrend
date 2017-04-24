<?php
/*
 * Template Name: Template Privacy
 * @package Wordpress
 * @subpackage Travel Theme
*/
?>

<?php get_header(); ?>	

			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Privacy</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Privacy</a></li>
									
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
    
        <!-- START .main-contents -->
			<div class="main-contents">
				
				<div class="container">
                <div class="row">
                	<?php while(have_posts()): the_post(); ?>
				    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
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