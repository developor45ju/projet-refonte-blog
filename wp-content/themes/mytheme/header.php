<!DOCTYPE html>
<html lang="<?= language_attributes('html'); ?>" style="height: 100%;">
<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(''); ?>>
    <?php wp_body_open(); ?>
    <?php if(is_page_template('tpl-login.php')): ?>
        <style>
            .copyright-year {
                display: none;
            }
        </style>
    <?php endif; ?>
    <?php if(is_home() || is_archive() || is_single()): ?>
        <header class="header">
            <a href="<?= home_url('/'); ?>">
                <img src="<?= get_template_directory_uri() . '/images/logo_couronnerie.png'; ?>" alt="Logo de l'APRIJSO la Couronnerie" />
            </a>
            <div class="titre-blog" id="titre-blog">
                CFPERM <br />
                Un blog géré par l'établissement
            </div>
            <?php if(is_user_logged_in()) : ?>
                <nav class="nav-bar">
                    <a href="<?= home_url() . '/wp-admin'; ?>">Administrateur</a>
                    |
                    <a href="<?= wp_logout_url(home_url('/')); ?>">Déconnexion</a>
                </nav>
            <?php else: ?>
                <p class="nav-bar"><a href="login">Connexion</a></p>
            <?php endif; ?>
            <form role="search" method="get" class="search-form" action="<?php esc_url(home_url()); ?>">
                <label>
                    <span class="screen-reader-text"><?php _x('Search for:', 'label'); ?></span>
                    <input type="search" placeholder="Recherche" class="search-field" placeholder="<?php esc_attr_x('Search &hellip;', 'placeholder'); ?>" value="<?php get_search_query(); ?>" name="s" />
                    <input type="image" src="<?= get_template_directory_uri() . '/images/loupe_de_recherche.svg'; ?>" alt="Loupe de recherche" class="search-submit" value="<?php esc_attr_x('Search', 'submit button'); ?>" />
                </label>
            </form>
        </header>
        <?php endif ?>
    
    