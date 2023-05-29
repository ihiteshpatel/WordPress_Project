<?php
/**
 * Gallery Shortcode
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;
use WP_Query;

/**
 * Class Gallery Shortcode.
 */
class Gallery_Shortcode {
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
		add_shortcode( 'lofts_gallery', array( $this, 'lofts_gallery_shortcode' ) );

	}

	/**
	 * Register Gallery Shortcode.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function lofts_gallery_shortcode($atts) {

		ob_start();

            // define attributes and defaults
            extract(shortcode_atts(array(
                'type' => 'gallery',
                'order' => 'ASC',
                'posts' => 99
            ), $atts));

            // define query parameters based on attributes
            $options = array(
                'post_type' => $type,
                'order' => $order,
                'posts_per_page' => $posts,
                'post_status' => 'publish'
            );

            $lofts_gallery_query = new WP_Query($options);
            // run the loop based on the query
            if ($lofts_gallery_query->have_posts()) { 
                while($lofts_gallery_query->have_posts()) :
                $lofts_gallery_query->the_post();
?>
                <figure class="image-block size-large">
                    <?php
                        $lofts_gallery_image = get_field('gallery_page_images');
                            if ($lofts_gallery_image) :
                                $url = $lofts_gallery_image['url'];
                                $alt = $lofts_gallery_image['alt'];
                                $width = $lofts_gallery_image['width'];
                                $height = $lofts_gallery_image['height']; 
                    ?>
                                <a href="#<?php echo esc_attr($alt); ?>">
                                    <img src="<?php echo esc_url($url); ?>" 
                                        alt="<?php echo esc_attr($alt); ?>"
                                        width="<?php echo esc_attr($width); ?>"
                                        height="<?php echo esc_attr($height); ?>">
                                </a>
                            <?php endif; ?>
                </figure>
                <?php 
                    endwhile;
                    wp_reset_postdata();
            }
            $lofts_gallery_var = ob_get_clean();
                return $lofts_gallery_var;
    }
        
}