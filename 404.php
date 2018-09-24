<?php
/**
 * This is the 404 page
 *
 * @package viridi
 * @since viridi 0.1
 */

?>
<?php wp_head(); ?>
<div class="container-fluid text-center">
	<div class="page-404">
		<h1>404 error</h1>
		<p><?php echo esc_html( __( 'This page doesnt exist :( but you can come back again!' , 'viridi' ) ); ?></p>
		<a href="<?php echo esc_attr( get_home_url() ); ?>">Home</a>
	</div>
</div>
 
