<?php
function add_theme_scripts() {

    // Enqueue Styles
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3', 'all');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.min.css', array(), '1.0', 'all');
    wp_enqueue_style('lightcase', get_template_directory_uri() . '/assets/css/lightcase.css', array(), '1.0', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.0.0-beta3', 'all');

    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '5.1.3', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.2.3', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '5.1.3', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '5.1.3', true);
    wp_enqueue_script('functions', get_template_directory_uri() . '/assets/js/functions.js', array('jquery'), '1.0', true);

    // Enqueue comment reply script on singular posts with comments open
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
