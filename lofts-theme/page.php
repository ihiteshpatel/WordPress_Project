<?php
    get_header();
?>

<div class="main page-main">
    <div class="container">
        <div class="content-section">
            <?php
            while(have_posts()) :
            the_post();
            the_title();
            the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>

