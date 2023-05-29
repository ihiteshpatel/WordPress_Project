<?php
/**
 * Floorplan Shortcode
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;
use WP_Query;

/**
 * Class Floorplan Shortcode.
*/
class Floorplan_Shortcode {
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
		add_shortcode( 'lofts_floorplan', array( $this, 'lofts_floorplan_listing_shortcode' ) );

	}

	/**
	 * Register Floorplan Shortcode.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function lofts_floorplan_listing_shortcode($atts) {

		ob_start();

        extract(shortcode_atts(array(
            'type' => 'floorplan',
            'posts' => 99,
            'terms' => ''
        ), $atts));
        
        $taxonomy = 'bedroom-type';
        $term = get_term_by('slug', $terms, $taxonomy);
        $cat = $term->slug;

        // define query parameters based on attributes
        $floor_options = array(
            'post_type' => $type,
            'posts_per_page' => $posts,
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'bedroom-type',
                    'field' => 'slug',
                    'terms' => $cat
                )
            )
        );

        $lofts_floorplan_query = new WP_Query($floor_options); 
        
        // run the loop based on the query 
        if ($lofts_floorplan_query->have_posts()) :
?>
            <div class="slick-floors">
                <?php 
                    while($lofts_floorplan_query->have_posts()) :
                        $lofts_floorplan_query->the_post();
                ?>
                <div class="slick-slide">
                    <?php
                        $lofts_floorplan_img = get_field('floorplan_image');
                            if ($lofts_floorplan_img) :
                                $url = $lofts_floorplan_img['url'];
                                $alt = $lofts_floorplan_img['alt'];
                                $width = $lofts_floorplan_img['width'];
                                $height = $lofts_floorplan_img['height']; 
                    ?>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>"
                                    width="<?php echo esc_attr($width); ?>"
                                    height="<?php echo esc_attr($height); ?>">

                            <?php endif; ?>

                    <div class="bed-detail">
                        <div class="bed-bath-detail">
                            <p>
                                <span class="type">
                                    <?php the_field('floorplan_property_name'); ?>
                                </span>
                                <span class="bed">
                                    <?php the_field('floorplan_bed_detail'); ?>
                                </span>
                                <span class="bath">
                                    <?php the_field('floorplan_bath_detail'); ?>
                                </span>
                                <span class="sqft">
                                    <?php the_field('floorplan_sqft_area'); ?>
                                </span>
                            </p>
                        </div>
                        <div class="detail-btn">
                            <a href="#" class="site-btn">
                                <?php the_field('floorplan_availability_button'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; 
                wp_reset_postdata();
        $lofts_floorplan_var = ob_get_clean();
        return $lofts_floorplan_var; 
    }
}