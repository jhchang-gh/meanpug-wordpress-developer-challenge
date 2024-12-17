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
<nav id="navbar" class="flex flex-col mb-4">
    <div class="w-full max-w-[1200px] px-10 mx-auto">
    <div id="navbar-main" class="flex items-center w-full mb-6">
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
                <span class="text-[#6A6A6A] w-8 inline-block ml-[14px]">
                    <?php // echo get_inline_svg('user.svg') ?>
                    <img src="<?php echo TEMPLATE_IMG_URI . 'meanpug.png' ?>" />
                </span>
            </a>
        </div>
    </div>
    <div id="navbar-search" class="flex rounded-full border border-[#dddddd] py-2 pl-8 pr-2 items-center w-full max-w-[850px] mx-auto mb-5">
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
    </div>
    <div class="w-full h-[1px] bg-[#dddddd]"></div>
    <div id="navbar-filters" class="w-full max-w-[1200px] px-10 mx-auto relative mt-4 overflow-hidden">
        <div id="navbar-filters-type" class="overflow-hidden flex justify-between w-[1200px]">
            <?php

            $filter_btns = [
                [
                    'img'=>'cabins.jpg',
                    'link'=>'#',
                    'label'=>'Cabins',
                    'active'=>true
                ],
                [
                    'img'=>'icons.webp',
                    'link'=>'#',
                    'label'=>'Icons',
                    'active'=>false
                ],
                [
                    'img'=>'amazing-views.jpg',
                    'link'=>'#',
                    'label'=>'Amazing Views',
                    'active'=>false
                ],
                [
                    'img'=>'tiny-homes.jpg',
                    'link'=>'#',
                    'label'=>'Tiny homes',
                    'active'=>false
                ],
                [
                    'img'=>'pools.jpg',
                    'link'=>'#',
                    'label'=>'Amazing pools',
                    'active'=>false
                ],
                [
                    'img'=>'golf.jpg',
                    'link'=>'#',
                    'label'=>'Golfing',
                    'active'=>false
                ],
                [
                    'img'=>'lakefront.jpg',
                    'link'=>'#',
                    'label'=>'Lakefront',
                    'active'=>false
                ],
                [
                    'img'=>'mansion.jpg',
                    'link'=>'#',
                    'label'=>'Mansions',
                    'active'=>false
                ],
                [
                    'img'=>'omg.jpg',
                    'link'=>'#',
                    'label'=>'OMG!',
                    'active'=>false
                ],
                [
                    'img'=>'treehouse.jpg',
                    'link'=>'#',
                    'label'=>'Treehouses',
                    'active'=>false
                ],
                [
                    'img'=>'a-frame.jpg',
                    'link'=>'#',
                    'label'=>'A-frames',
                    'active'=>false
                ],
                /*
                [
                    'img'=>'countryside.jpg',
                    'link'=>'#',
                    'label'=>'Countryside',
                    'active'=>false
                ],
                [
                    'img'=>'beachfront.jpg',
                    'link'=>'#',
                    'label'=>'Beachfront',
                    'active'=>false
                ],
                */
            ];

            foreach($filter_btns as $fbtn){
                get_template_part('template-parts/headers/filter-button',null,$fbtn);
            }

            ?>
            
        </div>
        <div id="navbar-filters-overlay" class="absolute top-0 right-0 h-full flex items-center w-fit pl-8 pr-10" style="background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 25%, rgba(255,255,255,1) 100%);">
            <a href="#" class="rounded-full p-2 border border-[#dddddd]">
                <?php echo get_inline_svg('chevron-right.svg'); ?>
            </a>
            <a href="#" class="flex items-center rounded-lg px-2 py-3 border border-[#dddddd] ml-4">
                <span class="">
                    <?php echo get_inline_svg('filters.svg'); ?>
                </span>
                <span class="ml-2 text-small">Filters</span>
            </a>
        </div>
    </div>
</nav>

<div id="page" class="site">

	<div id="content" class="site-content">
