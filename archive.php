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
// The Loop: toon alle berichten die bij dit archief horen.
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-meta">Geplaatst op <?php the_time( 'j F Y' ); ?></p>
            <div class="post-excerpt"><?php the_excerpt(); ?></div>
        </article>

        <?php
    endwhile;

    the_posts_navigation();

else :
    ?>
    <p>Er zijn geen berichten in dit overzicht.</p>
    <?php
endif;
?>

<?php
get_footer();
