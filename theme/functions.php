<!--functions.php: The theme's functions file, where you can define and customize functions, enqueue styles and scripts, and add theme-specific functionalities.-->
<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );