<?php
/**
* Plugin Name: Stocks game
* Plugin URI: http://gamesimade.atwebpages.com/
* Description:  A game made by gamesimade.atwebpages.com
* Version: 4.0
* Author: ycentergames@gmail.com
**/

// Add Shortcode
function embed_Stocks_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'src' => 'http://gamesimade.atwebpages.com/stocks%20game%20v4.html',
			'width' => '100%',
			'height' => '1000px',
		),
		$atts,
		'embed_Stocks'
	);

	// Return custom embed code
	return '<embed 
	         src="' . $atts['src'] . '"
	         width="' . $atts['width'] . '"
	         height="' . $atts['height'] . '"
                 >';

wp_kses($atts);

}
add_shortcode( 'embed_Stocks', 'embed_Stocks_shortcode' );

?>