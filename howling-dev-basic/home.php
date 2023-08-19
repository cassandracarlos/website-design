<?php 
/*****************************************
*  License: GPLv3 or later
*  License URI: http://www.gnu.org/licenses/gpl-3.0.html
*  
*  Howling Dev Basic WordPress Theme, Copyright 2022 Dan Hunt
*  howling-dev-basic WordPress Theme, Copyright 2022 Dan Hunt
*  howling-dev-basic is distributed under the terms of the GNU GPL
*  
***********************************************************************
*  
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*  
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
*  GNU General Public License for more details.
*  
*  You should have received a copy of the GNU General Public License
*  along with this program. If not, see < http://www.gnu.org/licenses/ >.
*     
***********************************************************************
*****************************************/
?>
<?php get_header(); ?>
   <div class="main">

      <div class="hd-title">
         <div class="container">
            <div class="row">
               <div class="col">
                  <h2 class="title-text"><?php _e( 'A Blog Page', 'howling-dev-basic'); ?></h2>
               </div>
            </div>
         </div>
      </div>

      <div id="hd-content">
         <div class="container">
            <div class="row">
               <div class="col">
                  <?php
                        while( have_posts() ):
                           the_post();
                           get_template_part( 'template-parts/content-home', get_post_format() );

                           // Display a comment form if this post is open to comments
                           if( comments_open() || get_comments_number() ):                     
                              comments_template();
                           endif;
                        endwhile;
                        ?>         
               </div>      
            </div>

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
                        )
                     );
                  ?>
                  </div>
               </div>
            </div>

         </div><!-- End .container -->
      </div><!-- End .hd-content -->
      
   </div><!-- End .main -->
<?php get_footer(); ?>