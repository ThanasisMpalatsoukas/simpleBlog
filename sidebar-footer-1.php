<?php
/**
 * This is the footer sidebar menu
 *
 * @package viridi
 * @since viridi 0.1
 */

?>
<?php
$counter = 0;

if ( is_active_sidebar( 'sidebar-footer-1' ) ) :
	$counter++;
endif;
if ( is_active_sidebar( 'sidebar-footer-2' ) ) :
	$counter++;
endif;
if ( is_active_sidebar( 'sidebar-footer-3' ) ) :
	$counter++;
endif;
if ( 1 === $counter ) {
	$class = 'col-lg-12';
} elseif ( 2 === $counter ) {
	$class = 'col-lg-6';
} elseif ( 3 === $counter ) {
	$class = 'col-lg-4';
} else {
	$class = '';
}

if ( '' !== $class ) :
?>
<?php
if ( is_active_sidebar( 'sidebar-footer-1' ) ) :
	?>
	<div class="<?php echo esc_attr( $class ); ?> chooseWidth-1">
		<div class="footer-widget footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
		</div>
	</div>
	<?php
	endif;
if ( is_active_sidebar( 'sidebar-footer-2' ) ) :
	?>
	<div class="<?php echo esc_attr( $class ); ?> chooseWidth-2">
		<div class="footer-widget footer-widget-2">
			<?php
				dynamic_sidebar( 'sidebar-footer-2' );
			?>
		</div>
	</div>
	<?php
	endif;
if ( is_active_sidebar( 'sidebar-footer-3' ) ) :
	?>
	<div class="<?php echo esc_attr( $class ); ?> chooseWidth-3">
		<div class="footer-widget footer-widget-3">
			<?php
				dynamic_sidebar( 'sidebar-footer-3' );
			?>
		</div>
	</div>
	<?php
	endif;
endif;
