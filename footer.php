<?php
/**
 * footer.php - onderkant van elke pagina (einde body).
 * Wordt ingeladen met get_footer().
 */
?>
</main>

<footer class="site-footer">
    <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> &ndash; site over aankomende MMA-gevechten</p>
</footer>

<?php // wp_footer() is verplicht: plugins plaatsen hier hun JavaScript ?>
<?php wp_footer(); ?>

</body>
</html>
