<?php
/**
 * template-parts/content.php - één bericht in een lijst.
 * Wordt hergebruikt door index.php en archive.php via get_template_part().
 */
?>
<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-meta">Geplaatst op <?php the_time( 'j F Y' ); ?></p>
    <div class="post-excerpt"><?php the_excerpt(); ?></div>
</article>
