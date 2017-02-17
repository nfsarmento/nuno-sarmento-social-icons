<?php defined('ABSPATH') or die();

function tend_tdsocialicons_print_css() {

	$tend_tdsocialicons_class_options = get_option( 'tend_tdsocialicons_class_option_name' ); // Array of All Options
	$colorpicker_15 = $tend_tdsocialicons_class_options['colorpicker_15']; // Main Color Background
	$colorpicker_16 = $tend_tdsocialicons_class_options['colorpicker_16']; // Icon - Outer colour (hover)
	$colorpicker_17 = $tend_tdsocialicons_class_options['colorpicker_17']; // Icon - Inner colour
	$colorpicker_18 = $tend_tdsocialicons_class_options['colorpicker_18']; // Icon - Outer Colour
	$colorpicker_19 = $tend_tdsocialicons_class_options['colorpicker_19']; // Main Color Background (hover)
	$colorpicker_20 = $tend_tdsocialicons_class_options['colorpicker_20']; // Icon - Inner colour (hover)

	print '

	<style>
		  .tend_tdsocialicons_social ul li {
		    background: '. $colorpicker_15 .';
		  }
			.tend_tdsocialicons_social ul li:hover i {
				color: '. $colorpicker_20 .';
				background: '. $colorpicker_16 .';
			}
			.tend_tdsocialicons_social ul li i {
				color: '. $colorpicker_17 .';
				background: '. $colorpicker_18 .';
			}
			.nuno-sarmento-socialicons-nav__bar .tend_tdsocialicons_social ul li:hover {
			  background: '. $colorpicker_19 .';
			}
 	</style>

 ';

}

add_action('wp_head', 'tend_tdsocialicons_print_css', 100);
