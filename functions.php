<?php
/**
 * This is the template for the custom functionality
 *
 * @package viridi
 * @since viridi 0.1
 */

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

add_editor_style( 'css/custom-editor-style.css' );

if ( ! isset( $content_width ) ) :
	$content_width = 900;
endif;

add_action( 'after_setup_theme', 'viridi_theme_review_setup' );
function viridi_theme_review_setup(){
    load_theme_textdomain( 'viridi', get_template_directory() . '/languages' );
}

require get_template_directory() . '/inc/customize-header.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/register-menus.php';
require get_template_directory() . '/inc/register-sidebar.php';
require get_template_directory() . '/inc/custom-functions.php';
