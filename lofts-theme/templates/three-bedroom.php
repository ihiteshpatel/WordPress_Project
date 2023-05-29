<?php
    /* Template Name: Three Bedroom */

    get_header();
?>

<div class="one-bedroom-template">
    <!-- Banner section -->
    <section class="banner-outer">
        <div class="container">
            <div class="innerpadd">
                <h1 class="page-title"><?php the_field('page_heading'); ?></h1>
                <p class="page-description">
                    <?php the_field('floorplans_all_page_description'); ?>
                </p>
                <div class="mobileOnly">
                    <div class="whiterBox">
                        <p>
                            <?php the_field('floorplans_all_page_mobile_whiterbox'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <section class="page-content">
        <!-- Bedroom list and property details -->
        <div class="tabbox-outer">
            <div class="container">
                <div class="tab-child-wrap inner-page fly">
                    <div class="bedroom-list">
                        <ul class="tab-child-nav">
                        <?php
                                $lofts_one_bedroom_link = get_field('floorplans_one_bedroom_link');
                                if ($lofts_one_bedroom_link) :
                                    $link_title = $lofts_one_bedroom_link['title'];
                                    $link_url = $lofts_one_bedroom_link['url'];
                                    $link_target = $lofts_one_bedroom_link['target'] ? $lofts_one_bedroom_link['target'] : '_self';
                            ?>
                            <li class="nav-item">
                                <a href="<?php echo esc_url($link_url); ?>" class="bedroom-type" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_attr($link_title); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php
                                $lofts_two_bedroom_link = get_field('floorplans_two_bedroom_link');
                                if ($lofts_two_bedroom_link) :
                                    $link_title = $lofts_two_bedroom_link['title'];
                                    $link_url = $lofts_two_bedroom_link['url'];
                                    $link_target = $lofts_two_bedroom_link['target'] ? $lofts_two_bedroom_link['target'] : '_self';
                            ?>
                            <li class="nav-item">
                                <a href="<?php echo esc_url($link_url); ?>" class="bedroom-type" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_attr($link_title); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php
                                $lofts_three_bedroom_link = get_field('floorplans_three_bedroom_link');
                                if ($lofts_three_bedroom_link) :
                                    $link_title = $lofts_three_bedroom_link['title'];
                                    $link_url = $lofts_three_bedroom_link['url'];
                                    $link_target = $lofts_three_bedroom_link['target'] ? $lofts_three_bedroom_link['target'] : '_self';
                            ?>
                            <li class="nav-item">
                                <a href="<?php echo esc_url($link_url); ?>" class="bedroom-type" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_attr($link_title); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        
                        <span class="arrow-icon"></span>
                    </div>
                    <div class="tab-child-con">
                        <div class="tab-child-con-item">
                            <div class="bedroom-slider slick-initialized slick-slider">
                                <button class="slick-prev slick-arrow">Previous</button>
                                    
                                    <?php echo do_shortcode("[lofts_floorplan terms='three-bedroom']"); ?>
                                    
                                <button class="slick-next slick-arrow">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="floor-blurb">
                        <p class>
                            <em>
                                <?php the_field('floorplans_all_page_floor_blurb'); ?>
                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bedroom list and property details end -->

        <!-- Image with content box -->
        <div class="imgWithContent-box">
            <div class="imgWithContent-box-inner">
                <?php
                    $lofts_three_img_box = get_field('floorplans_all_page_image_content_box');
                        if ($lofts_three_img_box) :
                            $url = $lofts_three_img_box['url'];
                            $alt = $lofts_three_img_box['alt'];
                            $width = $lofts_three_img_box['width'];
                            $height = $lofts_three_img_box['height']; 
                ?>
                            <img src="<?php echo esc_url($url); ?>" 
                                alt="<?php echo esc_attr($alt); ?>"
                                width="<?php echo esc_attr($width); ?>"
                                height="<?php echo esc_attr($height); ?>">

                        <?php endif; ?>
                <div class="container">
                    <div class="whiterBox">
                        <p>
                            <?php the_field('floorplans_all_page_whiterbox'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image with content box end -->

        <!-- Content box with Green background color -->
        <div class="greenContent-box">
            <div class="greenContent-box-inner">
                <div class="container">
                    <div class="innerpadd">
                        <h2>
                            <?php the_field('floorplans_all_page_greenbox_heading'); ?>
                        </h2>
                        <div class="col-outer">
                            <div class="col-2">
                                <p>
                                    <?php the_field('floorplans_all_page_greenbox_paragraph_1'); ?>
                                </p>
                            </div>
                            <div class="col-2">
                                <p>
                                    <?php the_field('floorplans_all_page_greenbox_paragraph_2'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content box with Green background color end -->

        <!-- Partition box with 2 columns -->
        <div class="partition-box">
            <div class="container">
                <div class="col-outer">
                    <div class="col-2">
                        <div class="shift-left-img">
                            <?php
                                $lofts_three_partition_img = get_field('floorplans_all_page_partition_box_image');
                                    if ($lofts_three_partition_img) :
                                        $url = $lofts_three_partition_img['url'];
                                        $alt = $lofts_three_partition_img['alt'];
                                        $width = $lofts_three_partition_img['width'];
                                        $height = $lofts_three_partition_img['height']; 
                            ?>
                                        <img src="<?php echo esc_url($url); ?>" 
                                            alt="<?php echo esc_attr($alt); ?>"
                                            width="<?php echo esc_attr($width); ?>"
                                            height="<?php echo esc_attr($height); ?>">

                                    <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="innerpadd">
                            <p>
                                <?php the_field('floorplans_all_page_innerpadd_paragraph_1'); ?>
                            </p>
                            <p>
                                <strong>
                                    <?php the_field('floorplans_all_page_innerpadd_paragraph_2'); ?>
                                </strong>
                            </p>
                            <a href="#" class="site-btn">
                                
                            <?php the_field('floorplans_all_page_innerpadd_button'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partition box with 2 columns end -->
    </section>
</div>
<?php get_footer(); ?>