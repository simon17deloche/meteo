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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'dd[O3/I^YjenFHmYlTy:.vVsnx#%ozmG{*=b_`h*J62da[3P _sTao!w1En0D%[m' );
define( 'SECURE_AUTH_KEY',  '1DlsI?2irzk}T0]n$TAo`T;2Zh-O83#s.HtQj:h~Q$?Bk#+`fj?MY$[B2tMAX*O>' );
define( 'LOGGED_IN_KEY',    '0U$hF;)+XL3Im>JH%^.^nQJ2e*a-%L}_.]r!=E{/9#l#)*mFR(JP?[q$B85jF$cZ' );
define( 'NONCE_KEY',        '-T1rYckh*%ngFfJ.g#J&h^x8XOByIfUsfV*MgE+(@WBW@;ad[t,Wt@v[ 3@[_:9.' );
define( 'AUTH_SALT',        'kKrlQLuJ%hKe4B4_2z}urbbl~>tu8wj8h?3#vK(yS3VC=ZV[,a>1]?u%/<wbblS7' );
define( 'SECURE_AUTH_SALT', '`C2:Y*4CDewP#OV=@]- )EF@+N(6o7^)#A4~ =ZkBM$DeE^R>4Vx&NU=`A?&(xKS' );
define( 'LOGGED_IN_SALT',   'xlHI`W+ul`@@ZTk?<].j7sk&F#lU|q|3 ~#tsG&aJ*;g_s;)Mu.+m8Z-b#^vDj,K' );
define( 'NONCE_SALT',       'O05c{=[|3%^9*Y(S.Ki$K-gTM.uk:ME2B#qzMU+Kc|t):^n*;Xh>E014Ep6.w)c&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_fjg_';

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
