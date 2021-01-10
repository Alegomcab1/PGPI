<?php
/**
 * Customize API: WP_Customize_Color_Control class
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
 */

/**
 * Customize Color Control class.
 *
<<<<<<< HEAD
 * @since Twenty Twenty-One 1.0
=======
 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
 *
 * @see WP_Customize_Control
 */
class Twenty_Twenty_One_Customize_Color_Control extends WP_Customize_Color_Control {
	/**
	 * The control type.
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-color';

	/**
	 * Colorpicker palette
	 *
	 * @access public
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
	 *
	 * @var array
	 */
	public $palette;

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @access public
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
	 *
	 * @return void
	 */
	public function enqueue() {
		parent::enqueue();

		// Enqueue the script.
		wp_enqueue_script(
			'twentytwentyone-control-color',
			get_theme_file_uri( 'assets/js/palette-colorpicker.js' ),
			array( 'customize-controls', 'jquery', 'customize-base', 'wp-color-picker' ),
			(string) filemtime( get_theme_file_path( 'assets/js/palette-colorpicker.js' ) ),
			false
		);
	}

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @access public
	 *
<<<<<<< HEAD
	 * @since Twenty Twenty-One 1.0
=======
	 * @since 1.0.0
>>>>>>> d2abd2740ea4aab8917df17b6b75b072dcae6a69
	 *
	 * @uses WP_Customize_Control::to_json()
	 *
	 * @return void
	 */
	public function to_json() {
		parent::to_json();
		$this->json['palette'] = $this->palette;
	}
}
