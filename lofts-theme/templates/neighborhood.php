<?php
/* Template Name: Neighborhood */
get_header();
?>
<div class="main neighborhood-main">
    <!-- Hero banner -->
    <section class="neighborhood-banner" style="background-image: url(<?php the_field('neighborhood_hero_banner'); ?>)">
        <div class="container">
            <div class="inner-section">
                <h1>
                    <?php the_field('neighborhood_heading'); ?>
                </h1>
                <div class="text-box">
                    <a href="#" class="site-button"><?php the_field('neighborhood_hero_button'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero banner end -->

    <!-- Partition Box -->
    <section class="partition-box">
        <div class="container">
            <div class="col-outer">
                <div class="col2">
                    <div class="shift-left-img">
                        <?php
                            $lofts_left_shift_image = get_field('neighborhood_shift_left_image');
                                if ($lofts_left_shift_image) :
                                    $url = $lofts_left_shift_image['url'];
                                    $alt = $lofts_left_shift_image['alt'];
                                    $width = $lofts_left_shift_image['width'];
                                    $height = $lofts_left_shift_image['height']; 
                        ?>
                                    <img src="<?php echo esc_url($url); ?>" 
                                        alt="<?php echo esc_attr($alt); ?>" 
                                        width="<?php echo esc_attr($width); ?>" 
                                        height="<?php echo esc_attr($height); ?>" />

                                <?php endif; ?>
                    </div>
                </div>
                <div class="col2">
                    <div class="innerpadd">
                        <div class="mobileOnly">
                            <h2>
                                <?php the_field('neighborhood_mobileonly_heading'); ?>
                            </h2>
                        </div>
                        <p>
                            <?php the_field('neighborhood_innerpadd_paragraph_1'); ?>
                        </p>
                        <p>
                            <?php the_field('neighborhood_innerpadd_paragraph_2'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partition Box end -->

    <!-- Map section -->
    <section class="map-bottom">
        <div class="container">
            <div class="info-outer">
                <h2><?php the_field('neighborhood_map_info_heading'); ?></h2>
                <p>
                    <?php the_field('neighborhood_map_info_paragraph_1'); ?>
                </p>
                <p>
                    <?php the_field('neighborhood_map_info_paragraph_2'); ?>
                </p>
                <p>
                    <?php the_field('neighborhood_map_info_paragraph_3'); ?>
                </p>
                <p>
                    <?php the_field('neighborhood_map_info_paragraph_4'); ?>
                </p>
                <div class="mobileOnly">
                    <div class="whiteBox">
                        <p>
                            <?php the_field('neighborhood_whiterbox'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map section end -->

    <!-- Image with content box -->
    <section class="imgWithContent-box">
        <?php
            $lofts_whiterbox_image = get_field('neighborhood_whiterbox_image');
                if ($lofts_whiterbox_image) :
                    $url = $lofts_whiterbox_image['url'];
                    $alt = $lofts_whiterbox_image['alt'];
                    $width = $lofts_whiterbox_image['width'];
                    $height = $lofts_whiterbox_image['height']; 
        ?>
                    <img src="<?php echo esc_url($url); ?>" 
                        alt="<?php echo esc_attr($alt); ?>" 
                        width="<?php echo esc_attr($width); ?>" 
                        height="<?php echo esc_attr($height); ?>" />

                <?php endif; ?>
        <div class="container">
            <div class="whiterBox">
                <p>
                    <?php the_field('neighborhood_whiterbox'); ?>
                </p>
            </div>
        </div>
    </section>
    <!-- Image with content box end -->
</div>
<?php get_footer(); ?>