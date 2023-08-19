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
<?php get_header();  ?>

	<div id="main">

		<div class="hd-title">
			<div class="container">
				<div class="row">
					<div class="col">
							<h2 class="title-text"><?php _e( 'Search results for: ', 'howling-dev-basic' ); ?><?php echo get_search_query(); ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div class="search-form">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php get_search_form(); ?>	
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col">
					<?php

					while( have_posts() ):
						the_post();
						get_template_part( 'template-parts/content-search', get_post_format() );

						// Display a comment form if this post is open to comments
						if( comments_open() || get_comments_number() ):
							// Display the default comments form, or a custom form (type the custom filename inside the parenthesis).
							// Example: comments_template( 'filename.php' );
							comments_template();
						endif;

					endwhile;
					?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">                                
		      	<div class="col-6 text-start">
		        	 <?php previous_posts_link(__( '<< Newer posts', 'howling-dev-basic')); ?>
		      	</div>
		    	<div class="col-6 text-end">
		        	<?php next_posts_link(__( 'Older posts >>', 'howling-dev-basic')); ?>
			    </div>
			</div>      

			<div class="row">
			   	<div class="col text-center">
			      <div class="hd-pagination">
				      <?php 
				        the_posts_pagination(
				            array(
				              'prev_text' => __( 'Previous', 'howling-dev-basic'),
				              'next_text' => __( 'Next', 'howling-dev-basic'),
				            ));
				      ?>
			      	</div>
				  </div>
			</div>  
		</div>

	</div><!-- End Main -->

<?php get_footer(); ?>