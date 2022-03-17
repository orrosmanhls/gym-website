<?php

//create the Menus
function my_theme_menus()
{
    register_nav_menus(array('main-menu' => 'Main Menu'));
}

//hook
add_action('init', 'my_theme_menus');

// add stylesheets & JS files
function my_theme_scripts()
{
    /*
        basic structure for wp_<function>:
            wp_<function>(<name of variable> : string,
                          <path location> : string, 
                          <version> : string)
    */

    // normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    //google fonts
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700&family=Staatliches&display=swap', array(), '1.0.0');

    // JQuery
    wp_enqueue_script('jquery');

    // Slicknav css 
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // import main style
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts'), '1.0.0');

    /** load JS scripts **/
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');