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
/*
 * Template Name: Template-example
 * description: a starter template
 */
?>

<?php get_header(); ?>

<div class="text-center py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?php _e( 'Example Template', 'howling-dev-basic'); ?></h2>
                <p><?php echo(get_option( 'blog_charset' )); ?></p>
                <p><?php echo(feed_content_type( 'rss2' )) ?></p>                
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>