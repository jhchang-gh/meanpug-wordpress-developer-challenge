<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LawFirm
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <article id="404">
                <!-- banner -->
                <header>
                    <?php
                    $default_service = MP_Service::get_featured_services( 1 )[0];
                    $hero = new MP_Hero_Image( array(
                        'extra_css' => 'hero-image--lg',
                        'image' => MP_Service::get_featured_image( $default_service ),
                        'header' => 'Page Not Found'
                    ) );
                    $hero->render();
                    ?>
                </header>
                <!-- #banner -->

                <!-- content -->
                <div class="container py-6">
                    <h1 class="text-center">Oops! The page you are looking for doesn't exist.</h1>
                </div>
                <!-- #content -->

                <!-- consultation -->
                <?php
                if ( get_field( 'default_evaluation_form_header', 'option' ) ) {
                    $section = new MP_Consultation_Section();
                    $section->render();
                }
                ?>
                <!-- #consultation -->
            </article><!-- #post-<?php the_ID(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
