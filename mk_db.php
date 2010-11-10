<?php
// Create Table Necessary For The Plugin
global $mk_slider_version;
$mk_slider_version = "1.1";

function mk_slider_db() {
   global $wpdb;
   global $mk_slider_version;
   $table_name = $wpdb->prefix . "mk_slider";
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {
	   
	$sql = "CREATE TABLE "  . $table_name . " (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	image_1 VARCHAR(1000) NOT NULL ,
	image_2 VARCHAR(1000) NOT NULL ,
	image_3 VARCHAR(1000) NOT NULL ,
	image_4 VARCHAR(1000) NOT NULL 
	);";	
	
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
	$path = get_bloginfo('wpurl')."/wp-content/plugins/mk_slider/";
    $rows_affected = $wpdb->insert( $table_name, array( 'image_1' => $path.'images/banner_img1.png', 'image_2' => $path.'images/banner_img2.png','image_3' => $path.'images/banner_img3.png','image_4' => $path.'images/banner_img4.png' ) );
 
add_option("mk_slider_version", $mk_slider_version);

   }
}

?>