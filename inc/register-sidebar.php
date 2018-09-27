<?php
/**
 * This is the template for registering sidebars
 *
 * @package viridi
 * @since viridi 0.1
 */

?>

<?php

/**
 *
 * Summary
 *
 * Register the sidebars.
 *
 * @package viridi
 * @since 0.1
 **/
function viridi_wpdocs_theme_slug_widgets_init() {

		register_sidebar( array(
				'name'          => __( 'Blog sidebar', 'viridi' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Widgets in this area will be shown on all posts in the blog area.', 'viridi' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );

		register_sidebar( array(
				'name'          => __( 'Footer sidebar', 'viridi' ),
				'id'            => 'sidebar-footer-1',
				'description'   => __( 'Widgets in this area will be shown on all posts in the footer area.', 'viridi' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );

		register_sidebar( array(
				'name'          => __( 'Footer 2 sidebar', 'viridi' ),
				'id'            => 'sidebar-footer-2',
				'description'   => __( 'Widgets in this area will be shown on all posts in the footer area.', 'viridi' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );

		register_sidebar( array(
				'name'          => __( 'Footer 3 sidebar', 'viridi' ),
				'id'            => 'sidebar-footer-3',
				'description'   => __( 'Widgets in this area will be shown on all posts in the footer area.', 'viridi' ),
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h2 class="widgettitle">',
				'after_title'   => '</h2>',
		) );

}

add_action( 'widgets_init', 'viridi_wpdocs_theme_slug_widgets_init' );
