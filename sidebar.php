<?php
/**
 * This is the basic sidebar menu
 *
 * @package viridi
 * @since viridi 0.1
 */

?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="widget-area" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>
