<?php
/**
 * header.php - bovenkant van elke pagina (head + begin body).
 * Wordt ingeladen met get_header().
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // wp_head() is verplicht: WordPress en plugins hangen hier CSS/JS aan vast ?>
    <?php wp_head(); ?>
</head>

<?php // body_class() zet automatisch context-classes op de body (home, single, page, ...) ?>
<body <?php body_class(); ?>>

<header class="site-header">
    <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    </p>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>

    <?php // Toont het menu dat in WordPress aan de locatie "hoofdmenu" is gekoppeld ?>
    <nav class="site-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'hoofdmenu' ) ); ?>
    </nav>
</header>

<?php // Vanaf hier begint de inhoud die per template verschilt ?>
<main class="site-content">
