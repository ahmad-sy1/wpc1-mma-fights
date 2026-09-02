<?php
/**
 * page.php - template voor statische pagina's (bijv. "Over" of "Contact").
 * WordPress kiest dit bestand automatisch bij het openen van een pagina.
 */

get_header();
?>

<?php
// The Loop: een pagina bevat precies één item.
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>

            <?php // Volledige inhoud van de pagina. Geen datum, want die is bij een pagina niet relevant. ?>
            <div class="page-content"><?php the_content(); ?></div>
        </article>

        <?php
    endwhile;
endif;
?>

<?php
get_footer();
