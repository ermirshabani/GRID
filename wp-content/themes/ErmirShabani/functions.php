<?php
/**
 * Loads scripts
 * css
 * js
 * bootstrap
 */
function style_on_load()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.2', 'all');
    wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-css1', get_template_directory_uri().'/assets/slick/slick-theme.css', array(), '1.8.1', 'all');
    wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/slick/slick.js', array(), '1.8.1', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery/jquery.slim.min.js', array(), '2.0.1', 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '2.0.2', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.2', 'all');
    
}
add_action('wp_enqueue_scripts', 'style_on_load');
/**
 * Adds two menu styles:
 * Primary - Top Navbar,
 * Footer - Bootom Navbar
 */
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));
/**
 * Adds theme support:
 * Custom Logo
 * Custom Header
 * Post Thumbnails
 */
add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");

require_once('wp_bootstrap_navwalker.php');

/*Navigation Menus*/
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  /*End*/

  add_filter( 'menu_image_default_sizes', function($sizes){
  
    // remove the default 36x36 size
    unset($sizes['menu-36x36']);
    
    // add a new size
    $sizes['menu-50x50'] = array(50,50);
    
    // return $sizes (required)
    return $sizes;
    
  });