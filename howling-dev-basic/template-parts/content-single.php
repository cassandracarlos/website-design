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

			<?php if ( has_post_thumbnail() ): ?>
				<div class="row">
					<div class="col">
						<div class="hd-featured-image">
							<?php the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) ); ?>
							<figcaption><?php the_post_thumbnail_caption() ?></figcaption>
						</div>					
					</div>
				</div>
			<?php endif ?>
				
			<div class="row">
				<div class="col">
					<div class="meta-info">
						<p><?php _e( 'Posted on', 'howling-dev-basic'); ?> <?php echo get_the_date(); ?><?php _e( ' by ', 'howling-dev-basic'); ?><?php the_author_posts_link(); ?></p>
						<p><?php _e( 'Categories: ', 'howling-dev-basic'); ?><?php the_category( ', ' ); ?></p>
						<p><?php the_tags( __( 'Tags: ', 'howling-dev-basic'), ', ' ); ?></p>
					</div>
				    <div class="content">
				        <?php
				        the_content();

				        wp_link_pages(
							array(
								'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'howling-dev-basic' ) . '">',
								'after'    => '</nav>',
								'pagelink' => esc_html__( 'Page %', 'howling-dev-basic' ),
							)
						);
				        ?>
				    </div>	
				</div>
			</div>		

			<div class="row">					
				<div class="pages col-6 text-start"><?php next_post_link( '&laquo; %link' ); ?></div>
				<div class="pages col-6 text-end"><?php previous_post_link( '%link &raquo;' );  ?></div>					
			</div>			
		</div><!-- End .container -->
	</div><!-- End .hd-content -->
</article>