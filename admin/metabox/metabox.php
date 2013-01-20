<?php

/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */
add_filter('mk_meta_boxes', 'mk_metaboxes');

/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function mk_metaboxes(array $meta_boxes) {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_mk_';
  
  /* 
   * Create File List for the slider
   */

  //Image 1
  $meta_boxes[] = array(
      'id' => 'images_metabox1',
      'title' => 'MK Slider Image 1',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image1',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image title',
              'id' => $prefix . 'imageTitle1',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc1',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink1',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  //Image 2
  $meta_boxes[] = array(
      'id' => 'images_metabox2',
      'title' => 'MK Slider Image 2',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image2',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image  title',
              'id' => $prefix . 'imageTitle2',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc2',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink2',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  //Image 3
  $meta_boxes[] = array(
      'id' => 'images_metabox3',
      'title' => 'MK Slider Image 3',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image3',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image  title',
              'id' => $prefix . 'imageTitle3',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc3',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink3',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  //Image 4
  $meta_boxes[] = array(
      'id' => 'images_metabox4',
      'title' => 'MK Slider Image 4',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image4',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image  title',
              'id' => $prefix . 'imageTitle4',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc4',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink4',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  
  //Image 5
  $meta_boxes[] = array(
      'id' => 'images_metabox5',
      'title' => 'MK Slider Image 5',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image5',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image  title',
              'id' => $prefix . 'imageTitle5',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc5',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink5',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  
  //Image 6
  $meta_boxes[] = array(
      'id' => 'images_metabox6',
      'title' => 'MK Slider Image 6',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(          
          array(
              'name' => 'Image',
              'desc' => 'Enter the image URL here or user the upload button',
              'id' => $prefix . 'image6',
              'type' => 'file',
          ),
          array(
              'name' => 'Title',
              'desc' => 'Enter image  title',
              'id' => $prefix . 'imageTitle6',
              'type' => 'text',
          ),
          array(
              'name' => 'Description',
              'desc' => 'Enter image description',
              'id' => $prefix . 'imageDesc6',
              'type' => 'textarea_small',
          ),
          array(
              'name' => 'Link URL',
              'desc' => 'Enter URL which will open when clicked on image',
              'id' => $prefix . 'imageLink6',
              'type' => 'text',
              'std' => '#'
          ),
      ),
  );
  /*
   * MK Slider Options
   */
  $meta_boxes[] = array(
      'id' => 'mk_options_metabox',
      'title' => 'MK Slider Options',
      'pages' => array('mkslider',), // Post type
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true, // Show field names on the left
      'fields' => array(
          array(
              'name' => 'Enable Title/Description Display',
              'desc' => 'Enable title/description disply on slider',
              'id' => $prefix . 'enableContent',
              'type' => 'checkbox',	              
          ),   
          array(
              'name' => 'Slider Width',
              'desc' => 'Enter slider width',
              'id' => $prefix . 'width',
              'type' => 'text_small',
              'std' => '960',
          ),
          array(
              'name' => 'Slider Height',
              'desc' => 'Enter slider height',
              'id' => $prefix . 'height',
              'type' => 'text_small',
              'std' => '400',
          ),
          array(
              'name' => 'Add Slider Border?',
              'desc' => 'Add border to slider',
              'id' => $prefix . 'borderCheck',
              'type' => 'checkbox',	              
          ),   
          array(
              'name' => 'Border Width',
              'desc' => 'Enter border width',
              'id' => $prefix . 'borderwidth',
              'type' => 'text_small',
              'std' => '4',
          ),
          array(
              'name' => 'Border Color',
              'desc' => 'Enter border color',
              'id' => $prefix . 'bordercolor',
              'type' => 'colorpicker',
              'std' => '#CCCCCC',
          ),
          array(
              'name' => 'Transition Effect',
              'desc' => 'Select transition effect',
              'id' => $prefix . 'transition',
              'type' => 'select',
              'options' => array(
                  array( 'name' => 'Cube', 'value' => 'cube', ),
                  array( 'name' => 'Block', 'value' => 'block', ),
                  array( 'name' => 'Horizontal', 'value' => 'horizontal', ),
                  array( 'name' => 'Show Bars', 'value' => 'showBars', ),
                  array( 'name' => 'Fade', 'value' => 'fade', ),
                  array( 'name' => 'Blind', 'value' => 'blind', ),
                  array( 'name' => 'Random', 'value' => 'random', ),
                  ),
          ),
      )
  );
  
  $meta_boxes[] = array(
      'id' => 'mk_shortcode_metabox',
      'title' => 'MK Slider Shortcode',
      'pages' => array('mkslider',), // Post type
      'context' => 'side',
      'priority' => 'low',
      'show_names' => false, // Show field names on the left
      'fields' => array(
          array(
              'name' => '',
              'desc' => '',
              'id' => $prefix . 'test_text',
              'type' => 'mk_shortcode',
          ),
      )
  );

  // Add other metaboxes as needed

  return $meta_boxes;
}

add_action('init', 'mk_initialize_mk_meta_boxes', 9999);

/**
 * Initialize the metabox class.
 */
function mk_initialize_mk_meta_boxes() {

  if (!class_exists('mk_Meta_Box'))
    require_once 'init.php';
}