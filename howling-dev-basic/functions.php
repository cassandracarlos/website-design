<?php 
/*****************************************
*	License: GPLv3 or later
*	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*	
*	Howling Dev Basic WordPress Theme, Copyright 2022 Dan Hunt
*	howling-dev-basic WordPress Theme, Copyright 2022 Dan Hunt
*	howling-dev-basic is distributed under the terms of the GNU GPL
*	
***********************************************************************
*	
*	This program is free software: you can redistribute it and/or modify
*	it under the terms of the GNU General Public License as published by
*	the Free Software Foundation, either version 3 of the License, or
*	(at your option) any later version.
*	
*	This program is distributed in the hope that it will be useful,
*	but WITHOUT ANY WARRANTY; without even the implied warranty of
*	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
*	GNU General Public License for more details.
*	
*	You should have received a copy of the GNU General Public License
*	along with this program. If not, see < http://www.gnu.org/licenses/ >.
*		
***********************************************************************
*****************************************/
?>
<?php 
	require_once get_template_directory() . '/inc/hd_add_theme_support.php';
	require_once get_template_directory() . '/inc/hd_language.php';	
	require_once get_template_directory() . '/inc/hd_walker.php';
	require_once get_template_directory() . '/inc/hdb-register-block.php';

function howling_dev_basic_load_css() {
	// Bootstrap	
	wp_enqueue_style( 'hd_bootstrap-css', get_template_directory_uri() . '/assets/bootstrap-5.0.2/dist/css/bootstrap.min.css', array(), '5.1.0', 'all' );	
	wp_enqueue_script( 'hd_bootstrap-js', get_template_directory_uri() . '/assets/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	
	// CSS	
	wp_enqueue_style( 'howling_dev_basic_style', get_template_directory_uri() . '/style.css', array(), '1', 'all' );
	
	// Fonts
	wp_enqueue_style( 'howling_dev_basic_gfont', 'https://fonts.googleapis.com/css?family=Poppins:wght@200|Nunito&display=swap' );

	// JS
	wp_enqueue_script( 'alignfull', get_template_directory_uri() . '/js/howling-dev-basic-alignfull.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'howling_dev_basic_load_css' );

	

function howling_dev_basic_add_menus() {
	// Setup menu in WP backend	
	register_nav_menus( array(
		'header-menu' => __( 'Main Menu', 'howling-dev-basic' ),
		'important-links' => __( 'Important Links', 'howling-dev-basic' ),
		'middle-menu' => __( 'Middle Menu', 'howling-dev-basic'),
	));
}
add_action( 'init', 'howling_dev_basic_add_menus');

// Add widgets
function howling_dev_basic_widgets() {
	register_sidebar( array(
			'name' => 'Footer Widget',
			'id' => 'footer-widget',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );		
}
add_action( 'widgets_init', 'howling_dev_basic_widgets' );

function howling_dev_basic_comment_reply() {
 	if ( is_singular() && comments_open() && get_option('thread_comments') )
  	wp_enqueue_script( 'comment-reply' );
}
add_action( 'comment_form_before', 'howling_dev_basic_comment_reply');
?>