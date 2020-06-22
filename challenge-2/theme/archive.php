<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LawFirm
 */

get_header();
?>
	<div id="primary" class="content-area">
        <?php get_template_part( 'template-parts/content', 'archive'); ?>
	</div><!-- #primary -->

<?php
get_footer();
