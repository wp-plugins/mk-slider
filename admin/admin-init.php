<?php

/*
 * Initialize all the admin pages
 */
function load_mk_admin_scripts() {
    wp_enqueue_script('jquery-ui-sortable');            
}    
 
add_action('wp_enqueue_scripts', 'load_mk_admin_scripts'); 

function load_mk_admin_style() {
        wp_register_style( 'mk_admin_styles', plugin_dir_url(__FILE__) . '/admin-styles.css', false, '1.0.0' );
        wp_enqueue_style( 'mk_admin_styles' );
}
add_action( 'admin_enqueue_scripts', 'load_mk_admin_style' );

// Styling for the custom post type icon
add_action( 'admin_head', 'mk_slider_icons' );
function mk_slider_icons() {
    ?>
    <style type="text/css" media="screen">        
    #icon-edit.icon32-posts-mkslider{background: url('<?php echo plugin_dir_url(__FILE__); ?>/images/mk32.png') no-repeat;}
    </style>
<?php }

require_once 'mk-custom-post-type.php'; // Add Custom Post Types
require_once 'metabox/metabox.php'; // Add Custom Meta Boxes