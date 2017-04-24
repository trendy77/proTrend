
<?php get_header(); ?>	

			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Page Not Found</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Page Not Found</a></li>
									
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
					<div class="error-page">
						<figure>
							<img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/14-404.png" alt="ERROR-IMAGE">
						</figure>
						<div class="error-text">
							<span>the page you requested</span>
							<span class="large-text">could not be found</span>
						</div>
						<a class="back-home" href="<?php echo get_option('home'); ?>">BACK TO HOME</a>
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