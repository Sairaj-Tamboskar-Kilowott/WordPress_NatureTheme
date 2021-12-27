<?php

function load_stylesheets()
{

    
    $rand = rand(1,99999999);
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap', $rand);

    wp_register_style('style', get_template_directory_uri() . '/style.css', 
        array(), false, 'all');
    wp_enqueue_style('style');



}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function include_jquery()
{

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');




function loadjs()
{



    wp_register_script('customjs', get_template_directory_uri() . './js/scripts.js', '', 1, true );
    wp_enqueue_script('customjs');


}

add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');

add_theme_support('post-thumbnails');



// register_nav_menus(
//     array(
//         'top-menu' => __('Top Menu', 'theme'),
//         'footer-menu' => __('Footer Menu', 'theme'),
//     )
// );



add_image_size('smallest', 200, 200, true);
add_image_size('largest', 800, 800, true);




//Include custom navwalker
require_once('bs4navwalker.php');
// Register WordPress nav menu
register_nav_menu('top', 'Top menu');
?>