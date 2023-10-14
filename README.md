# ourcodingcorner.com
Custom WordPress (classic) theme for my blog [Coding Corner](https://ourcodingcorner.com).

---

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

---

[^1]: `<html <?php language_attributes(); ?>>` is a PHP function that outputs the language attributes for the HTML tag — which helps with language localization[^1]