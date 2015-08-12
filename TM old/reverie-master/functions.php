<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
  - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
2. lib/enqueue-style.php
    - enqueue Foundation and Reverie CSS
*/
require_once('lib/enqueue-style.php');

/*
3. lib/foundation.php
	- add pagination
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/nav.php
	- custom walker for top-bar and related
*/
require_once('lib/nav.php'); // filter default wordpress menu classes and clean wp_nav_menu markup
/*
5. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

/**********************
Add theme supports
 **********************/
function reverie_theme_support() {
    // Add language supports.
    load_theme_textdomain('reverie', get_template_directory() . '/lang');

    // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);
    /*add_image_size( 'fd-lrg', 1024, 99999, false);
    add_image_size( 'fd-med', 768, 99999, false);
    add_image_size( 'fd-sm', 320, 9999, false);*/

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formats supports. http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    // Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'reverie'),
        'additional' => __('Additional Navigation', 'reverie'),
        'utility' => __('Utility Navigation', 'reverie')
    ));

    // Add custom background support
    add_theme_support( 'custom-background',
        array(
            'default-image' => '',  // background image default
            'default-color' => '', // background color default (dont add the #)
            'wp-head-callback' => '_custom_background_cb',
            'admin-head-callback' => '',
            'admin-preview-callback' => ''
        )
    );
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

//add WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//Disable WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );

/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;

	$product_type = $product->product_type;

	switch ( $product_type ) {
		case 'external':
			return __( 'Buy', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'Take a Look!', 'woocommerce' );
		break;
		case 'simple':
			return __( 'Buy Now!', 'woocommerce' );
		break;
		case 'variable':
			return __( 'Take a Look!', 'woocommerce' );
		break;
		default:
			return __( 'Take a Look!', 'woocommerce' );
	}

}

// Change product-page layout

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 5);
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 5 );


// create widget areas
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {

    register_sidebar(array(
    'name'=> __('sidebar', 'reveries'),
    'id' => 'Sidebar',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    ) );

		register_sidebar( array(
		'name'          => __( 'homeMachines-left', 'reveries' ),
		'id'            => 'homeMachines-left',
		'description'   => 'This is the left side of homeMachines.',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeMachines-right', 'reveries' ),
		'id'            => 'homeMachines-right',
		'description'   => 'This is the right side of homeMachines.',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );

		register_sidebar( array(
		'name'          => __( 'tagline', 'reveries' ),
		'id'            => 'tagline',
		'description'   => 'This is the home tagline.',
		'before_widget' => '<div class="tagline"><div class="large-12 columns">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeSell-left', 'reveries' ),
		'id'            => 'homeSell-left',
		'description'   => 'This is the homeSell-left area.',
		'before_widget' => '<div class="homeSell large-6 left columns">',
		'after_widget'  => '</div>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeSell-right', 'reveries' ),
		'id'            => 'homeSell-right',
		'description'   => 'This is the homeSell-right area.',
		'before_widget' => '<div class="homeSell large-6 left columns">',
		'after_widget'  => '</div></div>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeShop-stringing', 'reveries' ),
		'id'            => 'homeShop-stringing',
		'description'   => 'This is the homeShop-stringing area.',
		'before_widget' => '<div class="large-6 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeShop-accessories', 'reveries' ),
		'id'            => 'homeShop-accessories',
		'description'   => 'This is the homeShop-accessories area.',
		'before_widget' => '<div class="large-6 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeConsulting-left', 'reveries' ),
		'id'            => 'homeConsulting-left',
		'description'   => 'This is the homeConsulting-left area.',
		'before_widget' => '<div class="large-6 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );

		register_sidebar( array(
		'name'          => __( 'homeConsulting-right', 'reveries' ),
		'id'            => 'homeConsulting-right',
		'description'   => 'This is the homeConsulting-right area.',
		'before_widget' => '<div class="large-6 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );



}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<div class="large-3 columns"><article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

//* return entry meta information for posts, used by multiple loops.
	/* if(!function_exists('reverie_entry_meta')) :
    function reverie_entry_meta() {
        echo '<span class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
endif;


?>