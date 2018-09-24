<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package viridi
 * @since viridi 0.1
 */

get_header(); ?>

<div id="primary" class="content-area single">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid outterContainer">
			<div class="container-fluid content-wrapper">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-12 col-12">
						<div class="content-wrapper">
							<?php
							$post_humbnail = get_the_post_thumbnail_url();
							if ( isset( $post_humbnail ) ) :

							?>
							<div class="single-featured-image background-image" style="background-image:url('<?php echo esc_attr( $post_humbnail ); ?>')">

							</div>
							<?php endif; ?>
							<div class="single-main-content">
									<h3><?php the_title(); ?></h3>
									<p><?php the_category( ' ' ); ?></p>
								<p><?php the_content_outside_of_loop(); ?></p>
								<p><?php the_tags( null , ' ',null ); ?></p></br>
							</div>
							<div class="single-pagination">
								<?php
								the_post_navigation( array(
									'next_text' => '<span class="meta-nav" style="float:right;" aria-hidden="true">' . __( 'Next post >>', 'viridi' ) . '</span> ',
									'prev_text' => '<span class="meta-nav" style="float:left;" aria-hidden="true">' . __( '<< Previous post', 'viridi' ) . '</span> ',
								) );
								?>
							</div>
							<div class="comment-section container">
								<?php
								if ( comments_open( get_the_ID() ) ) :
									comments_template();
								endif;
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-12">
						<div class="sidebar-area-single">
								<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
