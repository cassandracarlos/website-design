<?php 
/*****************************************
*   License: GPLv3 or later
*   License URI: http://www.gnu.org/licenses/gpl-3.0.html
*   
*   Howling Dev Basic WordPress Theme, Copyright 2022 Dan Hunt
*   howling-dev-basic WordPress Theme, Copyright 2022 Dan Hunt
*   howling-dev-basic is distributed under the terms of the GNU GPL
*   
***********************************************************************
*   
*   This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*   
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
*   GNU General Public License for more details.
*   
*   You should have received a copy of the GNU General Public License
*   along with this program. If not, see < http://www.gnu.org/licenses/ >.
*       
***********************************************************************
*****************************************/
?>
<?php 
function howling_dev_basic_add_theme_function() {
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "align-wide" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    $howling_dev_basic_custom_header_defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( "custom-header", $howling_dev_basic_custom_header_defaults );
    $howling_dev_basic_custom_background_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'left',    // 'left', 'center', 'right'
        'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( "custom-background", $howling_dev_basic_custom_background_defaults );
    

    // Add theme support for Featured Images
    add_theme_support('post-thumbnails', array(
    'post',
    'page',
    'portfolio',
    'custom-logo',
    'wp-block-styles'
    ));    
    

    add_theme_support( 'custom-logo', array(
        'height'                => 100,
        'width'                 => 100,
        'flex-height'           => true,
        'flex-width'            => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ) );
}
add_action( 'after_setup_theme', 'howling_dev_basic_add_theme_function' );


function howling_dev_basic_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'howling_dev_basic_add_editor_styles' );

?>
