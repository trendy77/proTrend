<?php
/*
 * Template Name: Template content
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
								<h1 class="text-upper">Videos</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Videos</a></li>
									
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
              					<?php addSignin();?>			<!-- START 2 columns gallery -->
					 <div class="row">
					 <ul class="gallery-list list-unstyled">
							<li class="col-md-6">
								<div class="gal-item">
								<img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/list-view/blog-listview.jpg" alt="Vancouver, BC" />
								</div>
								<ul class="featured-btm single-ft-btm list-unstyled box-shadow1">
								<?php $categories = get_the_category();
						$separator = ' ';
						$output = '';
							if ( ! empty( $categories ) ) {
								foreach( $categories as $category ) {
										$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										}
									echo trim( $output, $separator );
									}?>
								</ul>
								<div class="post-desc">
							
															
								<iframe  height="313" src="<?php $londonvid = get_option('site_londonvid'); echo $londonvid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-6">
								<div class="gal-item">
									<iframe  height="313" src="<?php $parisvid = get_option('site_parisvid'); echo $parisvid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
						</ul>
						<!-- END 2 columns gallery -->
                   </div> 
                     <!-- END .row -->
                   <div class="row">
						<!-- START 3 columns gallery -->
						<ul class="gallery-list list-unstyled">
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $barcelonavid = get_option('site_barcelonavid'); echo $barcelonavid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $lasvegasvid = get_option('site_lasvegasvid'); echo $lasvegasvid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $bahamasvid = get_option('site_bahamasvid'); echo $bahamasvid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $jamaicavid = get_option('site_jamaicavid'); echo $jamaicavid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $torontovid = get_option('site_torontovid'); echo $torontovid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
							
							<li class="col-md-4">
								<div class="gal-item">
									<iframe  height="200" src="<?php $newyorkvid = get_option('site_newyorkvid'); echo $newyorkvid; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</li>
						</ul>
						<!-- END 3 columns gallery -->
					</div>
					<!-- END .row -->   
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