<?php
/**
 * The template for displaying all single posts.
 * 
 * @package Edison
 */

 get_header(); ?>

    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
    </main>

 <?php get_footer(); ?>