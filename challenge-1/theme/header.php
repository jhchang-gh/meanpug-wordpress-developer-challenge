<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infra
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<main class="max-w-[1120px] px-10 xl:px-20 mx-auto">
<nav id="navbar" class="flex flex-col">
    <div id="navbar-main" class="flex items-center w-full">
        <div id="navbar-main-logo" class="text-[#FF385C] mr-auto">
            <?php echo get_inline_svg('logo.svg'); ?>
        </div>
        <div id="navbar-main-toggle" class="mx-auto ">
            <a href="#" class="text-base font-medium px-4 py-2.5">Stays</a>
            <a href="#" class="text-base text-[#6A6A6A] px-4 py-2.5">Experiences</a>
        </div>
        <div id="navbar-main-menu" class="flex items-center">
            <a href="#" class="text-base font-medium p-3">Airbnb your home</a>
            <a href="#" class="p-3"><?php echo get_inline_svg('globe.svg') ?></a>
            <a href="#" class="flex border-[#dddddd] border rounded-full py-2 pr-2 pl-[14px] ml-3 items-center">
                <span><?php echo get_inline_svg('menu.svg') ?></span>
                <span class="text-[#6A6A6A] w-8 inline-block ml-[14px]"><?php echo get_inline_svg('user.svg') ?></span>
            </a>
        </div>
    </div>
    <div id="navbar-search" class="flex rounded-full border border-[#dddddd] py-2 pl-8 pr-2 items-center w-full max-w-[850px] mx-auto">
        <div class="flex flex-col py-1.5 w-[30%]">
            <label class="font-medium text-xs">Where</label>
            <input type="text" placeholder="Search destinations" class="text-sm font-light" />
        </div>
        <div class="w-[1px] h-8 bg-[#dddddd] mx-6"></div>
        <div class="flex flex-col py-1.5 w-[10%]">
            <label class="font-medium text-xs">Check in</label>
            <input type="text" placeholder="Add dates" class="text-sm font-light" />
        </div>
        <div class="w-[1px] h-8 bg-[#dddddd] mx-6"></div>
        <div class="flex flex-col py-1.5 w-[10%]">
            <label class="font-medium text-xs">Check out</label>
            <input type="text" placeholder="Add dates" class="text-sm font-light" />
        </div>
        <div class="w-[1px] h-8 bg-[#dddddd] mx-6"></div>
        <div class="flex flex-col py-1.5">
            <label class="font-medium text-xs">Who</label>
            <input type="text" placeholder="Add guests" class="text-sm font-light" />
        </div>

        <button class="flex rounded-full bg-[#e1385c] text-white p-4 items-center ml-auto"><?php echo get_inline_svg('search.svg') ?></button>
    </div>
    <div id="navbar-filters" class="">
        <div id="navbar-filters-type" class="">
            <?php

            $filter_btns = [
                [
                    'img'=>'cabins.jpg',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'icons.webp',
                    'link'=>'#',
                    'label'=>'Icons'
                ],
                [
                    'img'=>'amazing-views.jpg',
                    'link'=>'#',
                    'label'=>'Amazing Views'
                ],
                [
                    'img'=>'tiny-homes.jpg',
                    'link'=>'#',
                    'label'=>'Tiny homes'
                ],
                [
                    'img'=>'pools.jpg',
                    'link'=>'#',
                    'label'=>'Amazing pools'
                ],
                [
                    'img'=>'golf.jpg',
                    'link'=>'#',
                    'label'=>'Golfing'
                ],
                [
                    'img'=>'lakefront.jpg',
                    'link'=>'#',
                    'label'=>'Lakefront'
                ],
                [
                    'img'=>'mansion.jpg',
                    'link'=>'#',
                    'label'=>'Mansions'
                ],
                [
                    'img'=>'omg.jpg',
                    'link'=>'#',
                    'label'=>'OMG!'
                ],
                [
                    'img'=>'treehouse.jpg',
                    'link'=>'#',
                    'label'=>'Treehouses'
                ],
                [
                    'img'=>'a-frame.jpg',
                    'link'=>'#',
                    'label'=>'A-frames'
                ],
                [
                    'img'=>'countryside.jpg',
                    'link'=>'#',
                    'label'=>'Countryside'
                ],
                [
                    'img'=>'beachfront.jpg',
                    'link'=>'#',
                    'label'=>'Beachfront'
                ],
            ];

            foreach($filter_btns as $fbtn){
                get_template_part('template-parts/headers/filter-button',null,$fbtn);
            }

            ?>
            
        </div>
        <div id="navbar-filters-popup" class="">
            <a href="#" class="">
                <svg></svg>
                <span></span>
            </a>
        </div>
        <div id="navbar-filters-tax" class="">
            <a href="#" class="">
                <span></span>
                <input type="checkbox" value="" class="sr-only peer">
            </a>
        </div>
    </div>
</nav>

<div id="page" class="site">

	<div id="content" class="site-content">
