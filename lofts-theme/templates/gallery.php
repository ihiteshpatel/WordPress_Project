<?php

    /**
    * Template Name: Gallery
    */

    get_header();
?>
<div id="content" class="site-content">
    <div class="main gallery-main">
        <section class="gallery-page">
            <div class="container">
                <h1>
                    <?php the_field('gallery_page_heading'); ?>
                </h1>
            </div>
            <div class="gallery-wrap head-gallery">
            
                <figure class="gallery-block has-nested-images columns-2 is-cropped">
                    <!-- Calling the gallery shortcode -->
                    <?php echo do_shortcode("[lofts_gallery posts=10]"); ?>

                </figure>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>