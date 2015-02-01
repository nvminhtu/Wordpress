<?php
class SandLocation{
	
    public function __construct(){
        add_action('wp_enqueue_scripts','sand_plugin_scripts');
        add_action('wp_enqueue_scripts','sand_plugin_styles');
        add_shortcode('sand_location','sand_show_location');

    }	
    
    /* Add Script to site */
    public function sand_plugin_scripts(){
        wp_register_script('map_hilight_script',SAND_LOCATION_PLUGIN_URL.'js/maphilight.js');
        wp_enqueue_script('map_hilight_script');

    }

    /* Add Style to site and custom style */
    public function sand_plugin_styles() {
        wp_register_style( 'map_hilight', SAND_LOCATION_PLUGIN_URL.'css/maphilight.css' );
        wp_enqueue_style( 'map_hilight' );
    }
    
    public function sand_show_location() {
        $content = '<div class="map_location">
    <div class="area_list">
      <h3>OUR LOCATIONS</h3>
      <ul>
        <li>
          <a id="seattle" href="#">Seattle</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
        <li>
          <a id="portland" href="#">Portland</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
        <li>
          <a id="gulf_region" href="#">Gulf Region</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
        <li>
          <a id="los_angeles" href="#">Los Angeles, CA</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
      </ul>
      <ul>
        <li>
          <a id="san_francisco" href="#">San Francisco, CA</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
        <li>
          <a id="newyork" href="#">New York, NY</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
        <li>
          <a id="dutch_harbor" href="#">Dutch Harbor, AK</a>
          <div class="area_info">
            <p>239 Lakeside Dr.<br>
            Channelview, TX 77530-4417<br>
            General Manager: Bill Taylor<br>
            Phone: (281) 860-0209<br>
            FAX: (281) 657-6231</p>
          <!-- /.area_info --></div>
        </li>
      </ul>
    <!-- /.area_list --></div>
    <div class="map_area">
      <img class="map" src="'.SAND_LOCATION_PLUGIN_URL.'/img/map.png" usemap="#usa">
      <div id="overlay"></div>
  <!-- /.map_area --></div>
  <!-- /.map_location --></div>';
        return $content;
    }
}

