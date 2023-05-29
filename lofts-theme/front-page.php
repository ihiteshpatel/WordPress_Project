<?php get_header(); ?>

<div id="content" class="site-content">
<div class="main home-main">
    <!-- Hero Banner -->
    <section class="home-banner">
        <div class="inner-section">
            <div class="left-content">
                <h1>
                    <?php the_field('hero_section_heading'); ?>
                </h1>
                <div class="text-box">
                    <p><?php the_field('hero_section_first_paragraph'); ?></p>
                    <p><?php the_field('hero_section_paragraph'); ?>
                    </p>
                    <?php
                        $lofts_hero_button_link = get_field('hero_section_button');
                            if ($lofts_hero_button_link) :
                                $link_title = $lofts_hero_button_link['title'];
                                $link_url = $lofts_hero_button_link['url'];
                                $link_target = $lofts_hero_button_link['target'] ? $lofts_hero_button_link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="site-button" target="<?php echo esc_url($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>

                    <?php endif; ?>
                </div>
            </div>
            <div class="right-image">
                <?php
                    $lofts_home_hero_image = get_field('hero_section_image');
                        if ($lofts_home_hero_image) :
                            $url = $lofts_home_hero_image['url'];
                            $alt = $lofts_home_hero_image['alt'];
                            $width = $lofts_home_hero_image['width'];
                            $height = $lofts_home_hero_image['height']; 
                ?>
                            <img src="<?php echo esc_url($url); ?>" 
                                alt="<?php echo esc_attr($alt); ?>" 
                                width="<?php echo esc_attr($width); ?>" 
                                height="<?php echo esc_attr($height); ?>" />

                        <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Hero Banner End -->

    <!-- Sanctuary style section -->
    <section class="sanctuary-style">
        <h2><?php the_field('sanctuary_style_heading'); ?></h2>
        <div class="container">
            <div class="inner-section">
                <div class="left-block">
                    <div class="image-box shift-left-img">
                        <?php
                            $lofts_sanctuary_image = get_field('sanctuary_style_section_image');
                                if ($lofts_sanctuary_image) :
                                    $url = $lofts_sanctuary_image['url'];
                                    $alt = $lofts_sanctuary_image['alt'];
                                    $width = $lofts_sanctuary_image['width'];
                                    $height = $lofts_sanctuary_image['height']; 
                        ?>
                                    <img src="<?php echo esc_url($url); ?>" 
                                        alt="<?php echo esc_attr($alt); ?>" 
                                        width="<?php echo esc_attr($width); ?>" 
                                        height="<?php echo esc_attr($height); ?>" />

                                <?php endif; ?>
                    </div>
                </div>
                <div class="right-block">
                    <div class="right-block-inner">
                        <h2><?php the_field('sanctuary_style_heading'); ?></h2>
                        <p>
                            <?php the_field('sanctuary_style_paragraph'); ?>
                        </p>
                        <?php
                            $lofts_sanctuary_button_link = get_field('sanctuary_style_section_button');
                                if ($lofts_sanctuary_button_link) :
                                    $link_title = $lofts_sanctuary_button_link['title'];
                                    $link_url = $lofts_sanctuary_button_link['url'];
                                    $link_target = $lofts_sanctuary_button_link['target'] ? $lofts_sanctuary_button_link['target'] : '_self';
                        ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="site-button" target="<?php echo esc_url($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>

                                <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sanctuary style section end -->

    <!-- Texture image section -->
    <section class="home-text-block">
        <div class="text">
            <?php
                $lofts_texture_image = get_field('texture_image_section');
                    if ($lofts_texture_image) :
                        $url = $lofts_texture_image['url'];
                        $alt = $lofts_texture_image['alt'];
                        $width = $lofts_texture_image['width'];
                        $height = $lofts_texture_image['height']; 
            ?>
                        <img src="<?php echo esc_url($url); ?>" 
                            alt="<?php echo esc_attr($alt); ?>" 
                            width="<?php echo esc_attr($width); ?>" 
                            height="<?php echo esc_attr($height); ?>" />

                    <?php endif; ?>
        </div>
    </section>
    <!-- Texture image section end -->

    <!-- Happy faces section -->
    <section class="image-text-section">
        <div class="inner-section">
            <div class="left-block">
                <div class="image-box">
                    <?php
                        $lofts_happy_first_image = get_field('happy_face_section_first_image');
                            if ($lofts_happy_first_image) :
                                $url = $lofts_happy_first_image['url'];
                                $alt = $lofts_happy_first_image['alt'];
                                $width = $lofts_happy_first_image['width'];
                                $height = $lofts_happy_first_image['height']; 
                    ?>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>" 
                                    width="<?php echo esc_attr($width); ?>" 
                                    height="<?php echo esc_attr($height); ?>" />

                            <?php endif; ?>
                </div>
            </div>
            <div class="right-block">
                <div class="image-box">
                    <?php
                        $lofts_happy_second_image = get_field('happy_face_section_second_image');
                            if ($lofts_happy_second_image) :
                                $url = $lofts_happy_second_image['url'];
                                $alt = $lofts_happy_second_image['alt'];
                                $width = $lofts_happy_second_image['width'];
                                $height = $lofts_happy_second_image['height']; 
                    ?>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>" 
                                    width="<?php echo esc_attr($width); ?>" 
                                    height="<?php echo esc_attr($height); ?>" />
                            
                            <?php endif; ?>
                </div>
                <div class="content-box">
                    <p>
                        <?php the_field('happy_face_section_paragraph'); ?>
                    </p>
                    <?php
                        $lofts_learn_more_button_link = get_field('happy_face_section_button');
                            if ($lofts_learn_more_button_link) :
                                $link_title = $lofts_learn_more_button_link['title'];
                                $link_url = $lofts_learn_more_button_link['url'];
                                $link_target = $lofts_learn_more_button_link['target'] ? $lofts_learn_more_button_link['target'] : '_self';
                    ?>
                                <a href="<?php echo esc_url($link_url); ?>" class="site-button" target="<?php echo esc_url($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                </a>

                            <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Happy faces section end -->

    <!-- Newly Refreshed inside out section -->
    <section class="inside-out-section">
        <h2><?php the_field('inside_outside_section_heading'); ?></h2>
        <div class="container">
            <div class="inner-section">
                <div class="left-block">
                    <div class="text-box">
                        <h2><?php the_field('inside_outside_section_heading'); ?></h2>
                        <p>
                            <?php the_field('inside_outside_section_paragraph'); ?>
                        </p>
                        <?php
                            $lofts_floor_plans_link = get_field('inside_outside_section_button');
                                if ($lofts_floor_plans_link) :
                                    $link_title = $lofts_floor_plans_link['title'];
                                    $link_url = $lofts_floor_plans_link['url'];
                                    $link_target = $lofts_floor_plans_link['target'] ? $lofts_floor_plans_link['target'] : '_self';
                        ?>
                                    <a href="<?php echo esc_url($link_url); ?>" class="site-button" target="<?php echo esc_url($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>

                                <?php endif; ?>
                    </div>
                </div>
                <div class="right-block">
                    <div class="image-box shift-right-img">
                        <?php
                            $lofts_inside_outside_image = get_field('inside_outside_section_image');
                                if ($lofts_inside_outside_image) :
                                    $url = $lofts_inside_outside_image['url'];
                                    $alt = $lofts_inside_outside_image['alt'];
                                    $width = $lofts_inside_outside_image['width'];
                                    $height = $lofts_inside_outside_image['height']; 
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
    <!-- Newly Refreshed inside out section end -->
</div>
<?php get_footer(); ?>