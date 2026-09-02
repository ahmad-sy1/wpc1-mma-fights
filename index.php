<?php
/**
 * index.php - standaard-template.
 * WordPress gebruikt dit bestand als er geen specifiekere template is
 * (o.a. voor de homepage en de berichtenlijst).
 */

get_header();
?>

<?php
// The Loop: loop door alle berichten en toon per bericht het template-part "content".
if ( have_posts() ) :

    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content' );
    endwhile;

    // Navigatie naar oudere/nieuwere berichten
    the_posts_navigation();

else :
    // Geen berichten: toon het template-part "content-none".
    get_template_part( 'template-parts/content-none' );
endif;
?>

<?php
get_sidebar();
get_footer();
