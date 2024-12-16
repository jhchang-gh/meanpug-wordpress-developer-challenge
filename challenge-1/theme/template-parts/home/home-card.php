
<div class="home-card ">
    <div class="home-card-image" style="background-image:url()">
        <label>Guest favorite</label>
        <svg></svg>
    </div>
    <div class="home-card-text">
        <div class="home-card-title">
            <h3 class="text-red-500"><?php echo $args['location'] ?></h3>
            <label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 12px; width: 12px; fill: currentcolor;"><path fill-rule="evenodd" d="m15.1 1.58-4.13 8.88-9.86 1.27a1 1 0 0 0-.54 1.74l7.3 6.57-1.97 9.85a1 1 0 0 0 1.48 1.06l8.62-5 8.63 5a1 1 0 0 0 1.48-1.06l-1.97-9.85 7.3-6.57a1 1 0 0 0-.55-1.73l-9.86-1.28-4.12-8.88a1 1 0 0 0-1.82 0z"></path></svg> <?php echo $args['rating'] ?></label>
        </div>
        <label><?php echo $args['distance'] ?> miles away</label>
        <label><?php echo $args['date_avail'] ?></label>
        <label>$<?php echo $args['price'] ?> night</label>
    </div>
</div>