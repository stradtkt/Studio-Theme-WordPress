<?php 
/**
 * Template Name: Contact
 */
get_header();
?>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>