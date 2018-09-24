<?php
/**
 * This is the template for enqueue
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
 * Register the admin javascript and css files.
 *
 * @package viridi
 * @since 0.1
 **/
function viridi_enqueue_files() {

	wp_register_style( 'bootstrap' , get_template_directory_uri() . '/css/bootstrap.css' , '3.5' , 'all' );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'generalCss' , get_template_directory_uri() . '/css/viridi.css' , '0.1' , 'all' );
	wp_enqueue_style( 'generalCss' );

	if ( is_singular() ) :
		wp_enqueue_script( 'comment-reply' );
	endif;
}

add_action( 'wp_enqueue_scripts' , 'viridi_enqueue_files' );
