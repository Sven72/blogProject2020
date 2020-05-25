<?php 
function myBlog_files() {
  // true platziert das Script im Footer
  wp_enqueue_script('main-blog-js', get_theme_file_uri('/js/index.js'), NULL, '1.0', true);
   wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1' );
  wp_enqueue_style('custom-google-fonts', '//https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700');
 
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myBlog_files');

function myBlog_features() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(700, 700);
}
add_action('after_setup_theme', myBlog_features);

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

?>