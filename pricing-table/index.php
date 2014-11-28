<?php 
/*
		Plugin Name: Pricing Table
		Plugin URI: http://www.sandthemes.com
		Description: Plugin for show pricing table
		Author: Tu Nguyen
		Version: 0.5
		Author URI: http://www.sandthemes.com
*/
/* Add Style to site and custom style */
function prefix_add_stylesheet() {
	// Respects SSL, Style.css is relative to the current file
	wp_register_style( 'pricing-style', plugins_url('style.css', __FILE__) );
	wp_enqueue_style( 'pricing-style' );
}
add_action( 'wp_enqueue_scripts', 'prefix_add_stylesheet' );

function show_pricing(){
  ?>
    <div class="plan">
      <h2 class="plan-title">Solo</h2>
      <img src="<?php echo plugins_url( 'img/Pricing_01.png' , __FILE__ ); ?>" alt="" width="249" height="196">
      <ul class="plan-features">
        <li>Includes 50 transactions<sup>INFO<sup></li>
        <li>Generally suitable for businesses with 0-1 employees</li>
      </ul>
      <p class="plan-price">$150</p>
      <a href="index.html" class="plan-button">Sign Up!</a>
    </div>
    <div class="plan">
      <h2 class="plan-title">Growing</h2>
      <img src="<?php echo plugins_url( 'img/Pricing_03.png' , __FILE__ ); ?>" alt="" width="249" height="196">
      <ul class="plan-features">
        <li>Includes 100 transactions<sup>INFO<sup></li>
        <li>Generally suitable for businesses with 1-3 employees</li>
      </ul>
      <p class="plan-price">$300</p>
      <a href="index.html" class="plan-button">Sign Up!</a>
    </div>
    <div class="plan">
      <h2 class="plan-title">Blast Off</h2>
      <img src="<?php echo plugins_url( 'img/Pricing_05.png' , __FILE__ ); ?>" alt="" width="249" height="196">
      <ul class="plan-features">
        <li>Includes 175 transactions<sup>INFO<sup></li>
        <li>Generally suitable for businesses with 3-10 employees</li>
      </ul>
      <p class="plan-price">$500</p>
      <a href="index.html" class="plan-button">Sign Up!</a>
    </div>
  <?php
}
add_shortcode( 'pricing', 'show_pricing' );

function price_plan($attr, $content = null) {
  extract(shortcode_atts(array(
    'title'  => 'Solo',
    'price' => '150',
    'url' => 'index.html',
    'button_text' => 'Sign Up!',
    'num' => '1'
  ), $attr));
  return '<div class="plan">
      <h2 class="plan-title">'.esc_attr($title).'</h2>
      <img src="'.plugins_url( 'img/Pricing_0'.esc_attr($num).'.png' , __FILE__ ).'" alt="" width="249" height="196">
      <ul class="plan-features">'.do_shortcode( $content ).'</ul>
      <p class="plan-price">'.$price.'</p>
      <a href="'.esc_attr($url).'" class="plan-button">'.esc_attr($button_text).'</a>
    </div>';
}
add_shortcode( 'plan', 'price_plan' );

function plans_shortcode( $atts, $content = null ) {
  $a = shortcode_atts( array(
    'class' => '',
  ), $atts );

  return '<div class="plans">' .do_shortcode($content) . '</div>';
}
add_shortcode( 'plans', 'plans_shortcode' );

	
?>
