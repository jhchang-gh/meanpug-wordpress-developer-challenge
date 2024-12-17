<a href="<?php echo $args['link'] ?>" class="flex flex-col items-center py-2.5 w-fit <?php echo ($args['active']) ? 'border-b-2 border-black' : 'opacity-65'; ?>">
    <img src="<?php echo TEMPLATE_IMG_URI . $args['img'] ?>" class="max-w-6 mb-1.5" />
    <span class="text-sm"><?php echo $args['label'] ?></span>
</a>