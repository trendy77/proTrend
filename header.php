<!DOCTYPE html>
<html <?php language_attributes(); ?>  dir="ltr">
	<!-- START head -->
	<head>
		<!-- Site meta charset -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- title -->
		<html lang="<?php language_attributes(); ?>">

		<title><?php bloginfo('name'); ?> <?php wp_title( '|', true, 'right' ); ?></title>	
		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->

<!-- Page hiding snippet (recommended)  -->
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'<?php getGappsTag();?>':true});</script>

  
<!-- Analytics-Optimize snippet -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', '<?php getGappsTag(); ?>', 'auto');
   ga('require', '<?php getGTM(); ?>');
    ga('send', 'pageview');
    </script>
	
<link rel="alternate" hreflang="x-default" href="<?php bloginfo('url'); ?>"/>
<!--This link identifies an english version for visitors from  outside the US-->
<link rel="alternate" hreflang="en-gb" href="http://trendypublishing.com.au"/>
<link rel="alternate" hreflang="es" href="http://es.organisemybiz.com"/>
		<!-- favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.html" type="image/x-icon" />
		<!-- trendyTheme stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bs3/css/bootstrap.css" media="all" />
		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bs3/css/bootstrap.css" media="all" />
	
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/newTp.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/newTp.css"/>
	<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
 <?php if (is_page_template('template-bizfeed.php')) { ?>
 
        <link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
        <?php } ?>
   <?php if (is_page_template('template-tours.php')) { ?>
        <link href="<?php bloginfo('template_url'); ?>/css/tour-styles.css" rel="stylesheet" type="text/css" />
        <?php } ?>
          <?php if (is_page_template('template-cruise.php')) { ?>
        <link href="<?php bloginfo('template_url'); ?>/css/forms.css" rel="stylesheet" type="text/css" />
        <?php } ?>
		 <script src = "https://plus.google.com/js/client:platform.js" async defer></script>
 
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" media="screen" />
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/rs-plugin/css/settings.css" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
		<!-- Load Fonts Awesome -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
       <?php wp_head(); ?> 
	
	
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->

</head>
	<!-- END head -->
	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			<header>
	<div id="main-header">
					<div class="container">
						<div class="row">	

		
				<!-- START #main-header -->
				<div id="main-header">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<a id="site-logo" href="<?php echo get_option('home'); ?>">
									<?php 
						$logo = get_option('site_logo');
									if($logo != '') {
									echo '<img src='.$logo.' alt="" />';
										} else {
												echo '';
										}
							        ?>
								</a>
							</div>
							<div class="col-md-9">
								<nav class="main-nav">
									<span>MAIN MENU</span>
									<ul id="main-menu">
										<li><a href="<?php get_option('home'); ?>" title="HOME">HOME</a></li>
										<li><a href="<?php get_option('site_domain');?>/latest" title="LATEST">Latest</a></li> 		
										<li><a href="<?php get_option('site_domain');?>/services" title="CATEGORIES">Categories</a></li>	
										<li><a href="<?php get_option('site_domain');?>/reviews" title="REVIEWS">Reviews</a></li>
										<li><a href="<?php get_option('site_domain');?>/videos" title="VIDEOS">Videos</a></li>
										
										<?php switchHead();?>
							
											} else {
												echo '<li><a href="' . get_option('site_domain') . '/contact" title="more">More...</a></li>';
										}
							        ?>
								</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- END #main-header -->
			</header>
			<!-- END header -->