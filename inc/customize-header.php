<?php
/**
 * This is the template for the custom header
 *
 * @package viridi
 * @since viridi 0.1
 */

?>

<?php
add_theme_support( 'customize-selective-refresh-widgets' );



$defaults = array(
	'default-image'          => '',
	'width'                  => '1920px',
	'height'                 => '800px',
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '#fff',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header' , $defaults );


/**
 *
 * Summary
 *
 * Creates the custom logo
 *
 * @package viridi
 * @since 0.1
 **/
function viridi_load_custom_logo() {
		$defaults = array(
				'height'      => 200,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'viridi_load_custom_logo' );


/**
 *
 * Summary
 *
 * Creates the settings , controls and sections of the customizer menu.
 *
 * @param Object $wp_customize the object neccesary for the customizeation.
 *
 * @package viridi
 * @since 0.1
 **/
function viridi_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'viridi[h1color]' , array(
		 'default' 			  => '#3dd07d',
		 'capability'   	  => 'edit_theme_options',
		 'transport'			  => 'refresh',
		 'type' 		 				=> 'option',
		 'sanitize_callback' => 'esc_attr',
	) );
	$wp_customize->add_setting( 'viridi[headerContainer]' , array(
		 'default'   => 'container-fluid',
		 'capability'     => 'edit_theme_options',
		 'transport' => 'refresh',
		 'type' 		 => 'option',
		 'sanitize_callback' => 'esc_attr',
	) );
	$wp_customize->add_section( 'viridi_new_section_name' , array(
		'title'      => __( 'Visible Section Name', 'viridi' ),
		'priority'   => 30,
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_colors', array(
			'label'      => __( 'Header Color', 'viridi' ),
			'section'    => 'viridi_new_section_name',
			'settings'   => 'viridi[h1color]',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_container', array(
		'label'      => __( 'Header container', 'viridi' ),
		'section'    => 'viridi_new_section_name',
		'settings'   => 'viridi[headerContainer]',
		'type'			 => 'range',
		'input_attrs' => array(
			'min'   => 60,
			'max'   => 100,
			'step'  => 1,
			'class' => 'test-class test',
			'style' => 'color: #0a0',
		),
	) ) );

}
add_action( 'customize_register', 'viridi_customize_register' );

/**
 *
 * Summary
 *
 * The function called to change the css depending on the action taken.
 *
 * @package viridi
 * @since 0.1
 **/
function mytheme_customize_css() {

	/**
	 *
	 * Summary
	 *
	 * Changes the background color of the main header.
	 *
	 * @package viridi
	 * @since 0.1
	 **/
	function check_the_h1_color() {
		?>
		<style type="text/css">
		<?php
		if ( get_option( 'viridi' )['h1color'] ) :
			?>
			.mainHeader { background-color: <?php echo esc_html( get_option( 'viridi' )['h1color'] ); ?> !important; }
		</style>
		<?php
		else :
			?>
			<style type="text/css">
				.mainHeader { background-color:#3dd07d !important; }
			</style>
			<?php
		endif;
	}

	check_the_h1_color();

	/**
	 *
	 * Summary
	 *
	 * Changes the container width.
	 *
	 * @package viridi
	 * @since 0.1
	 **/
	function check_the_header_container() {
		$header_container = (int) get_option( 'viridi' )['headerContainer'];
		$inner_container = (int) 80 + ( (100 - $header_container ) );
		?>
		<style type="text/css">
			.outterContainer{
				width:<?php echo (int) $header_container; ?>%;
			}
			.blog-main .outterContainerMain{
				width: <?php echo (int) $inner_container ?>%;
			}
			.page-template-default .outterContainerMain{
				width: <?php echo (int) $inner_container ?>%;
			}
		</style>
		<?php

	}

	check_the_header_container();

}
add_action( 'wp_head', 'mytheme_customize_css' );
