<?php
/**
 * This is the footer template
 *
 * @package viridi
 * @since viridi 0.1
 */

?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="widget-footer">
		<div class="outterContainer container-fluid">
			<div class="row colored-row">
			<?php
			get_sidebar( 'footer-1'	);
			?>
			</div>
		</div>
	</div>
	</footer><!-- .site-footer -->
	<div class="outterContainer container-fluid">
		<div class="trademark text-center">
			<p><?php echo esc_html( 'Developed and created by thanasis mpalatsoukas 2018 all rights reserved' , 'viridi' ) ?></p>
		</div>
	</div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
