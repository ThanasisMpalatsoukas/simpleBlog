<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package viridi
 * @since viridi 0.3
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php

			get_template_part( 'templates/single/content', get_post_format() );

		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
