<?php

function mezban_theme_support(){
    /**  thumbnail */
    add_theme_support( 'post-thumbnails' );

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );


    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );


    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));


    register_nav_menus( array(
        'main-menu' => __( 'Main Menu', 'mezban' ),
        'footer-menu' => __( 'Footer Menu', 'mezban' ),
    ) );

    
    remove_theme_support( 'widgets-block-editor' );
}

add_action( 'after_setup_theme', 'mezban_theme_support' );



include_once('inc/common/scripts.php');
include_once('inc/nav-walker.php');
include_once('inc/template-function.php'); 
if ( class_exists( 'Kirki' ) ) {
	include_once('inc/mezban-kirki.php');
}
 