<?php
/**
 * functions.php - centrale plek om functies van het thema te registreren.
 * Dit bestand wordt door WordPress automatisch ingeladen.
 */

/**
 * Basisinstellingen van het thema.
 * Wordt uitgevoerd zodra WordPress het thema heeft geladen.
 */
function mma_fights_setup() {

    // Laat WordPress zelf de <title> van elke pagina bepalen en in wp_head() plaatsen.
    add_theme_support( 'title-tag' );

    // Registreer een navigatiemenu. Daarna kun je in WordPress
    // (Weergave > Menu's) een menu koppelen aan de locatie "hoofdmenu".
    register_nav_menus( array(
        'hoofdmenu' => 'Hoofdmenu (bovenaan de site)',
    ) );
}
add_action( 'after_setup_theme', 'mma_fights_setup' );

/**
 * Registreer een widget-gebied (sidebar).
 * Widgets die je hier in WordPress plaatst, verschijnen in sidebar.php.
 */
function mma_fights_widgets() {
    register_sidebar( array(
        'name'          => 'Zijbalk',
        'id'            => 'zijbalk-1',
        'description'   => 'Widgets voor naast de inhoud.',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-titel">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mma_fights_widgets' );

/**
 * Laad de stylesheet van het thema in.
 * Dit is de nette WordPress-manier: geen hardcoded <link> in header.php,
 * maar via wp_head() zodat WordPress de volgorde en caching regelt.
 */
function mma_fights_styles() {
    wp_enqueue_style(
        'mma-fights-style',                 // unieke naam (handle)
        get_stylesheet_uri(),               // pad naar style.css van het thema
        array(),                            // geen afhankelijkheden
        wp_get_theme()->get( 'Version' )    // versienummer uit de theme header, voor cache-busting
    );
}
add_action( 'wp_enqueue_scripts', 'mma_fights_styles' );
