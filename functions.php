<?php
/**
 * Functions and definitions
 *
 * @author Bora Efe
 */

function cardly_theme_setup() {

    // Menu ondersteuning
    register_nav_menus(array(
        'primary' => __('Hoofdmenu', 'cardly'),
    ));

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Titel ondersteuning
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'cardly_theme_setup');


function cardly_theme_assets() {

    // CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('featherlight', get_template_directory_uri() . '/assets/css/featherlight.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // JS
    wp_enqueue_script('featherlight-js', get_template_directory_uri() . '/assets/js/featherlight.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'cardly_theme_assets');


function cardly_widgets_init() {

    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

}
add_action('widgets_init', 'cardly_widgets_init');
