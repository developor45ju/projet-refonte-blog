<?php
    $s=get_search_query();
    $args = array(
        's' =>$s
    );
    $the_query = new WP_Query( $args );
?>
<?php get_header(); ?>
<div class='contenu-page'>
    <div class='liste-cartes'>
        <?php if($the_query->have_posts()): ?>
            <?php if($s == '') {
            } else {
                echo '<h2>Vous avez recherché ' . get_query_var('s') . '</h2>';
            } ?>
            <?php while($the_query->have_posts()):
                $the_query->the_post();
            ?>
                <div class="carte-article">
                    <div class="info-cartes">
                        <p class='publi-par'>Publication par: <?php the_author(); ?></p>
                        <p class='publi-du'>Publication du: <?php the_date(); ?></p> 
                        <p class='cate-de'>Catégorie de: <?php the_category(' '); ?></p>
                    </div>
                    <div class='article'>
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <a href="<?= the_permalink(); ?>">Lire la suite</a>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <p>Pas de résultat</p>
            <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>