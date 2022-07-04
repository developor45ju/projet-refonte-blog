<?php get_header(); ?>
<div class='contenu-page'>
    <div class='liste-cartes'>
        <?php the_post(); ?>
        <div class="carte-article">
            <div class='info-post'>
                <p class='publi-par'>Publication par: <?php the_author(); ?></p>
                <p class='publi-du'>Publication du: <?php the_date(); ?></p> 
                <p class='cate-de'>Catégorie de: <?php the_category(' '); ?></p>
            </div>
            <div class='article'>
                <h1 class='titre-article'><a href=<?= the_permalink(); ?>><?php the_title(); ?></a></h1>
                <?php                
                the_content();

                // Si il y a des commentaire

                if(comments_open() || get_comments_number()):
                    comments_template();
                endif ?> 
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>