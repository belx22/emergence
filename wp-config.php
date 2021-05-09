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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '^T:NzSzY6RF<CHW44S.QI%AcZ{}3d#6oP[teisz~I=Wsz)b{[kEZMDDZ21l>tWG7');
define('SECURE_AUTH_KEY',  'qI *4-EYc)N|xhOx8O(-v#^YkCpro*V{c*d.N~+l1#v{_KTJD?+9EzLCS`87=aT=');
define('LOGGED_IN_KEY',    'M%*x:Xxd+iEK&ffe5lIdb;}q{zKVn$SiXS7<avhhr;-Q!s]LbJ#iH3MEmnX9&nB^');
define('NONCE_KEY',        '7i)RM6#79IVZoa=M&$iu)fx0Sy_:yf<#&:L#-(+>zf5y2D+CYs${vn-F~wud92)w');
define('AUTH_SALT',        '8VH$1_[2airLBmhP3zV)n:]c&sB4P}jq_x}SE%B`xK~@)4]aI6Rf_-^?XdR>6^:j');
define('SECURE_AUTH_SALT', 'kK yoB1ey(S_Le=0AgL=Nyo$jZe9%@OS%x(d5kVORW<0`; kTSp5y~3}$Ujc{=6p');
define('LOGGED_IN_SALT',   'E*(nj!#^1dWr`<ACT2.`:e6T5&KiGwH)T7S~-Ur(J0aYUINIgzb}L}PV/48):4N7');
define('NONCE_SALT',       '6Dp(ymh8WV~=K h,g=7:5I[*N*;?+N:7H(gsPuvGE6<:F_ 4)L(i<Poh~B/zF}G1');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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