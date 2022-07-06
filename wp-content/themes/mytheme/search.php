<?php

    // Initialisation de variables 

    $s=get_search_query();
    $args = array(
        's' =>$s
    );
    $the_query = new WP_Query($args); // Capture les recherches selon ce que tappe le visiteur dans la barre de recherche
?>

<?php get_header(); ?>

<div class='contenu-page'>
    <div class='liste-cartes'>

        <!-- Voir ce que tappe le visiteur si il y a des articles -->

        <?php if($the_query->have_posts()): ?>
            <?php if($s == '') {

                // Ne retourne rien

            } else {

                // Retoune une phrase

                echo '<h2>Vous avez recherché ' . get_query_var('s') . '</h2>';
            } ?>

            <!-- Parcours les articles de la recherche -->

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

<div class="pagination">
    <div class="page-precedente">
        <?php previous_posts_link('Page précédente'); ?>
    </div>
    <div class="page-suivante">
        <?php next_posts_link('Page suivante'); ?>
    </div>
</div>

<?php get_footer(); ?>