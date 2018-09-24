<?php
/**
 *
 * This is the blog file
 *
 * @package viridi
 * @since 0.1
 */

 get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main blog-main" role="main">
		<div class="outterContainer container-fluid">
			<div class="mainImage">
				<?php
				if ( get_header_image() !== '' ) :
				?>
				<div class="background-image" style="background-image:url('<?php header_image(); ?>');" >
				</div>
				<?php
				endif;
				?>
			</div>
			<div class="outterContainerMain container-fluid">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-12">
						<div class="posts-container">

							<h3 class="latest-posts">LATEST</h3>
						<?php if ( have_posts() ) : ?>

							<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h3 class="page-title screen-reader-text">LATEST</h3>
							</header>
							<?php endif; ?>

							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'templates/front-page/content', get_post_format() );


							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'viridi' ),
								'next_text'          => __( 'Next page', 'viridi' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'viridi' ) . ' </span>',
							) );


						else :
							get_template_part( 'content', 'none' );

						endif;
						?>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-12">
						<div class="sidebar-area">
								<?php get_sidebar(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

	<?php
	get_footer();
