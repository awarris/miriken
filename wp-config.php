<?php
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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_miriken' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8|BI@==zw -g8X|h?l[z!4-J+}z~I<n6+tU %@Cc5!?jCT*J[>]:)ldIf,_^316l' );
define( 'SECURE_AUTH_KEY',  'oM_*j9A7`8|tC$aIQXB-l>M|Zs7M)1P;@qLVOs=_9dl2_QovtOs%rmqcSnI:^(gT' );
define( 'LOGGED_IN_KEY',    '~CZqp&rW=+^14,:`RAl6H!Y *YH@d3@NLD]}#XC |Wyf>^ !e8|C0Q]UAhVjihHi' );
define( 'NONCE_KEY',        'Yx^.1uI0MY82VWx/G`a{mr^[S(5i<vwkY$Q#41b&4tO vYiY_2*f&u7|keax-36X' );
define( 'AUTH_SALT',        '~G2-QD41v^Wp{l3ZghcO6xd[q>r+7?o-31Iig&PSm?<qOy4]%,#~3X/3#EQ Nm;)' );
define( 'SECURE_AUTH_SALT', '=)b!a)d=1b_)%zAj[X}D3xMfa*J<Q`G!v-QGw.L>J[8+1*/L%w2 9 nDMD}&Qfz|' );
define( 'LOGGED_IN_SALT',   '?F8=CShYs1oZRa:c!cDO$t+swg4wdFd~>jGvPHB9S(~pLp7IA!b?^KLF({jWz4MI' );
define( 'NONCE_SALT',       '|ohz8{S=9LP1d=_r68?$DM^4I{R~ndA/_$Jgo~S}mo]QaC=k$~Tr8:Fs5q _me0R' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_miriken';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
