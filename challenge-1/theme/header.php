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

<nav id="navbar" class="flex">
    <div id="navbar-main" class="">
        <div id="navbar-logo" class="">
            <img src="" />
        </div>
        <div id="navbar-toggle" class="">
            <a href="#" class="">Stays</a>
            <a href="#" class="">Experiences</a>
        </div>
        <div id="navbar-menu" class="">
            <a href="#" class="">Airbnb your home</a>
            <a href="#" class=""><svg></svg></a>
            <a href="#" class="">
                <svg></svg>
                <svg></svg>
            </a>
        </div>
    </div>
    <div id="navbar-search" class="">
        <div class="">
            <label></label>
            <input />
        </div>

        <div class="">
            <label></label>
            <input />
        </div>

        <div class="">
            <label></label>
            <input />
        </div>

        <div class="">
            <label></label>
            <input />
        </div>

        <button><svg></svg></button>
    </div>
    <div id="navbar-filters" class="">
        <div id="navbar-filters-type" class="">
            <?php

            $filter_btns = [
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
                ],
                [
                    'img'=>'',
                    'link'=>'#',
                    'label'=>'Cabins'
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
