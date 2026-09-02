<?php
/**
 * archive.php - overzichtspagina voor een categorie, tag, auteur of datum.
 * WordPress kiest dit bestand automatisch bij zulke overzichten.
 */

get_header();
?>

<?php // the_archive_title() toont automatisch de juiste kop, bijv. "Categorie: UFC" ?>
<h1><?php the_archive_title(); ?></h1>

<?php
// The Loop: toon per bericht hetzelfde template-part als op de homepage.
if ( have_posts() ) :

    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content' );
    endwhile;

    the_posts_navigation();

else :
    get_template_part( 'template-parts/content-none' );
endif;
?>

<?php
get_footer();
