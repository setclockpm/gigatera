<?php
function my_theme_enqueue_styles() {
	
	//deregister the parent bootstrap style and script  
	// wp_deregister_style( 'bootstrap' );
// 	wp_deregister_script( 'bootstrap' );

    $parent_style = 'astrid-style'; // This is 'astrid-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version')
    );
	//enqueue bootstrap in the child theme 
	// wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
// 	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css', false, NULL, 'all');
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


?>
