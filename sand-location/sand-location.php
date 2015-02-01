<?php
/*
 Plugin Name: Sand Location
Plugin URI: http://www.sandthemes.com
Description: Location map
Author: Tu Nguyen
Version: 1.0
Author URI: http://www.sandthemes.com
*/

define('SAND_LOCATION_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SAND_LOCATION_IMAGES_URL', SAND_LOCATION_PLUGIN_URL . '/img');

define('SAND_LOCATION_PLUGIN_DIR', plugin_dir_path(__FILE__));

add_action('wp_enqueue_scripts','sand_plugin_scripts');
add_action('wp_enqueue_scripts','sand_plugin_styles');
add_shortcode('sand_location','sand_show_location');
remove_filter( 'the_content', 'wpautop' );

 /* Add Script to site */
function sand_plugin_scripts(){
    wp_register_script('map_hilight_script',SAND_LOCATION_PLUGIN_URL.'js/maphilight.js',array( 'jquery' ));
    wp_enqueue_script('map_hilight_script');

}

/* Add Style to site and custom style */
function sand_plugin_styles() {
        wp_register_style( 'map_hilight', SAND_LOCATION_PLUGIN_URL.'css/maphilight.css' );
        wp_enqueue_style( 'map_hilight' );
    }

/* Show Location */
function sand_show_location($args, $content) {
    $content = '<div class="map_location">
    <div class="area_list">'.$content.'<!-- /.area_list --></div>
    <div class="map_area">
      <img class="map" src="'.SAND_LOCATION_PLUGIN_URL.'img/map.png" usemap="#usa">
      <div id="overlay"></div>
    <!-- /.map_area --></div>
    <!-- /.map_location --></div>';
    return $content;
 }