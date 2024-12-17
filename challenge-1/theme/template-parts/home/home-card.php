
<div class="home-card">
    <div class="home-card-image rounded-lg overflow-hidden min-h-[248px] relative bg-cover bg-center mb-1.5" style="background-image:url(<?php echo TEMPLATE_IMG_URI . $args['img'] ?>)">
        <label class="home-card-image-gf absolute rounded-full bg-white px-2 py-1 inline-block top-4 left-3 text-sm">Guest favorite</label>
        <span class="absolute top-4 right-3"><?php echo get_inline_svg('heart.svg'); ?></span>
        <div class="absolute bottom-4 center left-1/2 -translate-x-1/2 flex items-center">
            <div class="rounded-full w-1.5 h-1.5 bg-white mx-0.5"></div>
            <div class="rounded-full w-1.5 h-1.5 bg-[#dddddd] mx-0.5"></div>
            <div class="rounded-full w-1.5 h-1.5 bg-[#dddddd] mx-0.5"></div>
            <div class="rounded-full w-1.5 h-1.5 bg-[#dddddd] mx-0.5"></div>
            <div class="rounded-full w-1 h-1 bg-[#dddddd] mx-0.5"></div>
        </div>
    </div>
    <div class="home-card-text flex flex-col">
        <div class="home-card-title mb-0.5 flex justify-between items-center">
            <h3 class="font-medium text-sm"><?php echo $args['location'] ?></h3>
            <label class="flex text-sm items-center"><?php echo get_inline_svg('star.svg') ?><span class="ml-1"><?php echo $args['rating'] ?></span></label>
        </div>
        <label class="mb-0.5 text-sm text-[#6a6a6a]"><?php echo $args['distance'] ?> miles away</label>
        <label class="mb-0.5 text-sm text-[#6a6a6a]"><?php echo $args['date_avail'] ?></label>
        <label class="text-sm text-[#6a6a6a]"><span class="text-black">$<?php echo $args['price'] ?></span> night</label>
    </div>
</div>