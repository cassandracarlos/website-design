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
<style>
	/************************************************** Begin Footer *****************************************/
	#hdb-footer	{
		background-color: var(--primary-color);
		color: white;
		padding: 2em 0;
		margin-top: 2em;
	}

	#hdb-footer a:link, #hdb-footer a:visited {
		color: white;
		text-decoration: none;
		font-size: 1.25em;
		font-family: var(--body-font);
	}

	#hdb-footer a:hover, #hdb-footer a:active {
		color: var(--secondary-color);
	}

	#hdb-footer li {
		margin-bottom: .5em;
	}

	#hdb-footer .search-field {
		width: 100%;
	}

	#hdb-footer .search-submit {
		width: 100% !important;
		background-color: var(--secondary-color) !important;	
	}

	@media only screen and (max-width: 992px) {
		#hdb-footer {
			text-align: center;
		}
	}	
</style>

<?php
$logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );

if ( is_active_sidebar( 'footer-widget' ) ) {
	$hdbFooterColumns = "col-lg-4";
} else {
	$hdbFooterColumns = "col-lg-6";
}

?>

<footer id="hdb-footer">	
	<div class="container py-4">
		<div class="row">

			<div class="d-none d-lg-flex <?php echo $hdbFooterColumns ?> align-items-center">
				<?php if ( has_custom_logo() ): ?>
					<a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo $logo[0]; ?>" alt="WordPress" class="d-none d-lg-block w-75"></a>
				<?php else: ?>
					<?php get_search_form() ?>
				<?php endif ?>
			</div>

			<div class="<?php echo $hdbFooterColumns ?> col-12">
				<h3 class="mb-4"><?php _e( 'Important Links', 'howling-dev-basic'); ?></h3>	
				<!-- https://developer.wordpress.org/reference/functions/wp_nav_menu/# -->			
				<?php
						wp_nav_menu( array(
							'menu'				=> 'Short',
							'menu_class'		=> 'px-0',
							'theme_location' 	=> 'important-links',
							'container'       	=> 'div',
    						'container_class' 	=> 'important-links',
    						'container_id'    	=> 'important-links',
						) ); 
					?>		
			</div>			
			

			<?php if ( is_active_sidebar( 'footer-widget' ) ): ?>
				<div class="mt-5 mt-lg-0 col-lg-4 col-12">
					<?php dynamic_sidebar( 'footer-widget' ); ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>