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
	#hdb-footer {
		margin-top: 0 !important;
	}

	/* 404.css */
	.bg-404 {
		background-image: url("<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-404.jpg ");
		min-height: 500px;
	}

	.box-404 {
		width: 400px;
		height: 200px;
		border-radius: 25px;
		background-color: var(--tertiary-color);
		color: white;
	}

	@media only screen and (max-width: 420px) {
		.box-404 {
			width: 80%;		
		}
	}

	.bg-404 {
		
	}	
</style>


<?php get_header(); ?>
	<article id="page-404" class="page-404">
		<div id="hd-content">
			<div class="bg-404 d-flex align-items-center justify-content-center">
				<div class="box-404 bg-third cl-white text-center d-flex align-items-center justify-content-center">
					<h2 class="m-0">Page Not Found!</h2>	
				</div>
			</div>
		</div>
	</article>
<?php get_footer(); ?>