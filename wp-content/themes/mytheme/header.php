<!-- Initialisation d'un document de type HTML (HyperText Langage Markup) = Language de balisage hyper texte -->

<!DOCTYPE html> 
<html <?php language_attributes('html'); ?>>

<!-- Paramétrage de la page HTML qui permet d'inclure (le titre, lui inclure des fichiers CSS, JS, etc... -->

<head>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<!-- Déclaration du corq de la page (Le contenu) -->

<body <?php body_class(''); ?>>
    <?php wp_body_open(); ?>

    <!-- Si le visiteur est dans le template (page) de la connexion -->

    <?php if(is_page_template('tpl-login.php')): ?>

        <!-- Faire disparaitre la mention copyright avec du CSS (Cascading Style Sheet) = Feuille de style en cascade -->

        <style>
            .copyright-year {
                display: none;
            }
        </style>
    <?php endif; ?>

    <!-- Si le visiteur est sur la page principe, archivage, single ou recherche -->

    <?php if(is_home() || is_archive() || is_single() || is_search()): ?>

        <!-- Inclu moi le contenu çi-dessous -->

        <header class="header">
            <a href="<?= home_url('/'); ?>">
                <img src="<?= get_template_directory_uri() . '/images/logo_couronnerie.png'; ?>" alt="Logo de l'APRIJSO la Couronnerie" />
            </a>
            <div class="titre-blog" id="titre-blog">
                CFPERM <br />
                Un blog géré par l'établissement
            </div>
            <div class="menu-hamburger" id="menu-hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Si on est connecté à l'administrateur -->

            <?php if(is_user_logged_in()) : ?>

                <!-- Affiche moi un menu qui renvoi uun bouton dans le back-office (L'interface) de WordPress et un bouton déconnexion -->

                <nav class="nav-bar">
                    <a href="<?= home_url() . '/wp-admin'; ?>">Administrateur</a>
                    |
                    <a href="<?= wp_logout_url(home_url('/')); ?>">Déconnexion</a>
                </nav>
            <?php else: ?>

                <!-- Affiche un menu qui renvoi un bouton connexion dans le cas contraire  -->

                <p class="nav-bar"><a href="login">Connexion</a></p>
            <?php endif; ?>

            <!-- Fonction qui retoure l'ajout du template search.php (Barre de recherche) -->

            <?php get_search_form(); ?>
        <?php endif ?>
        </header>
    
    