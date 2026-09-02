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
