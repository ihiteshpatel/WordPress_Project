<?php
    /* Template Name: Contact Us */

    get_header();

?>
<div id="content" class="site-content">
    <div class="main contact-page-main">
        <div class="contact-inner">
            <div class="container">
                <section class="contact-title-section">
                    <h1><?php the_field('contact_page_heading'); ?></h1>
                    <p>
                        <?php the_field('contact_page_paragraph'); ?>
                    </p>
                </section>

                <!-- Contact form shortcode created using Contact Form 7 plugin -->

                <section class="contact-form-section">
                    <?php echo do_shortcode('[contact-form-7 id="'. get_field('contact_form_id').'" title="Lofts Contact Form"]'); ?>
                </section>

                <!-- Contact form footer section -->
                <section class="contact-footer-section">
                    <ul>
                        <li class="address">
                            <?php
                                $lofts_office_address = get_field('footer_office_address', 'option');
                                    if ($lofts_office_address) :
                                        $link_title = $lofts_office_address['title'];
                                        $link_url = $lofts_office_address['url'];
                                        $link_target = $lofts_office_address['target'] ? $lofts_office_address['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="email">
                            <?php
                                $lofts_email_link = get_field('footer_email_address', 'option');
                                    if ($lofts_email_link) :
                                        $link_title = $lofts_email_link['title'];
                                        $link_url = $lofts_email_link['url'];
                                        $link_target = $lofts_email_link['target'] ? $lofts_email_link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="number">
                            <?php
                                $lofts_phone_number_link = get_field('phone_number', 'option');
                                    if ($lofts_phone_number_link) :
                                        $link_title = $lofts_phone_number_link['title'];
                                        $link_url = $lofts_phone_number_link['url'];
                                        $link_target = $lofts_phone_number_link['target'] ? $lofts_phone_number_link['target'] : '_self';
                            ?>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_url($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>