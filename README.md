# ourcodingcorner.com
Custom WordPress (classic) theme for my blog [Coding Corner](https://ourcodingcorner.com).

## index.php

```
<!DOCTYPE html>
<html <?php lang>>
```

* `<!DOCTYPE html>` is an HTML5 document type declaration tells the browser that this is an HTML5 document
* `<html <?php language_attributes(); ?>>` is a PHP function that outputs the language attributes for the HTML tag — which helps with language localization[^1]

```
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|', true, 'left' ); ?></title>
    <?php wp_head(); ?>
</head>
```

* `<head>` section contains meta-information about the document, such as character encoding, viewport settings, and the document title
* `<meta charset="<?php bloginfo( 'charset' ); >` sets the character encoding of the document to the one defined in WordPress settings to the one defined in the WordPress settings
*  `<meta name="viewport" content="width=device-width, initial-scale=1">` sets the viewport settings, which is crucial for making the site responsive to different screen sizes
* `<title><?php bloginfo( 'name' ); ?><?php wp_title( 'I', true, 'left' ); ?></title>` generates the document title — includes the site name defined in WordPress settings and the post or page title (if applicable)
* `<?php wp_head(); ?>` is a hook[^2] for adding additional elements — like stylesheets or scripts — to the `<head>` section (plugins and themes can use this hook to include necessary resources)

```
<body <?php body_class(); ?>>
```
* `<body <?php body_class(); ?>>` opens the body section and applies classes based on the type of page being displayed — single post, archive, etc  — (this is useful for applying specific styles based on the page type)

```
<header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p><?php bloginfo( 'description' ); ?></p>
</header>
```

* `<header>` is the header section of your website.
* `<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>`  displays the site's name as a link to the home page. home_url() gets the URL of the site's home page esc_url() is a security measure that ensures the URL is properly formatted
* `<p><?php bloginfo( 'description' ); ?></p>` displays the site's tagline or description

```
<nav>
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>
```

* `<nav>` is the navigation section
* `<?php wp_nav_menu( array ( 'theme_location' => 'primary' ) ); ?>` is a WordPress function that generates a navigation menu. It specifies that it should use the menu location called 'primary'. This menu location should be defined in the theme's functions.php file

```
<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</main>
<aside>
    <?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
<footer>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
```

---

[^1]: `<html <?php language_attributes(); ?>>` is a PHP function that outputs the language attributes for the HTML tag — which helps with language localization
[^2]: `<?php wp_head(); ?>` is a hook for adding additional elements — like stylesheets or scripts — to the `<head>` section (plugins and themes can use this hook to include necessary resources)
[^3]:
[^4]:
[^5]:
[^6]: