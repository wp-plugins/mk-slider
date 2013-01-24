<?php
/*
Plugin Name: MK Slider
Plugin URI: http://euclidesolutions.co.in
Version: 1.1
Author: Manoj Rana
Author URI: http://euclidesolutions.co.in
Description: This is banner functionality for automatically changing banner images. Images fade-out and fade-in. It also contains the thumbnails for navigating the images.
*/
global $wp_version;

if(version_compare($wp_version,'2.9','<'))
{
	exit ($exit_msg." Please upgrade your wordpress.");
}

function register_files()
{
	echo '<link type="text/css" rel="stylesheet" href="'. get_bloginfo('wpurl'). '/wp-content/plugins/mk_slider/css/style.css" />' . "\n";
	
	echo '<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/js/jquery_001.js"></script>';
	echo '<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/js/jquery_003.js"></script>';
	
	echo '<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/js/settings-js.js"></script>';
	
	echo '<script type="text/javascript" src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/js/jquery_002.js"></script>';
	
	echo '<script type="text/javascript">';
	echo '$(document).ready(function(){';
	echo 'var jq = jQuery.noConflict();';
	echo "jq('#gallery').galleryView({";
	echo 'panel_width: 903,';
	echo 'panel_height: 300,';
	echo 'frame_width: 100,';
	echo 'frame_height: 100,';
	echo "background_color: '',";
	echo "border: 'none'";
	echo "})";
	echo "})";
	echo '</script>';
}


include_once('mk_db.php');

// Calling the database creation function
register_activation_hook(__FILE__,'mk_slider_db');




function mk_slider()
{
	global $wpdb;
	$table_name = $wpdb->prefix . "mk_slider";

	register_files();// call the register function
	
	$myrows = $wpdb->get_results( "SELECT * FROM ".$table_name );

	$output = '<div class="banner_outer">';
	$output .= '<div id="gallery" class="galleryview">';
	$output .= '<div class="images">';
	$output .= '<div class="panel"><img src="'.$myrows[0]->image_1.'"></div>';
	$output .= '<div class="panel"><img src="'.$myrows[0]->image_2.'"></div>';
	$output .= '<div class="panel"><img src="'.$myrows[0]->image_3.'"></div>';
	$output .= '<div class="panel"><img src="'.$myrows[0]->image_4.'"></div>';
	$output .= '</div>';// <!-- images -->
	
	$output .= '<ul class="filmstrip">';
	$output .= '<li><img src="'.$myrows[0]->image_1.'" height="64" width="181"></li>';
	$output .= '<li><img src="'.$myrows[0]->image_2.'" height="64" width="181"></li>';
	$output .= '<li><img src="'.$myrows[0]->image_3.'" height="64" width="181"></li>';
	$output .= '<li><img src="'.$myrows[0]->image_4.'" height="64" width="181"></li>';
	$output .= '</ul>';
	//$output .= '<div id="pointer"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/images/pointer.png"></div><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/images/next.png" class="nav-next"><img src="'.get_bloginfo('wpurl').'/wp-content/plugins/mk_slider/images/prev.png" class="nav-prev">';
	$output .= '</div>';
	$output .= '</div>'; //<!-- banner outer -->
	
	echo $output;
}


#----------- Admin panel for the slider-------------
// Admin Section of the Plugin
function mkslider_admin_actions() {
	
add_options_page("MK Slider Settings", "MK Slider", 8, "mk_settings", "mk_slider_admin");
//add_menu_page('Redundancy Calculator Settings', 'Redundancy Calculator', 5, __FILE__, 'redcalc_admin');
}

function mk_slider_admin() {
	register_files();
	include('mk_settings.php');
}

add_action('admin_menu', 'mkslider_admin_actions');



?>
