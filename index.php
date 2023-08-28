<?php
/**
 * The main template file.
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * IT is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Edison
 * 
 */

 get_header(); ?>

    <main id="main" class="site-main" role="main">
        
        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            
            <?php while ( have_posts() ) : the_post(); ?>

             <?php get_template_part( 'content', get_post_format() );?>

            <?php endwhile; ?>

            <?php edison_nav(); ?>

            <?php else : ?>

            d<?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

    </main>

<?php get_footer(); ?>