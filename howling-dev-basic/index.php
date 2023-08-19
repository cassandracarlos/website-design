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

<div class="container py-5">
	<div class="row">
		<div class="col">			
			<?php echo "<h3>" . get_the_title() . "</h3>"; ?>
			<?php the_content(); ?>			
		</div>
	</div>
</div>

<?php get_footer(); ?>