<?php
/*
  Plugin Name: MK Slider
  Plugin URI: https://manojranawpblog.wordpress.com/
  Description: A Slider plugin for wordpress
  Version: 1.2
  Author: Manoj Kumar
  Author URI: https://manojranawpblog.wordpress.com/
  Tags: Slider, Slideshow, Wordpress Slider, Wordpress Slideshow
 */

require_once 'admin/admin-init.php';

/*
 * Add Stylesheet & Scripts for the slider
 */

function mk_slider_scripts() {
  wp_enqueue_script('jquery.easing.1.3', plugins_url('/js/jquery.easing.1.3.js', __FILE__), array('jquery'));
  wp_enqueue_script('jquery.skitter.min', plugins_url('/js/jquery.skitter.min.js', __FILE__), array('jquery'));
  wp_enqueue_script('jquery.animate-colors-min', plugins_url('/js/jquery.animate-colors-min.js', __FILE__), array('jquery'));

  wp_register_style('mk-skitter-css', plugins_url('/css/skitter.styles.css', __FILE__));
  wp_enqueue_style('mk-skitter-css');
}

add_action('wp_enqueue_scripts', 'mk_slider_scripts');

function mk_slider($sliderID) {
  global $post;
  if (get_post_meta($sliderID, '_mk_image1', 1)) {
    do_action('mk_script', $sliderID); // Add MK Slider Script
    $styles = "";
    $styles .= 'width:' . get_post_meta($sliderID, '_mk_width', 1) . 'px;';
    $styles .= 'height:' . get_post_meta($sliderID, '_mk_height', 1) . 'px;';
    if (get_post_meta($sliderID, '_mk_borderCheck', 1)) {
      $styles .= 'border: solid ' . get_post_meta($sliderID, '_mk_borderwidth', 1) . 'px ' . get_post_meta($sliderID, '_mk_bordercolor', 1) . ';';
    }
    ?>
    <div id="mk-slider<?php echo $sliderID; ?>" class="box_skitter" style="<?php echo $styles; ?>">
      <ul>
        <?php
        for ($i = 0; $i <= 10; $i++) {
          if (get_post_meta($sliderID, '_mk_image' . $i, 1)) {
            ?>
            <li>
              <a href="<?php echo get_post_meta($sliderID, '_mk_imageLink' . $i, 1); ?>">
                <img src="<?php echo get_post_meta($sliderID, '_mk_image' . $i, 1); ?>" alt="<?php echo get_post_meta($sliderID, '_mk_imageTitle' . $i, 1); ?>" title="<?php echo get_post_meta($sliderID, '_mk_imageTitle' . $i, 1); ?>" />
              </a>
              <div class="label_text">
                <h3><?php echo get_post_meta($sliderID, '_mk_imageTitle' . $i, 1); ?></h3>
                <p><?php echo get_post_meta($sliderID, '_mk_imageDesc' . $i, 1); ?></p>
              </div> 
            </li>
            <?php
          }
        }
        ?>
      </ul>
    </div>
    <?php
  }
}

/*
 * Add Header Content
 */
add_action('mk_script', 'mk_slider_options', 10, 1);

function mk_slider_options($sliderID) {
  ?>
  <script type="text/javascript">
    jQuery(function(){
      jQuery('#mk-slider<?php echo $sliderID; ?>').skitter({
        animation: '<?php echo get_post_meta($sliderID, '_mk_transition', 1); ?>'
      });
    });
  </script>
  <?php
}

function mk_slider_shortcode($atts) {
  return mk_slider($atts[id]);
}

add_shortcode('MK-SLIDER', 'mk_slider_shortcode'); // Add shortcode [MK-SLIDER id='sliderID']
?>