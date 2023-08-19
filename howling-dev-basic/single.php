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
<?php get_header(); ?>
	<div class="main">
		<?php 
			while( have_posts() ):
				the_post();
				get_template_part( 'template-parts/content-single' );
		?>				
		
		<?php
			// Display a comment form if this post is open to comments
			if( comments_open() || get_comments_number() ):
				// Display the default comments form, or a custom form (type the custom filename inside the parenthesis).
				// Example: comments_template( 'filename.php' );
				#comments_template();
				comments_template( '/comments.php', get_post_format() );
			endif;
			endwhile;
		?>	
	</div>
<?php get_footer(); ?>