<?php 
/**
 * Template Name: Privacy
 */
get_header();
?>

<section class="privacy-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-3 mb-5"><?php the_field('privacy_title'); ?></h1>
                <?php the_field('privacy_content'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>