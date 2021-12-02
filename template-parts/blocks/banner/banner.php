<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel-slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $banners = get_field('banner'); ?>



            <?php 
        $loop = 0;
        foreach($banners as $banner) : 
        ?>

            <div class="carousel-item <?php if($loop == 0) echo 'active'; ?>">
                <img class="w-100" src="<?php echo $banner['image']['sizes']['large']; ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"><?php echo $banner['title']; ?></h4>
                        <h1 class="display-3 text-white mb-md-4"><?php echo $banner['description']; ?></h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                    </div>
                </div>
            </div>

            <?php $loop++; endforeach; ?>


        </div>


        <!-- Carousel Start -->

        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>

<!-- Carousel End -->