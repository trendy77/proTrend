<?php
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');
?>
<?php
add_theme_support( 'post-thumbnails' );
add_filter( 'post_limits', 'wpcodex_filter_main_search_post_limits', 15, 2 );
//add_filter('the_content', 'wpse_ad_T');
add_filter('the_content', 'wpse_ad_content');
add_theme_support('widgets');

//** MY CUSTOM FUNCTIONS ARE : 
//    **  addSignin() 				// socialLinks()
//    **  switchHead()    			// amazonAdvert()			// add_hashTags()
// 	  ** getGappsTag()   			//** getGTM() 				//	** fbappid()


// replace (affiliate) words with links!!!!    //** enable to add affilate links 2 keywords **//
//add_filter('the_content', 'replace_text_wps');
//add_filter('the_excerpt', 'replace_text_wps');
			//function replace_text_wps($text){
			//$replace = array(
					// 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
					// football clothing  BRANDS
		// 'nike'   =>        '<a href="http://mysite.com/myafflink">thesis</a>',
		//'adidas'    =>       '<a href="http://mysite.com/myafflink">studiopress</a>'
//'football'     =>//'jersey'//'vaporizer'     =>
//}

function addSignin(){
			echo '<div class="item1">
						  <div id="gConnect" class="button">
						<button class="g-signin"
								data-scope="email"
								data-clientid="841077041629.apps.googleusercontent.com"
								data-callback="onSignInCallback"
								data-theme="dark"
								data-cookiepolicy="single_host_origin">
						</button>
      <!-- Textarea for outputting data -->
						<div id="response" class="hide">
				<textarea id="responseContainer" style="width:100%; height:150px"></textarea>
						</div>
					</div>
				</div><div class="item2"></div>';
				return;
}

function switchHead(){
	$url = home_url();
	switch ( $url ) {
	case 'http://organisemybiz.com':
		echo '<li><a href="organisemybiz.com/bizfeed" title="bizfeed">#bizFeed</a></li>
		<li><a href="organisemybiz.com/contentfeed" title="contentfeed">#contentFeed</a></li>
		<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>';
		break;
	case 'http://es.organisemybiz.com':
		echo '<li><a href="es.organisemybiz.com/bizfeed" title="bizfeed">#bizFeed</a></li>
		<li><a href="es.organisemybiz.com/contentfeed" title="contentfeed">#contentFeed</a></li>
		<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>';
		break;
	case 'http://vapedirectory.co':
		echo '<li><a href="vapedirectory.co/releases" title="latest">New Releases</a></li>
		<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>';
		break;
	case 'http://globetravelsearch.com':
		echo '<li><a href="http://globetravelsearch.com/hotel" title="hotel">HOTELS</a></li>
		<li><a href="http://globetravelsearch.com/flight" title="Flight">FLIGHTS</a></li>
		<li><a href="http://globetravelsearch.com/rental-car" title="Rental">CAR RENTALS</a></li>
		<li><a href="http://globetravelsearch.com/cruises" title="Cruises">CRUISES</a></li>
		<li><a href="http://globetravelsearch.com/travelblog" title="travelBlog">TRAVELBLOG</a></li>
		<li><a href="http://globetravelsearch.com/videos" title="travelVideos">VIDEOS</a></li>';
		break;
	case 'http://customkitsworldwide.com';
			echo '<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>	';
			break;
	case 'http://govnews.info';
			echo '<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>	';
			break;
	case 'http://fakenewsregistry.org/es';
			echo '<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>	';
			break;
	case 'http://fakenewsregistry.org';
		echo '<li><a href="'.get_option('site_domain').'/categories" title="CATEGORIES">Categories</a></li>	';
			break;
	case 'http://trendypublishing.com':
		echo '<li><a href="'.get_option('site_domain').'/platforms" title="Platforms">Platforms</a></li>
			<li><a href="'. get_option('site_domain').'/services" title="SERVICES">Services</a></li>';
			break;
	case 'http://trendypublishing.com.au':
		echo '<li><a href="'.get_option('site_domain').'/platforms" title="Platforms">Platforms</a></li>
			<li><a href="'. get_option('site_domain').'/services" title="SERVICES">Services</a></li>';
			break;	
	}
}

function getGappsTag(){
	$url = home_url();
	switch ( $url ) {
	case 'http://organisemybiz.com';
	echo 'UA-84079763-5';
	break;
	case 'http://es.organisemybiz.com';
	echo 'UA-84079763-10';
	break;
	case 'http://vapedirectory.co';
	echo 'UA-84079763-9';
	break;
	case 'http://globetravelsearch.com';
	echo 'UA-84079763-13';
	break;
	case 'http://customkitsworldwide.com';
	echo 'UA-85225777-1';
	break;
	case 'http://govnews.info';
	echo 'UA-84079763-8';
	break;
	case 'http://fakenewsregistry.org/es';
	echo 'UA-84079763-6';
	break;
	case 'http://fakenewsregistry.org';
	echo 'UA-84079763-11';
	break;
	case 'http://trendypublishing.com':
	echo 'UA-84079763-11';
	break;
	case 'http://trendypublishing.com.au':
	echo 'UA-84079763-11';
	break;
	}
}

