<?php
/**
 * The template for displaying the footer
 * 
 * @package lofts-theme
*/ 
?>
<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-top-section">
            <div class="logo-block">
                <a href="<?php echo esc_url(site_url()); ?>" class="logo">
                    <span></span>
                    <?php
                        $lofts_footer_logo = get_field('footer_logo', 'option');
                            if ($lofts_footer_logo) :
                                $url = $lofts_footer_logo['url'];
                                $alt = $lofts_footer_logo['alt'];
                                $width = $lofts_footer_logo['width'];
                                $height = $lofts_footer_logo['height']; 
                    ?>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>" 
                                    width="<?php echo esc_attr($width); ?>" 
                                    height="<?php echo esc_attr($height); ?>" />
                    
                            <?php endif; ?>
                </a>
            </div>
            <div class="footer-top-inner">
                <div class="left-block">
                    <h2><?php the_field('footer_heading_text', 'option'); ?></h2>
                </div>
                <div class="social-icon-block">
                    <?php 
                        if (have_rows('footer_social_media_icons', 'option')) : 
                    ?>
                    <ul>
                        <?php 
                            while (have_rows('footer_social_media_icons', 'option')) :
                                the_row();
                                $lofts_social_media_icons = get_sub_field('social_media_icons', 'option'); 
                                if ($lofts_social_media_icons) :
                                    $url = $lofts_social_media_icons['url'];
                                    $alt = $lofts_social_media_icons['alt'];
                                    $width = $lofts_social_media_icons['width'];
                                    $height = $lofts_social_media_icons['height'];
                                $link = get_sub_field('social_media_links', 'option');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <li>
                            <a href="<?php echo esc_url($link_url); ?>" 
                                class="logo" 
                                target="<?php echo esc_attr($link_target); ?>">
                                <span></span>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>"
                                    width="<?php echo esc_attr($width); ?>" height="<?php echo esc_attr($height); ?>">

                                    <?php endif; ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li>
                            <div class="menu-footer2-container acsb-hidden">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footerMenu2'
                                    ));
                                ?>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <div class="menu-footer1-container">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footerMenu1'
                                    ));
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom-section">
            <div class="left-block">
                <div class="footer-small-logo">
                    <?php
                        $lofts_footer_small_logo = get_field('footer_small_utility_icons', 'option');
                            if ($lofts_footer_small_logo) :
                                $url = $lofts_footer_small_logo['url'];
                                $alt = $lofts_footer_small_logo['alt'];
                                $width = $lofts_footer_small_logo['width'];
                                $height = $lofts_footer_small_logo['height']; 
                    ?>
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>"
                                    width="<?php echo esc_attr($width); ?>"
                                    height="<?php echo esc_attr($height); ?>">
                            <?php endif; ?>
                </div>
                <div class="epoch-block">
                    <?php
                        $lofts_epoch_logo_link = get_field('footer_epoch_logo_link', 'option');
                                if ($lofts_epoch_logo_link) :
                                    $link_title = $lofts_epoch_logo_link['title'];
                                    $link_url = $lofts_epoch_logo_link['url'];
                                    $link_target = $lofts_epoch_logo_link['target'] ? $lofts_epoch_logo_link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="logo" target="<?php echo esc_url($link_target); ?>">
                        <span></span>
                        <?php
                            $lofts_footer_epoch_logo = get_field('footer_epoch_logo', 'option');
                                if ($lofts_footer_epoch_logo) :
                                    $url = $lofts_footer_epoch_logo['url'];
                                    $alt = $lofts_footer_epoch_logo['alt'];
                                    $width = $lofts_footer_epoch_logo['width'];
                                    $height = $lofts_footer_epoch_logo['height']; 
                        ?>
                                    <img src="<?php echo esc_url($url); ?>" 
                                        alt="<?php echo esc_attr($alt); ?>"
                                        width="<?php echo esc_attr($width); ?>"
                                        height="<?php echo esc_attr($height); ?>">

                                <?php endif; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right-block">
                <ul>
                    <li class="phone">
                        <?php
                            $lofts_phone_number_link = get_field('phone_number', 'option');
                                if ($lofts_phone_number_link) :
                                    $link_title = $lofts_phone_number_link['title'];
                                    $link_url = $lofts_phone_number_link['url'];
                                    $link_target = $lofts_phone_number_link['target'] ? $lofts_phone_number_link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                            <span></span>
                            <?php 
                                $question = get_field('enable_phone_number', 'option');
                                    if ($question) {
                                        echo esc_html($link_title);
                                    } 
                            ?>
                        </a>
                        <?php endif; ?>
                    </li>
                    <li class="email">
                        <?php
                            $lofts_email_link = get_field('footer_email_address', 'option');
                                if ($lofts_email_link) :
                                    $link_title = $lofts_email_link['title'];
                                    $link_url = $lofts_email_link['url'];
                                    $link_target = $lofts_email_link['target'] ? $lofts_email_link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                            <span></span>
                            <?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                    </li>
                    <li class="address">
                    <?php
                            $lofts_office_address = get_field('footer_office_address', 'option');
                                if ($lofts_office_address) :
                                    $link_title = $lofts_office_address['title'];
                                    $link_url = $lofts_office_address['url'];
                                    $link_target = $lofts_office_address['target'] ? $lofts_office_address['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                            <span></span>
                            <p>
                                <?php echo esc_html($link_title); ?>
                            </p>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="privacy-policy">
                        <?php
                            $lofts_privacy_link = get_field('privacy_policy_field', 'option');
                                if ($lofts_privacy_link) :
                                    $link_title = $lofts_privacy_link['title'];
                                    $link_url = $lofts_privacy_link['url'];
                                    $link_target = $lofts_privacy_link['target'] ? $lofts_privacy_link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="footer-mobile">
                    <div class="logo-box">
                        <a href="<?php echo esc_url(site_url()); ?>" class="white-logo">
                            <?php
                                $lofts_footer_white_logo = get_field('footer_logo_white', 'option');
                                    if ($lofts_footer_white_logo) :
                                        $url = $lofts_footer_white_logo['url'];
                                        $alt = $lofts_footer_white_logo['alt'];
                                        $width = $lofts_footer_white_logo['width'];
                                        $height = $lofts_footer_white_logo['height']; 
                            ?>
                                        <img src="<?php echo esc_url($url); ?>" 
                                            alt="<?php echo esc_attr($alt); ?>" 
                                            width="<?php echo esc_attr($width); ?>" 
                                            height="<?php echo esc_attr($height); ?>">

                                    <?php endif; ?>
                        </a>
                    </div>
                    <?php 
                        if (have_rows('footer_social_media_white_icons', 'option')) : 
                    ?>
                    <ul class="social-icon">
                        <?php 
                            while (have_rows('footer_social_media_white_icons', 'option')) :
                                the_row();
                                    $lofts_social_media_white_icons = get_sub_field('social_media_white_icons', 'option'); 
                                    if ($lofts_social_media_white_icons) :
                                        $url = $lofts_social_media_white_icons['url'];
                                        $alt = $lofts_social_media_white_icons['alt'];
                                        $width = $lofts_social_media_white_icons['width'];
                                        $height = $lofts_social_media_white_icons['height'];

                                        $link = get_sub_field('social_media_links', 'option');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <li>
                            <a href="<?php echo esc_url($link_url); ?>"
                                class="logo" 
                                target="<?php echo esc_attr($link_target); ?>">

                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>" 
                                    width="<?php echo esc_attr($width); ?>"
                                    height="<?php echo esc_attr($height); ?>">

                                <?php endif; ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
