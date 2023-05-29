<?php
/**
 * ACF Theme Options.
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;

/**
 * Class ACF Options.
 */
class ACF_Option {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
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
		 * Actions
		 */
		if( function_exists('acf_add_options_page') ) {
	
            acf_add_options_page(array(
                'page_title' 	=> esc_html__( 'Theme General Settings', 'lofts-theme' ), 
                'menu_title'	=> esc_html__( 'Theme Settings', 'lofts-theme'),
                'menu_slug' 	=> esc_html__( 'theme-general-settings', 'lofts-theme' ),
                'capability'	=> esc_html__( 'edit_posts', 'lofts-theme' ),
                'redirect'		=> false
            ));
        }
	}
}