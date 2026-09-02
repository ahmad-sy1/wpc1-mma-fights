<?php
/**
 * functions.php - centrale plek om functies van het thema te registreren.
 * Dit bestand wordt door WordPress automatisch ingeladen.
 */

/**
 * Registreer een navigatiemenu.
 * Daarna kun je in het WordPress-menu (Weergave > Menu's) een menu koppelen
 * aan de locatie "hoofdmenu".
 */
function mma_fights_menus() {
    register_nav_menus( array(
        'hoofdmenu' => 'Hoofdmenu (bovenaan de site)',
    ) );
}
add_action( 'after_setup_theme', 'mma_fights_menus' );

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
