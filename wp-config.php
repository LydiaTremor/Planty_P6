<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eY/riTz2h.0ipm%A.P;RifymLh{rffF~=5ETv<0OS z1Y#vw9u vGJ[L#-VAXS=n' );
define( 'SECURE_AUTH_KEY',  'ADPm^-7P)a%.i5I~dPI-.ixRUCY4Lmh~IvfPt}9yQYS$wM|/ &MxGemF+XfNr^57' );
define( 'LOGGED_IN_KEY',    's,BY`:kHOl,YLCrd~v}bxv<FT.sx^?H%N1*pAv$oLyk1Wp.i[9O;@~U0pcn_vJzq' );
define( 'NONCE_KEY',        'NgXsySAh}?fT}U8V_*JL(>A&AkUhfGO4pH=7-LfI]%>N}odS<$; _8_s+fef((&4' );
define( 'AUTH_SALT',        'ml)iQ~w_SWw)>&pOoSs[AbU^*k5H+$APdR<5fI!yAjAG@-bWGfg~U^OzT5bC&3/h' );
define( 'SECURE_AUTH_SALT', 'l}H;.ejHfAD(fk(7^GI5Ka_3(pQ8&oz#Cz|aXt-.)f2m7TjYbt3R&Yd K%@gQd3S' );
define( 'LOGGED_IN_SALT',   'Ojrw>*}C/*mB<bb@?VvN Ea;SyBc3<5j*jt5M@a(D/?856Lu|AM 5Yum5G&Y{@|.' );
define( 'NONCE_SALT',       ';FZpq-oB[nNO9yHzT^vJce6fc1]}BF#{H?Y2FgF2<8WWGv>`C%ZEUGY=!}Po,t6Z' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
