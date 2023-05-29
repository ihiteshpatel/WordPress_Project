<?php

/* Template Name: FAQs */

get_header();

?>
<div class="main faq-main">
    <section class="faq-page">
        <div class="container">
            <h1><?php the_field('faqs_page_heading'); ?></h1>
            <div class="faq-wrapper">
                <!-- Calling the faqs shortcode -->
                <?php echo do_shortcode("[lofts_faqs]"); ?>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();