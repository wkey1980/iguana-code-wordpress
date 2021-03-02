<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <!-- Skip to content -->
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to Content', 'iguana-code' ); ?>
    </a>


    <header id="masthead" class="site-header">




    </header><!-- end #masthead .site-header -->

    <div id="content" class="site-content">








    </div><!-- end #content .site-content -->

</div><!-- end #page .site -->



