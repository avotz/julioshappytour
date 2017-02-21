<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package HappyTour
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function happytour_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'happytour_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function happytour_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'happytour_pingback_header' );

function add_menuclass($ulclass) {
	return preg_replace('/rel="handle"/', 'class="handle"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');


function happytour_custom_nav_attributes ( $atts, $item, $args ) {
    if(isset($atts['rel']))
    {
    	
	    $atts['data-tour'] = $atts['rel'];
	   
    }
    
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'happytour_custom_nav_attributes', 10, 3 );