<?php
/**
 * The template for displaying 404 pages (not found).
 * 
 * @package Edison
 */

 get_header(); ?>

    <main id="main" class="site-main" role="main">
        <section class="error-404 not-found text-center">
            <header class="page-header">
                <h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found. ' ); ?></h2>
            </header>
        </section>
    </main>

 <?php get_footer(); ?>