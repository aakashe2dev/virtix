<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rCGtUszLRfUVmG' );

/** Database username */
define( 'DB_USER', 'rCGtUszLRfUVmG' );

/** Database password */
define( 'DB_PASSWORD', 'CnsWAGtXB93dJ9' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'm)D2;|B<;ikdQ {(*,*)dEf^f*Rr4hO;vpY|0Y-7/E|E8@+x;B^wE7-6q+`Y5l@]' );
define( 'SECURE_AUTH_KEY',   '/(@GXCY(]>].&&6~h,^Y3H?Eba!63=+>50L%A#cY[0w.iN#A6H3qr4RWNEC&8YD@' );
define( 'LOGGED_IN_KEY',     's0>j7eJ>8It7V6ttMJLCoU_*;SUI4:^Xyrsykry<Yf>J$uX6?ZJABKy`~-m(`[zl' );
define( 'NONCE_KEY',         'HfduH5e:wrEBW*bJZ$bEBOBW6[U59~)wE3X[X2w9bxF;>Yq6i/w|aL^e(g =Lh3n' );
define( 'AUTH_SALT',         ' HE{47pwDulUh{IuuPOE_Kmef|U7u,uc&2K)P,P)4l}?b;Fe`Doi[!^y<)@{+2;`' );
define( 'SECURE_AUTH_SALT',  ';!@70Q{-v5F/bwgGRBEg66|td;,uOn.zFj&6n&X$ M4R}QE6bJmGeAAKjl01PXF=' );
define( 'LOGGED_IN_SALT',    '/SdCr$lPLN5%*diWX3GTHD+%3Ob(`z+5].W`OMrkj,y9`|PY`H]l^zUUUG|j+T;b' );
define( 'NONCE_SALT',        '%`m>Rt  2(j@pSVZ/,,AD_p.~<I):O4Z}L_QJM tRj}8n $.sy(>@~EtGR0l  wR' );
define( 'WP_CACHE_KEY_SALT', '+J[Ss}%!W-{k]jhb]CrS#oZ6[bL1#Nc~nOu*>oiVEM^bXi%3 +2VDl}=P^4/eoc4' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
