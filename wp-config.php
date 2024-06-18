<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edge_wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't Qlgz#qvm=@.}v>?J@m8~a1y+97w -Geq]kz7{,;8lh-K^|tr3^*8@H&.rig]^?' );
define( 'SECURE_AUTH_KEY',  'uR97_i4rMyOaWC[OP76j>5j?*[jlz!kr*kGXH-v6I7;rM[cB8NC%&(0+_/fA<k`G' );
define( 'LOGGED_IN_KEY',    'Y~unqsc#`(7^,[wTgq&r}^?r[Lotp2U-8XBB{oc<XUGO~0bkX&ISXm]LlP},,0!e' );
define( 'NONCE_KEY',        '~,2 UPTmoyi?n$V1.vteK%9eKfn-I|{UpjX}2!#~+hBCZ,d;ZpM)pShj+AaQ&[[q' );
define( 'AUTH_SALT',        '=dI6U0&0mts_]0&RBY,3Hk)0ac#VH8(/gr4g{%$Xr/1@t&W#mndVyj~iM*BH_1$3' );
define( 'SECURE_AUTH_SALT', '9r=~f/V<v,x~NpfpvJ_,kJm1W3ZrOAy`:)A<cERah%kn=GHL d`8`>xo_wgG<N7a' );
define( 'LOGGED_IN_SALT',   '6:S0K:/RY%[WU@2_Y6@we)#OIiSYusR7>IhIQg]7=C(cQ~ ;sUb~MN+!byOFtZ{$' );
define( 'NONCE_SALT',       '(3;%CtR4x95xqiD9uIF,br&B>bfkRYCE(6P0m116P2sB{E#F%?h1R|=uDTqk-a%?' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
