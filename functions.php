<?php
// Limit Post Word Count
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');
//Replace Excerpt Link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


//Activate post-image functionality (WP 2.9+)
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

// featured image sizes
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'full-size',  9999, 9999, false );
add_image_size( 'post-image',  150, 150, true );
add_image_size( 'related-posts',  50, 50, true );
add_image_size( 'portfolio',  215, 160, true );
add_image_size( 'single-portfolio',  685, 9999, true );
add_image_size( 'featured-image',  920, 350, true );
}


?>