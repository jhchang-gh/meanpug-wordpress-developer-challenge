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

get_header();
?>
	<div id="grid-homes" class="flex">
		<?php

		$home_data = [
			[
				'img' => '',
				'location' => 'Bethlehem, Connecticut',
				'distance' => '75',
				'avail_dates' => 'Jan 4 - 9',
				'price' => '556',
				'rating' => '5.0',
			],
			[
				'img' => '',
				'location' => 'Jeffersonville, New York',
				'distance' => '86',
				'avail_dates' => 'Feb 9 - 14',
				'price' => '242',
				'rating' => '4.98',
			],
			[
				'img' => '',
				'location' => 'Hamlin, Pennsylvania',
				'distance' => '85',
				'avail_dates' => 'Feb 2 - 7',
				'price' => '300',
				'rating' => '4.96',
			],
			[
				'img' => '',
				'location' => 'Litchfield, Connecticut',
				'distance' => '80',
				'avail_dates' => 'Dec 16 - 21',
				'price' => '599',
				'rating' => '4.96',
			],
		];

		foreach($home_data as $hdata){
			get_template_part('template-parts/home/home-card', null, $hdata);
		}
		?>
	</div>

<?php
get_footer();
