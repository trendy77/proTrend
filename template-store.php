<?php
/*
 * Template Name: Template Store
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
								<h1 class="text-upper">Store</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Store</a></li>
									
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
               
					<div class="tmove">
				hi!!!!!
				<?php amazonAdvert(6); ?>
					</div>
				<div class="left-advertising-area">
	<?php amazonAdvert(1); ?>
				</div>

	<div class="tmove">
				<?php amazonAdvert(4); ?>
					</div>
				


	<div class="tmove">
				<?php amazonAdvert(3); ?>
					</div>
				

	<div class="tmove">
				<?php amazonAdvert(2); ?>
					</div>
				

	<div class="tmove">
				<?php amazonAdvert(5); ?>
					</div>
				
</div>



		<div class="container">
                	<iframe src="http://astore.amazon.com/<?php
			
			$amazonid = get_option('site_amazonid');
			if($amazonid != '') {
			echo $amazonid;
				} else {
						echo 'trendypublish-20';
			}
		?>" width="100%" height="900" frameborder="0" scrolling="no"></iframe>
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