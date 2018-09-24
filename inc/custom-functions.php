<?php
/**
 * Includes all the custom function to make the front-end work and the theme support functions.
 *
 * @package viridi
 * @since viridi 0.1
 **/

?>
<?php

/**
 *
 * Summary
 *
 * Getting the content of a specific post outside of the loop.
 *
 * @since 1.0.0
 **/
function the_content_outside_of_loop() {

	global $wp_query;
	$post = $wp_query->post;
	$page_id = $post->ID;
	$page_object = get_page( $page_id );
	$page_content = $page_object->post_content;
	$page_content = apply_filters( 'the_content', $page_content );
	echo $page_content;
}
