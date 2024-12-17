<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infra
 */
?>
</div><!-- #content -->
<footer>
</footer>
</div>
<!-- #page -->

<div class="fixed left-1/2 -translate-x-1/2 bottom-8 bg-[#222222] rounded-full px-4 py-3 flex items-center">
    <span class="mr-2 text-sm text-white">Show map</span>
    <?php echo get_inline_svg('map.svg'); ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
