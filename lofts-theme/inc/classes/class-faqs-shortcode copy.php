<?php
/**
 * FAQs Shortcode
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;
use WP_Query;

/**
 * Class FAQs Shortcode.
 */
class Faqs_Shortcode {
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
		add_shortcode( 'lofts_faqs', array( $this, 'lofts_faqs_listing_shortcode' ) );

	}

	/**
	 * Register FAQs Shortcode.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function lofts_faqs_listing_shortcode($atts) {

		ob_start();
            
            // define attributes and defaults
            extract(shortcode_atts(array(
                'type' => 'faqs',
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

            $lofts_faqs_query = new WP_Query($options);
            // run the loop based on the query
            
            if ($lofts_faqs_query->have_posts()) { 
                while($lofts_faqs_query->have_posts()) :
                $lofts_faqs_query->the_post();
?>
            <div class="faq-inner">
                <div class="toggle-question">
                    <div class="question">
                        <p><?php the_field('lofts_faqs_question'); ?></p>
                        <div class="plus">
                            <span class="add">
                                <?php
                                    $lofts_faqs_arrow = get_field('faqs_arrow_icon');
                                        if ($lofts_faqs_arrow) :
                                            $url = $lofts_faqs_arrow['url'];
                                            $alt = $lofts_faqs_arrow['alt'];
                                            $width = $lofts_faqs_arrow['width'];
                                            $height = $lofts_faqs_arrow['height']; 
                                ?>
                                            <img src="<?php echo esc_url($url); ?>" 
                                            alt="<?php echo esc_attr($alt); ?>" 
                                            width="<?php echo esc_attr($width); ?>" 
                                            height="<?php echo esc_attr($height); ?>" />

                                        <?php endif; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="answer toggle-answer">
                    <p></p>
                    <p><?php the_field('lofts_faqs_answer'); ?></p>
                    <p></p>
                </div>
                
            </div>
            <?php 
                
                endwhile;
                wp_reset_postdata();
                
            }
            $lofts_faqs_var = ob_get_clean();
                return $lofts_faqs_var;
    }
}
        