<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package infra
 */

/*

Front page with bare bones grid displaying homes

*/

get_header();
?>
<main class="w-full max-w-[1200px] px-10 mx-auto">
	<div id="grid-homes" class="grid grid-cols-4 gap-5">
		<?php

		// declare '$home_data' variable to feed into 'home-card.php' template part
		// if this was a real Wordpress site, I'd be making a query to custom post type 'properties'

		$home_data = [
			[
				'img' => 'bethlehem-connecticut.avif',
				'location' => 'Bethlehem, Connecticut',
				'distance' => '75',
				'avail_dates' => 'Jan 4 - 9',
				'price' => '556',
				'rating' => '5.0',
				'favorite' => true
			],
			[
				'img' => 'jeffersonville-new-york.avif',
				'location' => 'Jeffersonville, New York',
				'distance' => '86',
				'avail_dates' => 'Feb 9 - 14',
				'price' => '242',
				'rating' => '4.98',
				'favorite' => true
			],
			[
				'img' => 'hamlin-pennsylvania.avif',
				'location' => 'Hamlin, Pennsylvania',
				'distance' => '85',
				'avail_dates' => 'Feb 2 - 7',
				'price' => '300',
				'rating' => '4.96',
				'favorite' => false
			],
			[
				'img' => 'litchfield-connecticut.avif',
				'location' => 'Litchfield, Connecticut',
				'distance' => '80',
				'avail_dates' => 'Dec 16 - 21',
				'price' => '599',
				'rating' => '4.96',
				'favorite' => true
			],
			[
				'img' => 'bedford-hills-new-york.avif',
				'location' => 'Bedford Hills, New York',
				'distance' => '37',
				'avail_dates' => 'Jan 23 - 28',
				'price' => '383',
				'rating' => '5.0',
				'favorite' => true
			],
			[
				'img' => 'greenwood-lake-new-york.avif',
				'location' => 'Greenwood Lake, New York',
				'distance' => '35',
				'avail_dates' => 'Jan 12 - 17',
				'price' => '295',
				'rating' => '4.98',
				'favorite' => true
			],
			[
				'img' => 'greentown-pennsylvania.avif',
				'location' => 'Greentown, Pennsylvania',
				'distance' => '76',
				'avail_dates' => 'Jan 12 - 17',
				'price' => '279',
				'rating' => '4.9',
				'favorite' => true
			],
			[
				'img' => 'shohola-pennsylvania.avif',
				'location' => 'Shohola, Pennsylvania',
				'distance' => '69',
				'avail_dates' => 'Feb 16 - 21',
				'price' => '206',
				'rating' => '4.98',
				'favorite' => true
			],
		];

		foreach($home_data as $hdata){
			get_template_part('template-parts/home/home-card', null, $hdata);
		}
		?>
	</div>
</main>
<?php
get_footer();
