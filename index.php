<?php get_header(); ?>
<?php get_header('secondary'); ?>

<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php    
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                 
                get_sidebar();
                ?>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>