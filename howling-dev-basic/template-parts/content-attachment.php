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
<div class="hd-title">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php echo "<h2 class='title-text'>" . get_the_title() . "</h2>"; ?>
			</div>
		</div>
	</div>
</div>
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>    
	<div id="hd-content">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="meta-info">
						<p><?php _e( 'Posted on', 'howling-dev-basic'); ?> <?php echo get_the_date(); ?><?php _e( ' by ', 'howling-dev-basic'); ?><?php the_author_posts_link(); ?></p>
						<p><?php _e( 'Categories: ', 'howling-dev-basic'); ?><?php the_category( ', ' ); ?></p>
						<p><?php the_tags( __( 'Tags: ', 'howling-dev-basic'), ', ' ); ?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="howling-dev-basic-attachment">				       
				            <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
				            
				  
				           <?php if ( has_excerpt() ) : ?>				        
					           <div class="howling-dev-basic-attachment-caption">
					                 <?php the_excerpt(); ?>
					           </div><!-- .entry-caption -->
				       		<?php endif; ?>
					</div><!-- .entry-attachment -->		
				</div>
			</div>


			<?php if ( get_the_content() ): ?>	
				<div class="row">
					<div class="col">					
					    <div class="attachment-content">
					        <?php the_content(); ?>
					    </div>	
					</div>
				</div>
			<?php endif; ?>

			<div class="row mt-5">
				<div class="col-6 text-start"><?php previous_image_link( false, __( '&laquo; Previous Image', 'howling-dev-basic' ) ); ?></div>
	        	<div class="col-6 text-end"><?php next_image_link( false, __( 'Next Image &raquo;', 'howling-dev-basic' ) ); ?></div>
			</div>

			<div class="row">
				<a href="<?php echo get_permalink($post->post_parent); ?>">Back to <?php echo get_the_title($post->post_parent); ?></a>	
			</div>	



		</div><!-- End .container -->
	</div><!-- End .hd-content -->
</article>