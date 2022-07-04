<?php
/**
 * Template Name: Connexion
 */
?>

<!-- Gestion des erreurs -->

<?php
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<?php get_header(); ?>

<!-- Formulaire de connexion -->

<form action="<?= home_url()  . '/wp-login'; ?>" method="post" class="form-connection">
    <img src="<?= get_template_directory_uri() . '/images/logo_couronnerie.png'; ?>" alt="Logo de du CFPERM la Couronnerie" class="logo-couronnerie-form" />
        <?php if(strpos($url, 'login/?login=empty') !== false): ?>
            <div class='login-failed'>L'identifiant et le mot de passe sont vide</div>
        <?php endif ?>
        <?php if(strpos($url, 'login/?login=failed') !== false): ?>
            <div class='login-failed'>Mot de passe ou nom d'utilisateur incorrect</div>
        <?php endif ?> 
        <label for="user_login">Votre identifiant:
            <input type="text" id="user_login" value="" name="log" class="user-login" />
            <?php if(strpos($url, 'login/?user=empty') !== false): ?>
                <div class='login-failed'>Champs d'identifiant vide</div>
            <?php endif ?>
        </label>
        
        <label for="user_password">Votre mot de passe:
            <input type="password" id="user_password" value="" name="pwd" class="user-password" />
            <?php if(strpos($url, 'login/?pwd=empty') !== false): ?>
                <div class='login-failed'>Champs de mote de passe vide</div>
            <?php endif ?>
        </label>        
        
        <label for="rememberme">Se souvenir de moi
            <input type="checkbox" id="rememberme" name="rememberme" class="user-rememberme" value="1" />
        </label>

        <input type="submit" value="Se connecter" class="user-submit" />
        <input type="hidden" value="<?= home_url('/'); ?>" name="redirect_to" />

    </form>

<?php get_footer(); ?>