<?php
// link to queries file for
require get_template_directory() . '/inc/queries.php';

//create the Menus
function my_theme_menus() {
    register_nav_menus(array('main-menu' => 'Main Menu'));
}

//hook
add_action('init', 'my_theme_menus');

// add stylesheets & JS files
function my_theme_scripts() {
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

function gymfitness_setup() {

    //register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    //add featured image
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup');


/** Create a WidgetZone **/
function gymfitness_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');
