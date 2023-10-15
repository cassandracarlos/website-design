<!--page.php: A template file for displaying single pages; it fetches and displays the content of individual pages on your site.-->
<?php get_header(); ?>

<div id="content">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>