<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'stereopress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!BbwUfk&nlvWiX(d`C5/Ws~odoECGee=i*s.51Hku]o on#|?Hb!Gi?V ]qAjgv?');
define('SECURE_AUTH_KEY',  '7ZBcg^`az=)8({-CGx?rRg$?{x[70ki,D<Z#Fvv}uKNa`VX~<U0dDn%2/f1fy4zj');
define('LOGGED_IN_KEY',    '#s3;^=N{,XvmCC8dA9RS2DCH03:FZ}|meeEoo6Y=#~S::GCi*s;]G85;UV{i_`K|');
define('NONCE_KEY',        '^3:NNFUx5Y)LiV_WuSJ>e1l*T_68L=F)`$Z`Wln0Hy yk50<vj`W|0mpG@Z/9oYa');
define('AUTH_SALT',        'x{ uNY8I1E@^&OI_WYP&pe<p1>Gqu,pg?UUqN`v-FojJ*[yk$7SKkm`Ex`Psgk+M');
define('SECURE_AUTH_SALT', '?/b5_}d89TU}bzo?++3b+t+*8j:|iB~j{[.-PMof$&`m1Fk*{,/ok%RrppcPhSW<');
define('LOGGED_IN_SALT',   '*X|iEz> +_UdQ|wJ0)}4V:C/?smfv@J,=2Jo7 !tSL3O,)+!$k`f1VY~}RLg0Cmv');
define('NONCE_SALT',       '>=9k Cn2UOR0Z:UdWpf.>}.t>%~Q?X~(BBiZ(@=%X!0Y`z[QL*tH,J3;}HJAoe7W');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'stereo_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');