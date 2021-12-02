<?php if(have_comments()) : ?>

<ol class="post-comments">
    <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            ));
    
     ?>
</ol>

<?php endif; ?>


<!--
<div class="media mb-4">
    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
    <div class="media-body">
        <h6><small><i>01 Jan 2045 at 12:00pm</i></small></h6>
        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd
            diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at
            tempor amet ipsum diam tempor consetetur at sit.</p>
        <button class="btn btn-sm btn-light">Reply</button>
    </div>
</div>
        -->


