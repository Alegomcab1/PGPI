<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ASR%6-O>441)ij&z*Pg8+y`~A>#lC{Htcs@0W>Zu4zyV?/;+YV!^?_{6oxEZ0:!-' );
define( 'SECURE_AUTH_KEY',  'S-3C]stMx%qgKXaCt&(-&+3)&08v6FEz_[63cdC|^S)^lR_sBGU~},dyN(>tB=iY' );
define( 'LOGGED_IN_KEY',    'I?Mw(K~>R<{HrEk*H(y@lCL<(-3-gg{^Vm7Omn.`=WD[8EwI[TgS#DII/:,Vge2[' );
define( 'NONCE_KEY',        '<-CNIViP?oWrB=Yr?=PzMBEsPdh?Ck@/Qy`AsqaAu#7O;2jE{w5l?$8bz^+(7-8N' );
define( 'AUTH_SALT',        'd}72uE(;eEz`%D.+^I[Iy>8eBfX3$;A4WU|hF~*Jv!DsS~:wDVWSKik&[[c,CPEZ' );
define( 'SECURE_AUTH_SALT', 'Jrnk9|8N$te6y6Q*p~u2J/xL$=*b>S^tjV`eRA?+Q+M%s5G^~A^`exOM/h+Ch{TH' );
define( 'LOGGED_IN_SALT',   '5y5/:XE;GCZv@f27$}T rl!V0{c<kh}%a T JgF%<{)U@d[4OSF[/`MfI:*Yh^eb' );
define( 'NONCE_SALT',       '*=B;Wo4C9qdRm`N_2iGf3FR5PNS4Vj+Q9ZjL:YK<t[n|[4P?lL96XoT+/0LqE!Vj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('ADMIN_COOKIE_PATH', '/');

define('COOKIE_DOMAIN', '');

define('COOKIEPATH', '');

define('SITECOOKIEPATH', '');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
