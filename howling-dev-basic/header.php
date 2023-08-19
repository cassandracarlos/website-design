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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	<?php wp_head(); ?>
</head>
<style>
	/* howling-dev-basic-nav.css */
	#top-nav {
		background-color: var(--primary-color);
		font-family: var(--heading-font);
		font-size: 18px;
		color: white;
		padding: 1.5em 0 !important;
	}

	#top-nav a:link,#top-nav a:visited {
		color: white;
		text-decoration: none;
	}

	#top-nav a:active,#top-nav  a:hover {
		color: var(--secondary-color);
		text-decoration: none !important;
	}

	#top-nav h2 {
		margin: 0;
	}

	#top-nav button {
		color: white;
	}

	#top-nav button:hover {
		color: var(--secondary-color);
	}

	.nav-item.btn-group button{
	text-align: left;
	}

	.nav-item.btn-group button:nth-child(1)::after{
	display: none !important;
	}

	.nav-item.btn-group button:nth-child(1){
	width: calc(100% - 30px) !important;
	}

	.nav-item.btn-group button:nth-child(2){
	width: 30px !important;
	}

	.dropdown-menu {
	background-color: var(--primary-color);
	min-width: 6rem;
	}

	.dropdown-menu ul li.menu-item.btn-group {
	display: inline-flex !important;
	border-bottom: none !important;
	}

	.nav-item .btn:hover{
	border-color: transparent !important;
	}

	.nav-item.active button{
	font-weight: 700 !important;
	}

	.navbar-collapse.collapse.show .nav-item{
	width: 100%;
	display: flex;
	flex-flow: row wrap;
	position: relative;
	}

	.navbar-collapse.collapse.show .nav-item .dropdown-menu.show{
	width: 100% !important;
	}

	.navbar-collapse.collapse.show .nav-item.dropend .dropdown-toggle::after{
	transform: rotate(90deg);
	}

	.btn-group button:nth-child(2) {
			padding-left: 10px !important;
			border-top-left-radius: .25em !important;
	    border-bottom-left-radius: .25em !important;
	}
</style>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a id='skip-nav' class='screenreader-text' href='#hd-content'><?php _e( 'Skip to Content', 'howling-dev-basic'); ?></a>

	<header>
		<nav id="top-nav" class="navbar navbar-expand-xl">
			<div class="container">
				<?php $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ) ?>				
				<?php if ( has_custom_logo() ): ?>
				<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
					<img src=" <?php echo $logo[0] ?>" alt='logo' width='50' height='50'>
				</a>
				<?php endif ?>
				<a href="<?php echo esc_url(home_url()); ?>"><h2><?php bloginfo( 'name' ); ?></h2></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
					<span class="toggle-me">
						<img src="<?php echo esc_url( get_template_directory_uri('template_url')) ?>/img/hd-hamburger.png" width="45" height="45" />
					</span>
				</button>
					
					<!-- https://developer.wordpress.org/reference/functions/wp_nav_menu/# -->
					<?php
						wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container'       => 'div',
    						'container_class' => 'collapse navbar-collapse',
    						'container_id'    => 'navbarResponsive',
    						'menu_class'      => 'navbar-nav ms-auto',
    						'before'		  => '',
    						'after'			  => '',
    						#'walker' 		  => new Howling_Dev_Basic_Walker_Nav_Primary(),
    						'walker' 		  => new quick_walker_nav_menu(),
						) ); 
					?>
				</div>	
		</nav>		
	</header>