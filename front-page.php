<?php get_header(); ?>






<?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<div class="container py-5">

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php get_template_part('inc/section', 'posts'); ?>
            </div>
        </div>
    </div>
</div>


<?php    
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                 
                
                ?>





<?php get_footer(); ?>