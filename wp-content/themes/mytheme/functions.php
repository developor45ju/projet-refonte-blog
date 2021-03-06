<?php

// Ajoute une action après l'activation du thème 

add_action('after_setup_theme', 'montheme_setup');

    if(!function_exists('montheme_setup')):
        /*
        *
        *@package MonTheme
        *@since MonTheme 0.1
        *
        */
        
        
        function montheme_setup() {
            add_theme_support( 'automatic-feed-links' );
            add_theme_support('title-tag');
            add_theme_support('custom-logo', array(
                'height' => 500,
                'width' => 500,
                'flex-width' => true,
                'flex-height' => true,
            ));
            
            register_sidebar(array(
                "id" => "primary",
                "name" => __('Primary Sidebar'),
                "before_widget" => "<div class='%2\$s'>",
                "after_widget" => "</div>",
                "before_title" => "<p class='sidebar-widget-title'>",
                "after_title" => "</p>"
            ));
            
            add_theme_support( 'post-thumbnails');
            add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ));
            add_theme_support( 'editor-color-palette', [
                [ 'name' => 'blue', 'slug' => 'blue', 'color' => '#48ADD8' ],
                [ 'name' => 'pink', 'slug' => 'pink', 'color' => '#FF2952' ],
                [ 'name' => 'green', 'slug' => 'green', 'color' => '#83BD71' ],
	        ]);
        }
    endif;

    // Ajoute une action après les association de fichiers de styles ou de scripts

    add_action('wp_enqueue_scripts', 'montheme_style_and_script');

    function montheme_style_and_script() {
        wp_enqueue_style('montheme_style1', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('montheme_style2', get_template_directory_uri() . '/css/style_form.css');
        wp_enqueue_style('montheme_style3', get_template_directory_uri() . '/css/style_page_introuvable.css');
        wp_enqueue_style('montheme_style4', get_template_directory_uri() . '/css/style_form_commentaire.css');
        wp_enqueue_script('montheme_script', get_template_directory_uri() . '/js/main.js', [], false, true);
    }

    // Ajoute une action après les erreurs de connexions

    add_action( 'wp_authenticate', '_catch_empty_user', 1, 2 );

    function _catch_empty_user( $username, $pwd ) {
        if (empty($pwd)&&empty($username)) {
            wp_safe_redirect(home_url().'/login/?login=empty');
            exit();
        }  if ( empty( $username )) {
            wp_safe_redirect(home_url() . '/login/?user=empty' );
            exit();
        }
        if (empty($pwd)) {
            wp_safe_redirect(home_url().'/login/?pwd=empty');
            exit();
        }
    }

    // Ajoute une action si l'identifiant et le mot de passe ne correspond pas

    add_action( 'wp_login_failed', 'pippin_login_fail' );

    function pippin_login_fail( $username ) {
        $referrer = $_SERVER['HTTP_REFERER'];
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
            wp_redirect(home_url() . '/login/?login=failed' );
            exit;
        }
    }

    // Ajoute un filtres qui enlève la bar d'administration quand on s'identifie

    add_filter('show_admin_bar', '__return_false');