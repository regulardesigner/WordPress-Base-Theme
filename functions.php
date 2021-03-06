<?php
/**
  * Theme Options Framework
  *
  * Info : http://upthemes.com/upthemes-framework/
  */
if( file_exists(get_template_directory().'/options/options.php') )
    include_once(get_template_directory().'/options/options.php');

/**
 * Wordpress Theme Configuration
 **/
if( file_exists(get_template_directory().'/inc/theme-config.php') )
    include_once(get_template_directory().'/inc/theme-config.php');

/**
 * Wordpress Theme Plugins
 * 
 * Info : http://tgmpluginactivation.com/#download
 **/
if( file_exists(get_template_directory().'/inc/theme-plugins.php') )
    include_once(get_template_directory().'/inc/theme-plugins.php');

/**
 * Custom Post Type
 * 
 * Info : http://codex.wordpress.org/Post_Types
 **/
if( file_exists(get_template_directory().'/inc/custom-post-types/custom-post-types.php') )
    include_once(get_template_directory().'/inc/custom-post-types/custom-post-types.php');