<?php
 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // Parent blossom-shop theme
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') 
    );
}

function add_themes_features() {
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_themes_features');

function my_post_type(){
$args = array(
    'labels' => array(
        'name' => 'Employees',
        'singular_name' => 'Employee',
    ),
    'hierarchical' => true, 
    'menu_icon' => 'dashicons-admin-users',
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),


);

register_post_type('employee', $args);
}
add_action('init', 'my_post_type')


?>