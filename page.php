<?php
/**
 * The template for displaying pages
 *
 * @package viridi
 * @since viridi 0.1
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="outterContainer container-fluid">

			<div class="mainImage">
				<?php
				if ( get_header_image() !== '' ) :
				?>
				<img class="background-image" src="<?php  header_image() ?>" id="header_image" />
				<?php
				endif;
				?>
			</div>
			<div class="outterContainerMain container-fluid">
				<div class="row">
					<div class="col-lg-9 col-md-8 col-sm-12 col-12">
						<div class="page-container">
							<h2><?php the_title(); ?></h2>
							<?php
							$background_img = get_the_post_thumbnail_url();
							if ( isset( $background_img ) ) :
							?>
							<div class="featured-image background-image" style="background-image:url('<?php echo esc_attr( $background_img ); ?>')">

							</div>
							<?php
							endif;
							?>
							<p><?php viridi_the_content_outside_of_loop(); ?></p>
						</div>
						<div class="link-pages">
								<?php
								$defaults = array(
									'before'           => '<p>' . __( 'Pages:', 'viridi' ),
									'after'            => '</p>',
									'link_before'      => '',
									'link_after'       => '',
									'next_or_number'   => 'number',
									'separator'        => ' ',
									'nextpagelink'     => __( 'Next page', 'viridi' ),
									'previouspagelink' => __( 'Previous page', 'viridi' ),
									'pagelink'         => '%',
									'echo'             => 1,
								);

								wp_link_pages( $defaults );
								?>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-12 col-12 ">
						<div class="sidebar-area">
								<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
