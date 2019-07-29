<?php
/**
 * Custom header implementation
 */

function safha_one_page_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'safha_one_page_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1310,
		'height'                 => 90,
		'wp-head-callback'       => 'safha_one_page_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'safha_one_page_custom_header_setup' );

if ( ! function_exists( 'safha_one_page_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see safha_one_page_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'safha_one_page_header_style' );
function safha_one_page_header_style() {

	if ( get_header_image() ) :
	$custom_css = "
        #masthead .main-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'safha-one-page-basic-style', $custom_css );
	endif;
}
endif;