<?php get_header(); ?>	

			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper"><?php the_category( ', ' ); ?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#"><?php the_category( ', ' ); ?></a></li>
									
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
                <div class="post-desc">
					<?php while(have_posts()): the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php
                     // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
					?>
                    <?php endwhile; ?>
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