<?php
/**
 * The template for displaying the header
 *
 * @package viridi
 * @since viridi 0,1
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'the_blog_section' ); ?>>
	<div id="page" class="hfeed site">
		<div id="content" class="site-content">
			<div class="outterContainer container-fluid">
				<header class="mainHeader">
					<div class="container">
						<div class="row">
							<?php
							$logo = get_custom_logo();
							if ( isset( $logo ) ) :
							?>
							<div class="col-lg-1 col-md-2 col-12 mt-4">
							</div>
							<div class="col-lg-2 col-12">
									<h1><a href="<?php echo esc_attr( get_home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							</div>
							<?php
								$logo = get_custom_logo();
							else :
							?>
							</div>
							<div class="col-lg-3 col-12">
									<h1><a href="<?php echo esc_attr( get_home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							</div>
							<?php
							endif;
							?>
							<div class="col-lg-9 col-12 col-md-9">
								<?php wp_nav_menu( array(
									'theme_location' => 'primary',
								) ); ?>
							</div>
						</div>
					</div>
				</header>
			</div>
