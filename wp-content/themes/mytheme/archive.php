<?php get_header(); ?>
<div class='contenu-page'>
    <?php if(have_posts()): ?>
        <div class='liste-cartes'>
            <?php the_archive_title('<h1 class="titre-categorie">', '</h1>'); ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="carte-article">
                    <div class='info-post'>
                        <p class='publi-par'>Publication par: <?php the_author(); ?></p>
                        <p class='publi-du'>Publication du: <?php the_date(); ?></p> 
                        <p class='cate-de'>Catégorie de: <?php the_category(' '); ?></p>
                    </div>
                    <div class='article'>
                        <h1 class='titre-article'><a href=<?= the_permalink(); ?>><?php the_title(); ?></a></h1>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
                    </div>
                </div>
                <hr />
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
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