function getGTM(){
$url = home_url();
switch ( $url ) {
	case http://organisemybiz.com:
	echo 'GTM-NX26K25';
	break;
	case http://es.organisemybiz.com;
	echo 'GTM-NX26K25';
	break;
	case http://vapedirectory.co;
	echo 'GTM-NX26K25';
	break;
	case http://globetravelsearch.com;
	echo 'GTM-NX26K25';
	break;
	case http://customkitsworldwide.com;
	echo 'GTM-NX26K251';
	break;
	case http://govnews.info;
	echo 'GTM-NX26K25';
	break;
	case http://fakenewsregistry.org/es;
	echo 'GTM-NX26K25';
	break;
	case http://fakenewsregistry.org;
	echo 'GTM-NX26K25';
	break;
	case http://trendypublishing.com:
	echo 'GTM-NX26K25';
	break;
	case http://trendypublishing.com.au:
	echo 'GTM-NX26K25';
	break;
	}	
}
 
 
function fbappid(){	
$url = home_url();
	switch ($url){
	case http://es.organisemybiz.com;
	echo '1209167032497461';
	break;
	case http://organisemybiz.com;
	echo '1209167032497461';
	break;
	case http://vapedirectory.co;
	echo '1829696163961982';
	break;
	case http://globetravelsearch.com;
	echo '232122247192377';
	break;
	case http://customkitsworldwide.com;
	echo '1863943023885616';
	break;
	case http://es.customkitsworldwide.com;
	echo '1863943023885616';
	break;
	case http://govnews.info;
	echo '1645038759139286';
	break;
	case http://fakenewsregistry.org/es;
	echo '1883167178608105';
	break;
	case http://fakenewsregistry.org;
	echo '1883167178608105';
	break;
	}
}

 
function socialLinks(){
$url = home_url();
if ($url == 'http://organisemybiz.com' ||  'http://es.organisemybiz.com'){
echo '<span>Get the latest news @socialMedia </span>
		<ul class="social-media footer-social">
		<li><a class="sm-twitter" href="https://www.twitter.com/organisemybiz"><span>Twitter</span></a></li>
		<li><a class="sm-facebook" href="https://www.facebook.com/OrganiseBiz"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/organisemybiz"><span>Pinterest</span></a></li>
		<li><a class="sm-instagram" href="https://www.instagram.com/organisemybiz/"><span>Instagram</span></a></li>
		</ul>';
		break;
	} else if ($url == 'http://vapedirectory.co'){
	echo '<span>Get the latest news @socialMedia</span>
		<ul class="social-media footer-social">
		<li><a class="sm-twitter" href="https://www.twitter.com/vapedirectoryau/"><span>Twitter</span></a></li>
		<li><a class="sm-facebook" href="https://www.facebook.com/vapeDirectory.co/"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/vapedirectory/"><span>Pinterest</span></a></li>
		<li><a class="sm-instagram" href="https://www.instagram.com/vapedirectory/"><span>Instagram</span></a></li>
		</ul>';
		break;
	} else if ($url == 'http://globetravelsearch.com'){
	echo '<span>Get the latest news @socialMedia</span>
		<ul class="social-media footer-social">
		<li><a class="sm-twitter" href="https://www.twitter.com/globetravel/"><span>Twitter</span></a></li>
		<li><a class="sm-facebook" href="https://www.facebook.com/globetravelsearch/"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/globetravelsearch/"><span>Pinterest</span></a></li>
		<li><a class="sm-instagram" href="https://www.instagram.com/globetravelsearch/"><span>Instagram</span></a></li>
		</ul>';
		break;
	} else if ($url == 'http://womenstylechannel.com'){
	echo '<span>Get the latest news @socialMedia</span>
		<ul class="social-media footer-social">
		<li><a class="sm-twitter" href="https://www.twitter.com/vapedirectoryau/"><span>Twitter</span></a></li>
		<li><a class="sm-facebook" href="https://www.facebook.com/vapeDirectory.co/"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/vapedirectory/"><span>Pinterest</span></a></li>
		<li><a class="sm-instagram" href="https://www.instagram.com/vapedirectory/"><span>Instagram</span></a></li>
		</ul>';
		break;
	} else if ($url ==  'http://customkitsworldwide.com' || 'http://es.customkitsworldwide.com'){
	echo '<span>Get the latest news @socialMedia</span>
		<ul class="social-media footer-social">		
		<li><a class="sm-twitter" href="https://www.twitter.com/customkitworldwide"><span>Twitter</span></a></li>
		<li><a class="sm-facebook" href="https://www.facebook.com/customkitworldwide/"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/customkitworldwide"><span>Pinterest</span></a></li>		
		<li><a class="sm-instagram" href="https://www.instagram.com/customkitworldwide/"><span>Instagram</span></a></li>
		</ul>';	break;
	} else if($url ==  'http://fakenewsregistry.org' || 'http://fakenewsregistry.org/es'){
	echo '<span>Get the latest news @socialMedia</span>
		<ul class="social-media footer-social">
		<li><a class="sm-twitter" href="https://www.twitter.com/news_sans_fact"><span>Twitter</span></a></li>		<li><a class="sm-facebook" href="https://www.facebook.com/fakenewsregistry"><span>Facebook</span></a></li>		<li><a class="sm-pinterest" href="https://www.pinterest.com/fakenewsregistry"><span>Pinterest</span></a></li>		<li><a class="sm-instagram" href="https://www.instagram.com/fakenewsregistry"><span>Instagram</span></a></li>
		</ul>';	break;
	} else if ($url == 'http://govnews.info'){
		echo '<span>Get the latest news @socialMedia</span>	<ul class="social-media footer-social">	<li><a class="sm-twitter" href="https://www.twitter.com/vapedirectoryau/"><span>Twitter</span></a></li>		<li><a class="sm-facebook" href="https://www.facebook.com/vapeDirectory.co/"><span>Facebook</span></a></li>
		<li><a class="sm-pinterest" href="https://www.pinterest.com/vapedirectory/"><span>Pinterest</span></a></li>		<li><a class="sm-instagram" href="https://www.instagram.com/vapedirectory/"><span>Instagram</span></a></li></ul>';		
		break;
		}else if ($url == 'http://trendypublishing.com' ||'http://trendypublishing.com.au'){
			echo '<span>Get the latest news @socialMedia </span><ul class="social-media footer-social">	<li><a class="sm-twitter" href="https://www.twitter.com/trendypublishing"><span>Twitter</span></a></li>	<li><a class="sm-facebook" href="https://www.facebook.com/trendy"><span>Facebook</span></a></li><li><a class="sm-pinterest" href="https://www.pinterest.com/trendypublishing"><span>Pinterest</span></a></li>		<li><a class="sm-instagram" href="https://www.instagram.com/trendypublishing"><span>Instagram</span></a></li></ul>';
		break;
		}
	}
 
