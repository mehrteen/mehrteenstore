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
define( 'DB_NAME', '#mysql50#mehrteenstore-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1WIQc*o8A853z;SVL.y|0EVF3Qb9rhmiL{E&3mCBrA^3^uLH|z}4tP&Lm6g%KZCn' );
define( 'SECURE_AUTH_KEY',  'c?23@h5*,V5sIqjn2_D>$GJB_cVeU(<B;z_74w|Ae5A.e(.`xiV[(Y@e7s=jP)wH' );
define( 'LOGGED_IN_KEY',    'lZdl;+`_fXJ-xkhDQTmdGD:e(Oa<r!Ghcru_wLc!<}Jy<G#k|z<G^&B1yJPu.^$0' );
define( 'NONCE_KEY',        'p)XCjFzQ_=*Nc.:pkP);&#(fM*?5r.T+}:-izpa6Z]wFoXr8+4bJUb~[BA*p<*u;' );
define( 'AUTH_SALT',        'oBZk ) MW-6t6ICnql_j-]m$/~^B<!W~2OFNxc3$~mOBBv2<A5%Y+Pjd!l.R^+mc' );
define( 'SECURE_AUTH_SALT', 'z3iHtDu[Xh[k{2rNo[Su4ZKeoaLA2s/q^[z1/3*`(?8A?{Z8`#;<#51r^^I-]##E' );
define( 'LOGGED_IN_SALT',   ')03^X[s[-$evaqvx(aExQU0ate&B.k<zCL0@Ce[Vomh>spakz&k;Bqloh<hO4S7#' );
define( 'NONCE_SALT',       'xt<{`!,#r3{;Z])/={w;WxMTCz8sN :lpi3nR0Y_U94dP|HUK>g,NY~a*J,75ZZ4' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
