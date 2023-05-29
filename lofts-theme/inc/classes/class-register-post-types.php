<?php
/**
 * Register Post Types
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;

/**
 * Class for register post types.
 */
class Register_Post_Types {
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
		add_action( 'init', array( $this, 'register_faq_cpt' ) );
        add_action( 'init', array( $this, 'register_gallery_cpt' ) );
        add_action( 'init', array( $this, 'register_floorplan_cpt' ) );

	}

	/**
	 * Register Custom Post Type FAQs.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_faq_cpt() {

		$labels = array(
            'name' => _x( 'FAQs', 'Post Type General Name', 'lofts-theme' ),
            'singular_name' => _x( 'FAQ', 'Post Type Singular Name', 'lofts-theme' ),
            'menu_name' => _x('FAQs', 'Admin Menu text', 'lofts-theme'),
            'name_admin_bar' => _x( 'FAQs', 'Add New on Toolbar', 'lofts-theme' ),
            'all_items' => __('All FAQs', 'lofts-theme'),
            'view_item' => __('View FAQ', 'lofts-theme'),
            'add_new_item' => __('Add New FAQ', 'lofts-theme'),
            'add_new' => __('Add New', 'lofts-theme'),
            'edit_item' => __('Edit FAQ', 'lofts-theme'),
            'update_item' => __('Update FAQ', 'lofts-theme'),
            'search_items' => __('Search FAQ', 'lofts-theme'),
            'not_found' => __('FAQ Not Found', 'lofts-theme'),
            'not_found_in_trash' => __('Not Found in Trash', 'lofts-theme')
        );
		$args   = array(
			'label'               => __( 'FAQs', 'lofts-theme' ),
			'description'         => __( 'FAQs', 'lofts-theme' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-editor-help',
			'supports'            => array(
				'title',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			),
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
            'rewrite'             => array( 'slug' => 'faqs' )
		);

		register_post_type( 'faqs', $args );

	}

    /**
	 * Register Custom Post Type Gallery.
	 *
	 * @return void
	 * @since 1.0.0
	 */
    public function register_gallery_cpt() {

		$labels = array(
            'name' => _x( 'Gallery', 'Post Type General Name', 'lofts-theme' ),
            'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'lofts-theme' ),
            'menu_name' => _x('Gallery', 'Admin Menu text', 'lofts-theme'),
            'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'lofts-theme' ),
            'all_items' => __('All Images', 'lofts-theme'),
            'view_item' => __('View Gallery', 'lofts-theme'),
            'add_new_item' => __('Add New Image', 'lofts-theme'),
            'add_new' => __('Add New', 'lofts-theme'),
            'edit_item' => __('Edit Gallery', 'lofts-theme'),
            'update_item' => __('Update Gallery', 'lofts-theme'),
            'search_items' => __('Search Gallery', 'lofts-theme'),
            'not_found' => __('Gallery Not Found', 'lofts-theme'),
            'not_found_in_trash' => __('Not Found in Trash', 'lofts-theme')
        );
		$args   = array(
			'label'               => __( 'Gallery', 'lofts-theme' ),
			'description'         => __( 'Gallery', 'lofts-theme' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-format-gallery',
			'supports'            => array(
				'title',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			),
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
            'rewrite'             => array( 'slug' => 'gallery' )
		);

        register_post_type( 'gallery', $args );
	}

    /**
	 * Register Custom Post Type Floorplan.
	 *
	 * @return void
	 * @since 1.0.0
	 */
    public function register_floorplan_cpt() {

		$labels = array(
            'name' => _x( 'Floorplan', 'Post Type General Name', 'lofts-theme' ),
            'singular_name' => _x( 'Floorplan', 'Post Type Singular Name', 'lofts-theme' ),
            'menu_name' => _x('Floorplan', 'Admin Menu text', 'lofts-theme'),
            'name_admin_bar' => _x( 'Floorplan', 'Add New on Toolbar', 'lofts-theme' ),
            'all_items' => __('All Floorplans', 'lofts-theme'),
            'view_item' => __('View Floorplan', 'lofts-theme'),
            'add_new_item' => __('Add New Floorplan', 'lofts-theme'),
            'add_new' => __('Add New', 'lofts-theme'),
            'edit_item' => __('Edit Floorplan', 'lofts-theme'),
            'update_item' => __('Update Floorplan', 'lofts-theme'),
            'search_items' => __('Search Floorplan', 'lofts-theme'),
            'not_found' => __('Floorplan Not Found', 'lofts-theme'),
            'not_found_in_trash' => __('Not Found in Trash', 'lofts-theme')
        );
		$args   = array(
			'label'               => __( 'Floorplan', 'lofts-theme' ),
			'description'         => __( 'Floorplan', 'lofts-theme' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-layout',
			'supports'            => array(
				'title',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			),
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
            'rewrite'             => array( 'slug' => 'floorplan' )
		);

		register_post_type( 'floorplan', $args );
	}
}
