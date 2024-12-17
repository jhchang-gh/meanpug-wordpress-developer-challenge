
<div class="home-card">
    <div class="home-card-image" style="background-image:url(<?php echo TEMPLATE_IMG_URI . $args['img'] ?>)">
        <label>Guest favorite</label>
        <?php echo get_inline_svg('heart.svg'); ?>
    </div>
    <div class="home-card-text">
        <div class="home-card-title">
            <h3 class="text-red-500"><?php echo $args['location'] ?></h3>
            <label><?php echo get_inline_svg('star.svg') ?> <?php $args['rating'] ?></label>
        </div>
        <label><?php echo $args['distance'] ?> miles away</label>
        <label><?php echo $args['date_avail'] ?></label>
        <label>$<?php echo $args['price'] ?> night</label>
    </div>
</div>