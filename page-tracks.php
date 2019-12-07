<?php 
/**
 * Template Name: Tracks
 */
get_header();
?>

<div id="inner-content-wrapper" class="wrapper page-section">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="archive-blog-wrapper blog-posts-wrapper">
				<?php
				if ( have_posts() ) : ?>

                    <?php
                    
                    /* Start the Loop */
                    $tracks = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'songs',
                    )); ?>
                    <div class="container">
                        <div class="row mt-2 mb-5">
                            <div class="col-12">
                                <h1 class="text-center">Going Global</h1>
                                <p class="lead text-center">Tracks by Ace Cartier</p>
                            </div>
                        </div>
                        <div class="row">
                    <?php 
                    while ( $tracks->have_posts() ) : $tracks->the_post(); ?>
                            <div class="col-12 col-md-4">
                                <div class="track">
                                    <div class="track-song">
                                        <?php the_field('song'); ?>
                                    </div>
                                    <div class="track-info">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><a href="<?php the_field('song_author_link'); ?>"><?php the_field('song_author'); ?></a></p>                          
                                    </div>
                                </div>
                            </div>
                <?php endwhile; ?>
                        </div>
                    </div>
                    <?php

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
			<?php  
			/**
			* Hook - musicsong_action_pagination.
			*
			* @hooked musicsong_pagination 
			*/
			do_action( 'musicsong_action_pagination' ); 

			/**
			* Hook - musicsong_infinite_loader_spinner_action.
			*
			* @hooked musicsong_infinite_loader_spinner 
			*/
			do_action( 'musicsong_infinite_loader_spinner_action' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
