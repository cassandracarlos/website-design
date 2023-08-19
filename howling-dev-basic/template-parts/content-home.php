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
<?php 
if( has_post_thumbnail() ){
   $hdBlogCardClass = "hd-blog-card-left";
} else {
   $hdBlogCardClass = "hd-blog-card-whole";
}
?>   
<article id="post-<?php the_ID(); ?>" class="<?php echo esc_attr( implode( ' ', get_post_class() ) ) ?>">
   <div class="hd-blog-card">
      <div class="<?php echo $hdBlogCardClass ?>">
         <h3 class="hd-blog-card-category">
            <?php
            $category_count = 0;
            foreach ((get_the_category()) as $category) {
               $category_count++;
               echo '<a href="' . home_url() . '/?cat=' . $category->cat_ID . '">' . $category->cat_name . '</a>';                           
               if ($category_count < count(get_the_category())) {
                 echo __( " | ", "howling-dev-basic");
               }
            }
            ?></h3>

         <h2 class="hd-blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <?php the_excerpt(); ?>
         <a href="<?php the_permalink(); ?>"><?php _e( 'Read more...', 'howling-dev-basic' ) ?></a>
         <p class="hd-blog-card-meta"><?php _e( 'By ', 'howling-dev-basic') ?><a href="<?php echo get_author_posts_url( get_the_author_meta('ID')) ?>"><?php the_author(); ?></a><?php _e( ' | ', 'howling-dev-basic' ); echo get_the_date(); ?></p>
      </div>

      <?php if( has_post_thumbnail()): ?>
         <div class="hd-blog-card-right">
            <div class="hd-post-image">
               <?php echo the_post_thumbnail( 'medium' ); ?>
            </div>
         </div>
      <?php else: ?>
         <div class="hd-blog-card-right-no-img"></div>       
      <?php endif; ?> 

   </div><!-- End hd-blog-card -->
</article>