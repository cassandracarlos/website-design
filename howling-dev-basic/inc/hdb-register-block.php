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
<?php 
function hdb_register_block_style() {
	register_block_style(
		'core/heading',
		array(
			'name'  => 'boldest',
			'label' => __( 'Boldest', 'howling-dev-basic' ),
		)
	);
}
add_action( 'init', 'hdb_register_block_style' );

function hdb_register_hero_pattern() {
	$content = "<!-- wp:columns -->
				<div class=\"wp-block-columns\"><!-- wp:column -->
				<div class=\"wp-block-column\"><!-- wp:heading -->
				<h2>" . esc_html__( "Feature 1", "howling-dev-basic" ) . "</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>" . esc_html__( "Short description text", "howling-dev-basic" ) . "</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class=\"wp-block-column\"><!-- wp:heading -->
				<h2>" . esc_html__( "Feature 2", "howling-dev-basic" ) . "</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>" . esc_html__( "Short description text", "howling-dev-basic" ) . "</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class=\"wp-block-column\"><!-- wp:heading -->
				<h2>" . esc_html__( "Feature 3", "howling-dev-basic" ) . "</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>" . esc_html__( "Short description text", "howling-dev-basic" ) . "</p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->";	
	

	register_block_pattern(
    'howling-dev-basic/three-features',
    array(
        'title'       => __( 'Three Features', 'howling-dev-basic' ),
        'description' => _x( 'Three columns to display features with a heading and brief description', 'Block pattern description', 'howling-dev-basic' ),
        'content'     => $content,
    )
);
}
add_action( 'init', 'hdb_register_hero_pattern' );
?>