<?php
/**
 * sidebar.php - toont het widget-gebied "zijbalk-1" naast de inhoud.
 * Wordt ingeladen met get_sidebar().
 */

// Toon niets als er geen widgets in de zijbalk staan.
if ( is_active_sidebar( 'zijbalk-1' ) ) :
    ?>
    <aside class="site-sidebar">
        <?php dynamic_sidebar( 'zijbalk-1' ); ?>
    </aside>
    <?php
endif;
