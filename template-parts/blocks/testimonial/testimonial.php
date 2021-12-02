<div class="container-fluid py-5">
    <div class="container">

        <div class="owl-carousel testimonial-carousel">


            <?php $testimonials = get_field('testimonial'); ?>


            <?php  foreach($testimonials as $testimonial) : ?>


            <div class="testimonial-item">
                <img class="position-relative rounded-circle bg-white shadow mx-auto"
                    src="<?php echo $testimonial['image']['sizes']['medium']; ?>"
                    alt="<?php $testimonial['image']['alt']; ?>"
                    style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                <div class="bg-light text-center p-4 pt-0">
                    <h5 class="font-weight-medium mt-5"><?php echo $testimonial['name']; ?></h5>
                    <p class="text-muted font-italic"><?php echo $testimonial['profession']; ?></p>
                    <p class="m-0"><?php echo $testimonial['description']; ?></p>
                </div>
            </div>
            <?php endforeach ?>


        </div>
    </div>
</div>