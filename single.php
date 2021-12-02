<?php get_header(); ?>
<?php get_header('secondary'); ?>

<?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>





<!-- Detail Start -->
<div class="container py-5">
    <div class="row">
        <!-- Blog Detail Start -->
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>

                <h1 class="mb-4 section-title"><?php the_title(); ?></h1>
                <div class="d-index-flex mb-2">
                    <span class="mr-3"><i class="fa fa-user text-primary"></i> <?php the_author_meta('user_firstname');
                    the_author_meta('user_lastname');?></span>
                    <span class="mr-3"><i class="fa fa-folder text-primary"></i>categorie </span>
                    <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span>
                </div>
            </div>

            <div class="mb-5">


                <?php if(has_post_thumbnail()): ?>
                <img class="img-fluid w-100 mb-4" src="<?php the_post_thumbnail_url(); ?>" alt="Image">
                <?php endif ?>


                <p>
                    <?php the_content(); ?>

            </div>
<?php /*
            <!-- Related Post Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Related Post</h3>
                <div class="owl-carousel related-carousel position-relative">
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <a href=""
                                class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                                style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <a href=""
                                class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                                style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <a href=""
                                class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                                style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                </div>
            </div>
            <!-- Related Post End -->

           */ ?>

            <!-- Comment List Start -->

            



            <div class="mb-5">
               <!-- <h3 class="font-weight-bold mb-4">3 Comments</h3> -->


                <?php

                    comments_template();
                ?>


            </div>
            <!-- Comment List End -->

            <?php comment_form(); ?>

            <?php /*
            <!-- Comment Form Start -->
            <div class="bg-light p-5">
                <h3 class="font-weight-bold mb-4">Leave a comment</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                    </div>
                </form>
            </div>
            <!-- Comment Form End -->

            */?>
        </div>
        <!-- Blog Detail End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            <!-- Author Start -->
            <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                <img class="rounded-circle bg-white shadow mx-auto mb-4" src="img/user.jpg"
                    style="width: 100px; height: 100px; padding: 12px;" alt="">
                <h3 class="text-primary mb-3"><?php 
                    the_author_meta('user_firstname');
                    the_author_meta('user_lastname');
                    ?></h3>
                <p class="text-white m-0"><?php the_author_meta('user_description');?></p>
            </div>
            <!-- Author End -->

            <?php /*
            <!-- Search Form Start -->
            <div class="mb-5">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary"><i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Search Form End -->
            */ ?>

            <?php /*
            <!-- Category Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Design
                        <span class="badge badge-primary badge-pill">150</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Development
                        <span class="badge badge-primary badge-pill">131</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Online Marketing
                        <span class="badge badge-primary badge-pill">78</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keyword Research
                        <span class="badge badge-primary badge-pill">56</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Email Marketing
                        <span class="badge badge-primary badge-pill">98</span>
                    </li>
                </ul>
            </div>
            <!-- Category End -->
*/ ?>

            <!-- Image Start -->
            <div class="mb-5">
                <img src="img/blog-1.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <?php /*
            <!-- Recent Post Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Recent Post</h3>

                
                 

                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Post End -->

*/ ?>

            <!-- Image Start -->
            <div class="mb-5">
                <img src="img/blog-2.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Tags Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                <div class="d-flex flex-wrap m-n1">


                    <?php $tags = get_the_tags(); 
                    foreach ($tags as $tag) : ?>

                    <a href="" class="btn btn-outline-primary m-1"><?php echo $tag->name; ?></a>

                    <?php endforeach ?>


                </div>
            </div>
            <!-- Tags End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="img/blog-3.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Plain Text Start -->
            <div>
                <h3 class="font-weight-bold mb-4"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
            </div>
            <!-- Plain Text End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Detail End -->



<?php    
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                 
                get_sidebar();
                ?>

<?php get_footer(); ?>