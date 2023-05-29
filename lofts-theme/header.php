<?php
/**
 * The header for lofts-theme
 * 
 * @package lofts-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lofts-theme' ); ?></a>
    <header id="masthead" class="lofts-header site-header">
        <!-- Mobile menu -->
        <div class="mobile-menu-main">
            <div class="mobile-logo">
                <a href="<?php echo esc_url(site_url()); ?>" class="white-logo">
                    <?php
                        $lofts_header_logo_white = get_field('header_logo_white', 'option');
                            if ($lofts_header_logo_white) :
                                $url = $lofts_header_logo_white['url'];
                                $alt = $lofts_header_logo_white['alt'];
                                $width = $lofts_header_logo_white['width'];
                                $height = $lofts_header_logo_white['height']; 
                    ?>
                    
                                <img src="<?php echo esc_url($url); ?>" 
                                    alt="<?php echo esc_attr($alt); ?>" 
                                    width="<?php echo esc_attr($width); ?>" 
                                    height="<?php echo esc_attr($height); ?>">
                        
                            <?php endif; ?>
                </a>
            </div>
            <div class="toggle-btn">
                <span class="toggle-icon"></span>
                <span class="toggle-icon"></span>
                <span class="toggle-icon"></span>
            </div>
        </div>
        <!-- Mobile menu end -->

        <!-- Navigation menu -->
        <div class="full-menu-section">
            <div class="full-menu-inner-section">
                <!-- Header top menu -->
                <div class="header-top-block" id="header_menu_top">
                    <ul>
                        <li class="number">
                            <?php
                                $lofts_phone_number_link = get_field('phone_number', 'option');
                                    if ($lofts_phone_number_link) :
                                        $link_title = $lofts_phone_number_link['title'];
                                        $link_url = $lofts_phone_number_link['url'];
                                        $link_target = $lofts_phone_number_link['target'] ? $lofts_phone_number_link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                                <?php 
                                    $question = get_field('enable_phone_number', 'option');
                                        if ($question) {
                                            echo esc_html($link_title);
                                        } 
                                ?>
                            </a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <div class="menu-header1-container">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'headerTopMenu'
                                    ));
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Header top menu end -->

                <div class="menu-wrap" id="header_menu_wrap">
                    <div class="menu-wrap-inner">
                        <!-- Header logo -->
                        <div class="header-logo">
                            <a href="<?php echo esc_url(site_url()); ?>" class="white-logo">
                                <?php
                                    $lofts_header_logo_white = get_field('header_logo_white', 'option');
                                        if ($lofts_header_logo_white) :
                                            $url = $lofts_header_logo_white['url'];
                                            $alt = $lofts_header_logo_white['alt'];
                                            $width = $lofts_header_logo_white['width'];
                                            $height = $lofts_header_logo_white['height']; 
                                ?>
                                            <img src="<?php echo esc_url($url); ?>" 
                                                alt="<?php echo esc_attr($alt); ?>" 
                                                width="<?php echo esc_attr($width); ?>" 
                                                height="<?php echo esc_attr($height); ?>" />
                                        <?php endif; ?>
                            </a>
                            <a href="<?php echo esc_url(site_url()); ?>" class="logo">
                                <?php
                                    $lofts_header_logo = get_field('header_logo', 'option');
                                        if ($lofts_header_logo) :
                                            $url = $lofts_header_logo['url'];
                                            $alt = $lofts_header_logo['alt'];
                                            $width = $lofts_header_logo['width'];
                                            $height = $lofts_header_logo['height']; 
                                ?>
                                            <img src="<?php echo esc_url($url); ?>" 
                                                alt="<?php echo esc_attr($alt); ?>" 
                                                width="<?php echo esc_attr($width); ?>" 
                                                height="<?php echo esc_attr($height); ?>" />
                        
                                        <?php endif; ?>
                            </a>
                            <a href="<?php echo esc_url(site_url()); ?>" class="color-white-logo">
                                <?php
                                    $lofts_header_blue_white_logo = get_field('header_blue_white_logo', 'option');
                                        if ($lofts_header_blue_white_logo) :
                                            $url = $lofts_header_blue_white_logo['url'];
                                            $alt = $lofts_header_blue_white_logo['alt'];
                                            $width = $lofts_header_blue_white_logo['width'];
                                            $height = $lofts_header_blue_white_logo['height']; 
                                ?>
                                            <img src="<?php echo esc_url($url); ?>" 
                                                alt="<?php echo esc_attr($alt); ?>" 
                                                width="<?php echo esc_attr($width); ?>" 
                                                height="<?php echo esc_attr($height); ?>" />
                        
                                        <?php endif; ?>
                            </a>
                        </div>
                        <!-- Header logo end -->

                        <nav id="site-navigation" class="header-menu">
                            <div class="header-menu-inner">
                                <div class="menu-header2-container">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                            'theme_location' => 'headerMenu'
                                            )
                                        );
                                    ?>
                                </div>
                            </div>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation menu end -->
    </header><!-- #masthead -->