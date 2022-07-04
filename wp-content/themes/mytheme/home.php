<?php get_header(); ?>


<div class='contenu-page'>

    <!-- Si il y a un ou plusieurs articles -->
    
    <?php if(have_posts()): ?>
        <div class='liste-cartes'>
            
            <!-- Boucles les articles -->
            
            <?php while(have_posts()): the_post(); ?>

                <!-- Contenu de chaque article -->

                <div class="carte-article">
                    <div class='info-post'>
                        <p class='publi-par'>Publication par: <?php the_author(); ?></p>
                        <p class='publi-du'>Publication du: <?php the_date(); ?></p> 
                        <p class='cate-de'>Catégorie de: <?php the_category(' '); ?></p>
                    </div>
                    <div class='article'>
                        <h1 class='titre-article'><a href=<?= the_permalink(); ?>><?php the_title(); ?></a></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <!-- Afficher la sidebar (Barre latérale) -->

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