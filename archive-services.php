<?php get_header(); ?>

<?php get_header('secondary'); ?>


<!-- Services Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
        <h1 class="display-4 text-center mb-5">What We Offer</h1>
        <div class="row">
            <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-3 col-md-6 pb-1">
                <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4"
                    style="height: 300px;">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <i class="fa fa-3x <?php the_field('icon'); ?> text-secondary"></i>
                    </div>
                    <h4 class="font-weight-bold m-0">
                        <?php the_title(); ?>
                    </h4>
                </div>
            </div>

            <?php    
                    endwhile;
                    else :
                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                    endif;
                 
            
                    ?>

        </div>
    </div>
</div>
<!-- Services End -->






<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo laundry_services_page_content(); ?>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>