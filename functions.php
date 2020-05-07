<?php 
function myBlog_files() {
  wp_enqueue_script('main-blog-js', get_theme_file_uri('/js/index.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
 
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myBlog_files');

function myBlog_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', myBlog_features);

add_filter( 'excerpt_length', function($length) {
    return 15;
} );


function myBlog2020_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(700, 700);
}

add_action('after_setup_theme', 'myBlog2020_features');

add_action( 'wp_enqueue_scripts', 'tu_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function tu_load_font_awesome() {
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1' );
}




?>