<?php
/**
 * index.php - standaard-template.
 * WordPress gebruikt dit bestand als er geen specifiekere template is
 * (o.a. voor de homepage en de berichtenlijst).
 */

get_header();
?>

<?php
// The Loop: loop door alle berichten en toon per bericht een korte weergave.
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

    // Navigatie naar oudere/nieuwere berichten
    the_posts_navigation();

else :
    ?>
    <p>Er zijn nog geen berichten gevonden.</p>
    <?php
endif;
?>

<?php
get_footer();
