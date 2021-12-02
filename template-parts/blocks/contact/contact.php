<div class="col-12">
    <div class="row">


        <?php $info = get_field('contact'); ?>

        <?php foreach($info as $i) : ?>

            <div class="col-md-4">
            <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4"
                    style="width: 100px; height: 100px; border-width: 15px !important;">
                    <i class="fa fa-2x <?php echo $i['icon']; ?> text-secondary"></i>
                </div>
                <h5 class="font-weight-medium m-0 mt-2"><?php echo $i['text']; ?> </h5>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
</div>