<a href="<?php echo $args['link'] ?>" class="">
    <?php if (str_contains($args['img'],'.svg')){
        echo get_inline_svg($args['img']);
    }else{ ?>
        <img src="<?php echo TEMPLATE_IMG_URI . $args['img'] ?>" />
    <?php } ?>
    <span><?php echo $args['label'] ?></span>
</a>