<?php
/**
 * single.php - toont één enkel bericht op een eigen pagina.
 * WordPress kiest dit bestand automatisch bij het openen van een bericht.
 */

get_header();
?>

<?php
// The Loop: bij een enkel bericht zit er precies één item in de lus.
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>

            <p class="post-meta">
                Geplaatst op <?php the_time( 'j F Y' ); ?> door <?php the_author(); ?>
            </p>

            <?php // Volledige inhoud van het bericht ?>
            <div class="post-content"><?php the_content(); ?></div>

            <p class="post-categories">Categorie: <?php the_category( ', ' ); ?></p>
        </article>

        <?php // Links naar vorige/volgende bericht ?>
        <?php the_post_navigation(); ?>

        <?php
    endwhile;
endif;
?>

<?php
get_sidebar();
get_footer();
