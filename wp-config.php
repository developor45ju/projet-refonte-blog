<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cfperm' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L(BG)S7hqN;/y%M_O=EZSEY&41fNs<<-S@=3Y%E!-P=5N9d~M0=Zu##rHM!Y+uL[' );
define( 'SECURE_AUTH_KEY',  ';8yd~=TYNlOV}+NZ?Uy>>SWmmHBruF8NyOgPV{9OAj>13=H@HN$>QtkQ8JqZ_!&R' );
define( 'LOGGED_IN_KEY',    'K=zIzp{k^c]b`!bhC[xRJDT]:e$};tQ,>IUQVXn~xsy30m(oQ~EcHme#`|o]$M~{' );
define( 'NONCE_KEY',        '^C{FmL]AY0]gQ</0o, it}qj0UXxa|3h:US/o3 8/c_JW7t^XLZl^%!h e]XmXO:' );
define( 'AUTH_SALT',        'QZnRr>SEtpG~992Ps[Lpy,fXDGVA~fN=0#(4=PjS=<l(Fz;b=%qjCn41.Ne|{0G!' );
define( 'SECURE_AUTH_SALT', 'N0y+JE5FX)!nPYQy?6^cZyw5?3S_@?p3MDh<Eh;uvdDxdT[Y[|=sZ=(I.UjHGvRQ' );
define( 'LOGGED_IN_SALT',   'lnU`k[|Z10CcNuZ&/ujdiE1$pFK ~%GT`ehoI8esZBPGe`HM=it3XAQU`01Pa%HG' );
define( 'NONCE_SALT',       '^6.Vg^r(v!pd2#xKo,-*kiq?ftHs_br/4$ 8[R@@&!GE%}kv*i%4*qyF{J*Bx$U&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WP_CACHE', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
