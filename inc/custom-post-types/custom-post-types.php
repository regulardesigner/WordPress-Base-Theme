<?php 
/**
 * Custom post types
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
	if( file_exists(get_template_directory().'/inc/custom-post-types/products.php') )
    include_once(get_template_directory().'/inc/custom-post-types/products.php');
}