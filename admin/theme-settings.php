<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){

//Theme Shortname
$shortname = "site";


//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';





/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall




/* Option Page 1 - All Options */	
$options[] = array( "name" => __('General Settings','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Domain Name','framework_localize'),
			"desc" => __('Enter your domain name.','framework_localize'),
			"id" => $shortname."_domain",
			"std" => "",
			"type" => "text");
			
			
$options[] = array( "name" => __('Custom Logo','framework_localize'),
			"desc" => "Upload a 350px x 70px logo for your theme, or specify an image URL directly.",
			"id" => $shortname."_logo",
			"std" => "",
			"type" => "upload");
						

$options[] = array( "name" => __('Email','framework_localize'),
			"desc" => __('Enter your email address.','framework_localize'),
			"id" => $shortname."_email",
			"std" => "",
			"type" => "text");			
			
			
$options[] = array( "name" => __('Phone','framework_localize'),
			"desc" => __('Enter your phone number.','framework_localize'),
			"id" => $shortname."_phone",
			"std" => "",
			"type" => "text");			
			


/* Option Page 2 - Affiliates Options */
$options[] = array( "name" => __('Affiliates IDs','framework_localize'),
			"type" => "heading");
			

$options[] = array( "name" => __('Hotelcombined ID','framework_localize'),
			"desc" => __('Enter you Hotelcombined ID.','framework_localize'),
			"id" => $shortname."_hotelcombined",
			"std" => "",
			"type" => "text");
			
			

$options[] = array( "name" => __('Dohop Whitelabel Name','framework_localize'),
			"desc" => __('Enter your Dohop whitelabel name.','framework_localize'),
			"id" => $shortname."_dohopid",
			"std" => "",
			"type" => "text");						
			
			
$options[] = array( "name" => __('Amozon ID','framework_localize'),
			"desc" => __('Enter your Amazon associate id.','framework_localize'),
			"id" => $shortname."_amazonid",
			"std" => "",
			"type" => "text");
			
			

$options[] = array( "name" => __('CruiseDirect ID','framework_localize'),
			"desc" => __('Enter your CruiseDirect id.','framework_localize'),
			"id" => $shortname."_cruisedirectid",
			"std" => "",
			"type" => "text");			
			
$options[] = array( "name" => __('Search Box Code','framework_localize'),
			"desc" => __('Paste your Hotelcombined (or other) search box code here.','framework_localize'),
			"id" => $shortname."_searchboxid",
			"std" => "",
			"type" => "textarea");


/* Option Page 2 - Slides Options */
$options[] = array( "name" => __('Home Page Options','framework_localize'),
			"type" => "heading");

$options[] = array( "name" => __('Paris Background Image','framework_localize'),
			"desc" => "Upload an image, or specify an image URL directly. Default image size: 1920px x 920px",
			"id" => $shortname."_parisbg",
			"std" => "",
			"type" => "upload");
		
$options[] = array( "name" => __('Australia Background Image','framework_localize'),
			"desc" => "Upload an image, or specify an image URL directly. Default image size: 1920px x 920px",
			"id" => $shortname."_autraliabg",
			"std" => "",
			"type" => "upload");
												
			
$options[] = array( "name" => __('Journeys Background Image','framework_localize'),
			"desc" => "Upload an image, or specify an image URL directly. Default image size: 1920px x 920px",
			"id" => $shortname."_journeybg",
			"std" => "",
			"type" => "upload");
			
			
/* Option Page 2 - Videos Options */
$options[] = array( "name" => __('Videos Options','framework_localize'),
			"type" => "heading");
												

$options[] = array( "name" => __('London Video URL','framework_localize'),
			"desc" => __('Enter london video url here','framework_localize'),
			"id" => $shortname."_londonvid",
			"std" => "",
			"type" => "text");		

$options[] = array( "name" => __('Paris Video URL','framework_localize'),
			"desc" => __('Enter paris video url here','framework_localize'),
			"id" => $shortname."_parisvid",
			"std" => "",
			"type" => "text");	

$options[] = array( "name" => __('Barcelona Video URL','framework_localize'),
			"desc" => __('Enter barcelona video url here','framework_localize'),
			"id" => $shortname."_barcelonavid",
			"std" => "",
			"type" => "text");		
			
$options[] = array( "name" => __('Las Vegas Video URL','framework_localize'),
			"desc" => __('Enter las vegas video url here','framework_localize'),
			"id" => $shortname."_lasvegasvid",
			"std" => "",
			"type" => "text");		
	
$options[] = array( "name" => __('Bahamas Video URL','framework_localize'),
			"desc" => __('Enter bahamas video url here','framework_localize'),
			"id" => $shortname."_bahamasvid",
			"std" => "",
			"type" => "text");		

$options[] = array( "name" => __('Jamaica Video URL','framework_localize'),
			"desc" => __('Enter jamaica video url here','framework_localize'),
			"id" => $shortname."_jamaicavid",
			"std" => "",
			"type" => "text");		

$options[] = array( "name" => __('Toronto Video URL','framework_localize'),
			"desc" => __('Enter toronto video url here','framework_localize'),
			"id" => $shortname."_torontovid",
			"std" => "",
			"type" => "text");		
						

$options[] = array( "name" => __('New York Video URL','framework_localize'),
			"desc" => __('Enter new york video url here','framework_localize'),
			"id" => $shortname."_newyorkvid",
			"std" => "",
			"type" => "text");		
			
													

/* Option Page 2 - Social Options */
$options[] = array( "name" => __('Social Options','framework_localize'),
			"type" => "heading");
												

$options[] = array( "name" => __('Facebook Page URL','framework_localize'),
			"desc" => __('Enter your facebook page url','framework_localize'),
			"id" => $shortname."_facebook",
			"std" => "",
			"type" => "text");		

$options[] = array( "name" => __('Twitter Profile URL','framework_localize'),
			"desc" => __('Enter your twitter profile url','framework_localize'),
			"id" => $shortname."_twitter",
			"std" => "",
			"type" => "text");	

$options[] = array( "name" => __('Flickr Profile URL','framework_localize'),
			"desc" => __('Enter your flickr url','framework_localize'),
			"id" => $shortname."_flickr",
			"std" => "",
			"type" => "text");		
			
					
	
/* Option Page 2 - Ads Options */
$options[] = array( "name" => __('Ads Options','framework_localize'),
			"type" => "heading");
												


$options[] = array( "name" => __('Blog Sidebar Ads','framework_localize'),
			"desc" => __('Paste your google adsense (or other) code here. This ad will appear on the blog sidebar','framework_localize'),
			"id" => $shortname."_side_ads",
			"std" => "",
			"type" => "textarea");	
	
				
$options[] = array( "name" => __('Top Home Ads','framework_localize'),
			"desc" => __('Paste your google adsense (or other) code here. This ad will appear on the top home page','framework_localize'),
			"id" => $shortname."_top_ads",
			"std" => "",
			"type" => "textarea");	
													
									   
$options[] = array( "name" => __('Bottom Home Ads','framework_localize'),
			"desc" => __('Paste your google adsense (or other) code here. This ad will appear on the bottom home page','framework_localize'),
			"id" => $shortname."_footer_ads",
			"std" => "",
			"type" => "textarea");		
	

/* Option Page 2 - Footer Options */
$options[] = array( "name" => __('Footer Options','framework_localize'),
			"type" => "heading");
												


				
$options[] = array( "name" => __('Google Adsense','framework_localize'),
			"desc" => __('Paste your google adsense code here. This ad will appear on the footer bottom','framework_localize'),
			"id" => $shortname."_footer_adsense",
			"std" => "",
			"type" => "textarea");	
													
									   
$options[] = array( "name" => __('Tracking Code','framework_localize'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework_localize'),
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea");			

				
										
					


update_option('of_template',$options); 					  
 
update_option('of_shortname',$shortname);

}
}
?>