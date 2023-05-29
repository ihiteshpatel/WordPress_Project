<?php
/**
 * Register Menus.
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;

/**
 * Class Menus
 */
class Menus {
	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', array( $this, 'register_menus' ) );
	}

	/**
	 * Register Menus
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'headerTopMenu' => esc_html__( 'Header Top Menu', 'lofts-theme' ),
                'headerMenu' => esc_html__( 'Header Menu', 'lofts-theme' ),
                'footerMenu1' => esc_html__( 'Footer Menu 1', 'lofts-theme' ),
                'footerMenu2' => esc_html__( 'Footer Menu 2', 'lofts-theme' ),
			)
		);

	}
}
