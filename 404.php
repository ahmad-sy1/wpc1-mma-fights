<?php
/**
 * 404.php - foutpagina die verschijnt als een URL niet bestaat.
 * WordPress laadt dit bestand automatisch bij een niet-gevonden pagina.
 */

get_header();
?>

<article class="error-404">
    <h1>Pagina niet gevonden (404)</h1>

    <p>De pagina die je zoekt bestaat niet of is verplaatst.</p>

    <?php // Link terug naar de homepagina ?>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Terug naar de homepagina</a></p>
</article>

<?php
get_footer();
