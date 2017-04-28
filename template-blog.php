<?php
/*
 * Template Name: Template Blog
 * @package Wordpress
 * @subpackage proTrend
*/
?>

<?php get_header(); ?>	

			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Latest Articles</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">"Latest Articles</a></li>
							<?php	addSignin();?>	
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
              <div class="col-md-12">
							<div class="post-data">
								<div class="plan-image">
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
							
							</div>
						</div>
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