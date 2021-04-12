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
define( 'DB_NAME', "ocr_projet_2" );


/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "jdevuono" );


/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "jacques54" );


/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         'o]W0{L$RXzA`xxX#k*?9QG=[g=5S 41QC2lh{nXFLlnaw?0;%o]#)kIk*2`]dP)]' );

define( 'SECURE_AUTH_KEY',  ' {sll&=a!6za*e&J0,3?UY&u)Qcz!SVaQ]IdUy|7ogc##]IvjLlMj0{@k#;W<Pwo' );

define( 'LOGGED_IN_KEY',    ']bz(,rXd2H7CRKH?a#Q]!/~*Zgk|;b5Uy<9XF9TX22{=(8woHWUQNl3{ tFu}`Bi' );

define( 'NONCE_KEY',        '7:ny7V&Q_^$q8H/(82zX9u}F8iDNbW%c5#+`3/XuNmO6NoK:pJ}8|RU}lYK/ZyY3' );

define( 'AUTH_SALT',        'GJ:*R&HfEm3dKOb)wB|e)duLJ7^asljkg>p.;On+.VjYC!%+PNFoQ%>pC,2w],eU' );

define( 'SECURE_AUTH_SALT', 'u}P3XqK*LMD%Fw2v0s~7r).~8LUx>ShRyP,;z?)p|1|=E=!Z4S+LriaQ<d4IqgPP' );

define( 'LOGGED_IN_SALT',   '7R=OnT,W}^3 k;P?63M*,!>1UaZ?EQ-ds&LU+ycSMe3O+kAFriB(XyqEm@!W-6IU' );

define( 'NONCE_SALT',       'scETD $fI<zswx&qKd3r@*Syv[vHq[E6 >z`tJBshTcmkgMZd?odZYzng&@.=2HA' );

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