# electronics advert?
function amazonAdvert($choice){
	switch ($choice){
	case '1':
echo '<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=8db1de28-51b4-44f5-a156-b4c34a23f666"></script>';
	break;
	case '2':
		echo '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=trendypublish-20&marketplace=amazon&region=US&placement=B01DFKC2SO&asins=B01DFKC2SO&linkId=1b38aef0072296f5d98d912d29b48cc7&show_border=true&link_opens_in_new_window=true"></iframe>';break;
	case '3': echo '<iframe src="//rcm-na.amazon-adsystem.com/e/cm?o=1&p=11&l=ez&f=ifr&linkID=dd7d97a2e110e103f63f14ba20a2a3a8&t=trendypublish-20&tracking_id=trendypublish-20" width="120" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>';	break;	
// add the tablet !
	case '4':	echo '<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=trendypublish-20&marketplace=amazon&region=US&placement=B01MF4QL9E&asins=B01MF4QL9E&linkId=364125b4931bb0ce3ea527fd9e380303&show_border=true&link_opens_in_new_window=true"></iframe>';break;
// and the active pen
case '8': echo	'<iframe style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=trendypublish-20&marketplace=amazon&region=US&placement=B01AZC3HF2&asins=B01AZC3HF2&linkId=66bad91a6dcf0ea4417df46b697eb15c&show_border=true&link_opens_in_new_window=true"></iframe>';break;
//hue
case '7': echo	'<a target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=trendypublish-20&linkCode=ur2&linkId=f33cd3b3d78c727880cf5502ee02e05d&camp=1789&creative=9325&index=aps&keywords=philips hue">Hue Lightbulbs</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=trendypublish-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />'; break;
// win 10 tablets search ish grid
case '6': echo	'<script type="text/javascript">amzn_assoc_placement = "adunit0";amzn_assoc_search_bar = "true";amzn_assoc_tracking_id = "trendypublish-20";
amzn_assoc_ad_mode = "manual";amzn_assoc_ad_type = "smart";amzn_assoc_marketplace = "amazon";amzn_assoc_region = "US";amzn_assoc_title = "My Amazon Picks";
amzn_assoc_linkid = "7cb74259967239132c8f3fb8d9b5150d";amzn_assoc_asins = "B01MR43S2E,B01H3B17R8,B012DTDBI8,B01NAIQNHQ,B0188NA4DS,B01N2YG91G";</script>
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>'; break;
}
} 
 
 

