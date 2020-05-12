<?php
/**
 * Class to include Design customize options.
 *
 * Class ColorMag_Customize_Design_Options
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class to include Design customize option.
 *
 * Class ColorMag_Customize_Design_Options
 */
class ColorMag_Customize_Design_Options extends ColorMag_Customize_Base_Option {

	/**
	 * Include customize options.
	 *
	 * @param array                 $options      Customize options provided via the theme.
	 * @param \WP_Customize_Manager $wp_customize Theme Customizer object.
	 *
	 * @return mixed|void Customizer options for registering panels, sections as well as controls.
	 */
	public function customizer_options( $options, $wp_customize ) {

		$configs = array(

			// Default layout for single posts page only option.
			array(
				'name'      => 'colormag_default_single_posts_layout',
				'default'   => 'right_sidebar',
				'type'      => 'control',
				'control'   => 'colormag-radio-image',
				'label'     => esc_html__( 'Select default layout for single posts. This layout will be reflected in all single posts unless unique layout is set for specific post', 'colormag' ),
				'section'   => 'colormag_default_single_posts_layout_setting',
				'choices'   => array(
					'right_sidebar'               => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/right-sidebar.png',
					),
					'left_sidebar'                => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/left-sidebar.png',
					),
					'no_sidebar_full_width'       => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/no-sidebar-full-width-layout.png',
					),
					'no_sidebar_content_centered' => array(
						'label' => '',
						'url'   => COLORMAG_ADMIN_IMAGES_URL . '/no-sidebar-content-centered-layout.png',
					),
				),
				'image_col' => 2,
			),

			// Primary color option.
			array(
				'name'      => 'colormag_primary_color',
				'default'   => '#289dcc',
				'type'      => 'control',
				'control'   => 'colormag-color',
				'label'     => esc_html__( 'This will reflect in links, buttons and many others. Choose a color to match your site', 'colormag' ),
				'section'   => 'colormag_primary_color_setting',
				'transport' => 'postMessage',
			),

		);

		$options = array_merge( $options, $configs );

		return $options;

	}

}

return new ColorMag_Customize_Design_Options();
