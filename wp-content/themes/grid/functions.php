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

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


function custom_post_type(){
    $labels_frontpage = array(
        'name' => 'Sliders',
    );
    register_post_type('slider', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
    ));
   
  

}
add_action('init', 'custom_post_type');

function myWidget(){
    register_sidebar(array(
        'name'=>'Footer 1',
        'id' => 'footer1',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 2',
        'id' => 'footer2',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 3',
        'id' => 'footer3',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Footer 4',
        'id' => 'footer4',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name'=>'Newsletter',
        'id' => 'newsletter',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
}
add_action('widgets_init', 'myWidget');

// Ndryshon tekstin per 'SHENIM SHTESE' te faqja checkout permes funksionit
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
$fields['order']['order_comments']['placeholder'] = 'Shënim për porosinë, psh. shënim ekstra për dërgesën.';
$fields['order']['order_comments']['label'] = 'Shënim porosie';
return $fields;
}

//Ndryshon tekstin butonit porosit te faqja checkout
add_filter('woocommerce_order_button_text','custom_order_button_text',1);

function custom_order_button_text($order_button_text) {
	
	$order_button_text = 'Porosite';
	
	return $order_button_text;
}
?>