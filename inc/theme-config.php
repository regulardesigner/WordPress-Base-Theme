<?php
/**
 * Support for WordPress 3.0's custom menus
 **/
add_action( 'init', 'register_my_menu' );

/**
 * RSS Feeds
 **/
add_theme_support( 'automatic-feed-links' );

/**
 * Wordpress MU
 **/
define('WP_ALLOW_MULTISITE', false);
 
/**
 * Register areas for custom menu
 **/
function register_my_menu() {
    register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}

/**
 * Register sidebars
 *
 * Info : http://codex.wordpress.org/Function_Reference/register_sidebar
 **/
if (function_exists('register_sidebar')) {
    register_sidebar();
}

/**
 * Custom Backgrounds
 *
 * Info : http://codex.wordpress.org/Custom_Backgrounds
 **/
add_custom_background();

/**
 * Posts thumbnails
 *
 * Info : http://codex.wordpress.org/Function_Reference/set_post_thumbnail
 **/
add_theme_support('post-thumbnails');
//set_post_thumbnail_size(520, 250, true);