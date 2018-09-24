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
			<p>Developer and created by <b style="font-weight:600;">thanasis mpalatsoukas</b> 2018 all rights reserved</p>
		</div>
	</div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
