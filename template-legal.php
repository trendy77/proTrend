<?php
/*
 * Template Name: Template Legal
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
					<h1 class="text-upper">Terms and Conditions</h1>
							</section>	
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="../index.php">[Home]</a></li>
									<li><a href="/privacy.php">[Privacy Policy]</a></li>
										<li><a href="/the-fine-print.php">[Terms]</a></li>
								<li><a href="../contact.php">[Contact]</a></li>
									
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
    
        <!-- START .main-contents -->
			<div class="main-contents">
				<div class="grid2-container">
			
    
				<?php addSignin();?>	
				
				<div class="foot-box foot-box-md col-md-1">
<img src="https://organisemybiz.com/wp-content/uploads/2017/03/giphy-1.gif" alt="OrganiseMBiz logo" 
 title="OrganiseMBiz.com | 24hr live business news feed with expert advice and tips for SMEs and business owners" 
class="alignleft size-medium wp-image-3109" height="25" width="30"/>
</div>
			</div>				
					<div class="item3">
				<div class="foot-box foot-box-md col-md-2">
<img src="https://drive.google.com/file/d/0B92my6YeKTs9RC1MODNoWnJQcnM/view?usp=sharing"  alt="VapeDirectory Logo" 
 title="vapeDirectory.co - Vaping News , Videos and Reviews" class="alignleft size-medium wp-image-3109" height="25" width="30"/>
</div></div>
			<div class="item4">
		
<div class="foot-box foot-box-md col-md-2">
<img src="https://drive.google.com/file/d/0B92my6YeKTs9NHFYU29qamkybUE/view?usp=sharing"  alt="Fake News Registry" 
 title="FakeNewsRegistry.org"class="aligncenter size-medium wp-image-3109" height="25" width="30"/>
</div>		
			</div>
			<div class="item5">
				<div class="foot-box foot-box-md col-md-3">
<img src="https://drive.google.com/file/d/1yQ0ZRhHhlmhRlJxHau9Sp1drI-kgM82log/view?usp=sharing"  alt="GlobeTravelSearch" 
 title="GlobeTravelSearch.com" 
class="aligncenter size-medium wp-image-3109" height="25" width="30"/>
</div>
		</div>		
				
					<div class="item6">
					
					<div class="foot-box foot-box-md col-md-4">
<img src="https://lh3.googleusercontent.com/-Rrrz-5ne6X0/AAAAAAAAAAI/AAAAAAAAAAw/osFAcb14KNU/s72-p-rw-no/photo.jpg" alt="Trendy Publishing- The T" 
 title="TrendyPublishing.com" class="aligncenter size-medium wp-image-3109" height="25" width="30"/>
</div></div>
					<div class="container">
					<img src="trendypublishing.com/timg/govnewsinfologo.gif" alt="Govnews.info logo" 
 title="Govnews.info - Government Press Releases & Annoucements" 
class="alignright size-medium wp-image-3109" height="25" width="30"/>
</div>
<div class="foot-box foot-box-md col-md-6">
<img src="trendypublishing.com/timg/ckwwLogo.gif" alt="Custom Kits Worldwide Logo" 
 title="Custom Kits Worldwide - football news, team kit and jersey updates" 
class="alignright size-medium wp-image-3109" height="25" width="30"/>
</div>
		</div>			
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