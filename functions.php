<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});
add_theme_support( 'align-wide' );
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'ct-main-styles','parent-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 110 );

function misha_sources( $sources, $size_array, $image_src, $image_meta, $attachment_id ){
	/*
	 * Your variables here
	 */
	$image_size_name = 'square500'; // add_image_size('square500', 500, 500, true);
	$breakpoint = 500;
 
	$upload_dir = wp_upload_dir();
 
	$img_url = $upload_dir['baseurl'] . '/' . str_replace( basename( $image_meta['file'] ), $image_meta['sizes'][$image_size_name]['file'], $image_meta['file'] );
 
	$sources[ $breakpoint ] = array(
		'url'        => $img_url,
		'descriptor' => 'w',
		'value'      => $breakpoint,
	);
	return $sources;
}
 
add_filter('wp_calculate_image_srcset','misha_sources',10,5);

function mytheme_add_editor_styles() {
    add_editor_style( 'style-editor.css' );
}
add_action( 'admin_init', 'Luckan-blocksy-child_add_editor_styles' );



// END ENQUEUE PARENT ACTION
