<?php
function my_theme_enqueue_styles() {

    $parent_style = 'astrid-style'; // This is 'astrid-style' for the Astrid theme.
    
    //deregister the parent bootstrap style and script  
    wp_deregister_style( 'bootstrap' );

    //enqueue bootstrap in the child theme 
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}



?>
