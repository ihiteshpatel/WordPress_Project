<?php
/**
 * Register Custom Taxonomies
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;

/**
 * Class for register taxonomies.
 */
class Register_Taxonomies {
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
		add_action( 'init', array( $this, 'register_bedroom_type_taxonomy' ) );

	}

	/**
	 * Register Taxonomy Bedroom Type.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_bedroom_type_taxonomy() {

		$labels = array(
			'name'              => _x( 'Bedroom Type', 'taxonomy general name', 'lofts-theme' ),
			'singular_name'     => _x( 'Bedroom Type', 'taxonomy singular name', 'lofts-theme' ),
			'search_items'      => __( 'Search Bedroom Types', 'lofts-theme' ),
			'all_items'         => __( 'All Bedroom Types', 'lofts-theme' ),
			'edit_item'         => __( 'Edit Bedroom Type', 'lofts-theme' ),
			'update_item'       => __( 'Update Bedroom Type', 'lofts-theme' ),
			'add_new_item'      => __( 'Add New Bedroom Type', 'lofts-theme' ),
			'new_item_name'     => __( 'New Bedroom Type Name', 'lofts-theme' ),
			'menu_name'         => __( 'Bedroom Type', 'lofts-theme' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => __( 'Bedroom Type', 'lofts-theme' ),
			'hierarchical'       => false,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		);
		register_taxonomy( 'bedroom-type', array( 'floorplan' ), $args );

	}
}