//add_action(  'publish_post',  'add_hashTags', 10, 2 );

function add_hashTags( $ID, $post ) {
    $post = get_post( $ID );
	$url1 = $post->$post_name;// A function to perform actions when a post is published.
	$url= bloginfo('url') .'/'. $url1;// your post title
	$APPLICATION_ID = '4ecd9e16';
$APPLICATION_KEY='be54f0e53443501357865cbc055538aa';
  $ch = curl_init('https://api.aylien.com/api/v1/hashtags');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'X-AYLIEN-TextAPI-Application-Key: ' . APPLICATION_KEY,
    'X-AYLIEN-TextAPI-Application-ID: '. APPLICATION_ID
  ));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
  $response = curl_exec($ch);
   $keywords= json_decode($response);
   wp_set_post_tags( $ID, $keywords, true );
} 
 
 
 
function wpcodex_filter_main_search_post_limits( $limit, $query ) {
	if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
		return 'LIMIT 0, 10';
	}
	return $limit;
}
function wpse_ad_content($content){
    if (!is_single()) return $content;
    $paragraphAfter = 2; //Enter number of paragraphs to display ad after.
 $paragraph4After = 8;
   $content = explode("</p>", $content);
    $new_content = '';
    for ($i = 0; $i < count($content); $i++) {
        if ($i == ($paragraphAfter || $paragraph4After)) {
            $new_content.= '<div style="width: 320px; height: 100px; padding: 0px 0px 0px 0; float: left; margin-left: 0; margin-right: 18px;">';
            $new_content.= '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mob lg banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-4943462589133750"
     data-ad-slot="5993932022"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
            $new_content.= '</div>';
        }
        $new_content.= $content[$i] . "</p>";
    }
	$paragraphAfterT = 4; //Enter number of paragraphs to display ad after.
    $new_content = explode("</p>", $new_content);
    $new_contentT = '';
    for ($i = 0; $i < count($new_content); $i++) {
        if ($i == $paragraphAfterT) {
            $new_contentT.= '<div style="width: 336px; height: 280px; padding: 0px 0px 0px 0; float: right; margin-left: 18px; margin-right: 0;">';
            $new_contentT.= '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tinyhands -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4943462589133750"
     data-ad-slot="1808495228"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
            $new_contentT.= '</div>';
        }
        $new_contentT.= $new_content[$i] . "</p>";
    }
	return $new_contentT;
}

function wpse_ad_T($content){
    if (!is_single()) return $content;
    $paragraphAfter = 2; //Enter number of paragraphs to display ad after.
$paragraphAfterT = 6; //Enter number of paragraphs to display ad after.
 $paragraph4After = 9;
   $content = explode("</p>", $content);
    $new_content = '';  $new_contentT = '';
    for ($i = 0; $i < count($content); $i++) {
        if ($i == ($paragraphAfter || $paragraph4After)) {
            $new_content= '<div style="width: 320px; height: 100px; padding: 0px 0px 0px 0; float: left; margin-left: 0; margin-right: 18px;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mob lg banner --><ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-4943462589133750"
     data-ad-slot="5993932022"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>';
        }
    	if ($i == $paragraphAfterT) {
            $new_contentT= '<div style="width: 336px; height: 280px; padding: 0px 0px 0px 0; float: right; margin-left: 18px; margin-right: 0;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tinyhands --><ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-4943462589133750"
     data-ad-slot="1808495228"></ins>
<script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>';
        }
        $new_contentT= $content[$i] . "</p>";		$new_content= $content[$i] . "</p>";
    }
    return $new_contentT;	
	}

function wpsidebar_widgets_init() {
 	register_sidebar( array(
		'name' => 'Newsletter',
		'id' => 'footer_newsletter',
		'description' => _('Widget in this area will be shown in the footer'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar_title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'wpsidebar_widgets_init' );
if(function_exists('add_theme_support')){
	add_theme_support('menus');
}

add_filter( 'auth_cookie_expiration', 'stay_logged_in_for_1_year' );

function stay_logged_in_for_1_year( $expire ) {
  return 31556926; // 1 year in seconds
}

//Clean up the </head>
function removeHeadLinks(){
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
 //If you just want to publicize your main RSS feed and remove the other feeds from the , add a line to your functions.php file:
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
// disable html in comments
add_filter( 'pre_comment_content', 'esc_html' );
// remove admin bar'
add_filter('show_admin_bar', '__return_false');
// REMOVE EMOJIS FROM WP HEADER
		remove_action( 'wp_head', 'print_emoji_detection_script', 7);
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action('wp_head', 'wp_generator');
}

add_action('init', 'removeHeadLinks');
