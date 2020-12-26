<?php
//add theme support in my wordpress
function creativeagency_support(){
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-formats',[ //adding multiple post-formats
        'aside',
        'gallery',
        'video',
        'audio',
        'image',
        'status',
        'link',
        'quote',
    ]);
}
add_action('after_setup_theme','creativeagency_support');

function creativeagency_scripts(){
    wp_enqueue_style('main css',get_stylesheet_uri() );// adding main stylesheet
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800&display=swap','','','');
    //adding google fonts
}
add_action('wp_enqueue_scripts','creativeagency_scripts');

//register menu

function creative_agency_menu(){
    register_nav_menus(array(
        'primary_menu'=>__('Top-Menu','creativeagency'),
        'Footer-Menu'=> __('Bottom-Menu','creativeagency')
    ));
}
add_action('after_setup_theme','creative_agency_menu'); //This is action hook .It helps to connect with wordpress function
