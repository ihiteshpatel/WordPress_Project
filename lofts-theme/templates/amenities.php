<?php

/* Template Name: Amenities */

get_header();

?>

<div class="main features-amenities-main">

    <!-- Hero banner -->

    <section class="header-banner" style="background-image: url(<?php the_field('amenities_hero_image'); ?>)">
        <div class="container">
            <div class="inner-section">
                <h1><?php the_field('amenities_hero_heading'); ?></h1>
            </div>
        </div>
    </section>

    <!-- Partition 1 -->

    <section class="partition-box">
        <div class="container">
            <div class="col-outer">
                <div class="col2">
                    <div class="shift-left-img">
                        <?php
                            $lofts_amenities_lounge_image = get_field('amenities_lounge_image');
                                if ($lofts_amenities_lounge_image) :
                                    $url = $lofts_amenities_lounge_image['url'];
                                    $alt = $lofts_amenities_lounge_image['alt'];
                                    $width = $lofts_amenities_lounge_image['width'];
                                    $height = $lofts_amenities_lounge_image['height']; 
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
                                <?php the_field('amenities_hero_heading'); ?>
                            </h2>
                        </div>
                        <p>
                            <?php the_field('amenities_lounge_paragraph'); ?>
                        </p>
                            <?php
                                if (have_rows('amenities_lounge_features')) :
                            ?>
                        <ul>
                            <?php
                                while(have_rows('amenities_lounge_features')) :
                                the_row();
                                $lofts_amenities_lounge_features = get_sub_field('amenities_lounge_list_items');
                            ?>
                            <li>
                                <?php 
                                    echo esc_html($lofts_amenities_lounge_features); 
                                ?>
                            </li>

                            <?php endwhile; ?>
                        </ul>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partition 2 -->
    
    <section class="partition-box right-shift">
        <div class="container">
            <div class="col-outer">
                <div class="col2">
                    <div class="innerpadd">
                        <p>
                            <?php the_field('amenities_kitchen_paragraph'); ?>
                        </p>
                            <?php
                                if (have_rows('amenities_kitchen_features')) :
                            ?>
                        <ul>
                            <?php
                                while(have_rows('amenities_kitchen_features')) :
                                the_row();
                                $lofts_amenities_kitchen_features = get_sub_field('amenities_kitchen_list_items');
                            ?>
                            <li>
                                <?php 
                                    echo esc_html($lofts_amenities_kitchen_features); 
                                ?>
                            </li>

                            <?php endwhile; ?>
                            
                        </ul>

                        <?php endif; ?>

                        <p>
                            <em><?php the_field('amenities_kitchen_notes'); ?></em>
                        </p>
                    </div>
                </div>
                <div class="col2">
                    <div class="shift-right-img">
                        <?php
                            $lofts_amenities_kitchen_image = get_field('amenities_kitchen_image');
                                if ($lofts_amenities_kitchen_image) :
                                    $url = $lofts_amenities_kitchen_image['url'];
                                    $alt = $lofts_amenities_kitchen_image['alt'];
                                    $width = $lofts_amenities_kitchen_image['width'];
                                    $height = $lofts_amenities_kitchen_image['height']; 
                        ?>
                                    <img src="<?php echo esc_url($url); ?>" 
                                        alt="<?php echo esc_attr($alt); ?>" 
                                        width="<?php echo esc_attr($width); ?>" 
                                        height="<?php echo esc_attr($height); ?>" />

                                <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php get_footer(); ?>