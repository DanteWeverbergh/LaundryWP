<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page'  => 3,
);
$_posts = new WP_Query($args);


?>


<?php if($_posts->have_posts()): ?>



<?php while ($_posts->have_posts()): $_posts->the_post(); ?>




<div class="col-md-4 mb-2">
    <div class="bg-light">
        <div class="position-relative">

            <?php if(has_post_thumbnail()): ?>
            <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" alt="image">

            <?php endif ?>

            <a href="<?php the_permalink(); ?>"
                class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                <h4 class="text-center text-white font-weight-medium mb-3"><?php the_title(); ?></h4>
                <div class="d-flex text-light">
                    <small class="mr-2"><i class="fa fa-user text-secondary"></i>
                        <?php the_author_meta('first_name');?></small>
                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> categorie </small>
                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                </div>
            </a>

        </div>

        <p class="m-0 p-4">

            <?php the_excerpt(); ?>
        </p>

    </div>

</div>






<?php endwhile; ?>

<?php endif; ?>