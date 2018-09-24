<?php
/**
 * This is the basic content template
 *
 * @package viridi
 * @since viridi 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	?>
	<div class="container-fluid">
		<a href="<?php the_permalink() ?>">
		<div class="content-cards">
			<div class="post-thumnbail background-image" style="background-image:url('<?php echo esc_html( get_the_post_thumbnail_url() ); ?>')">

			</div>
			<div class="entry-content">
				<header class="entry-header">
					<h3><?php the_title(); ?></h3>
					<p class="date"><?php the_date(); ?></p>
					<p class="the_main_excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
				</header><!-- .entry-header -->
				<footer class="entry-footer">
					<p><?php the_author(); ?></p>
				</footer><!-- .entry-footer -->
			</div><!-- .entry-content -->
			</a>
		</div>
	</div>

</article><!-- #post-## -->
