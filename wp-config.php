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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         '&pssBBLg~VEtrSls]depUm9JPhd9vAdIsHym#Y$D9u}!}d(kJzy7?(g_S*eW}_`|' );
define( 'SECURE_AUTH_KEY',  'U1C8],`*;dV&p2>G`{w_C+k7STTJf:%Q|nEQrKZ~Y*idKa*uV#76^UC/7T3h886e' );
define( 'LOGGED_IN_KEY',    '3|G::H@HzSHOqq2#(:yvm+Mm2Y/.3=3d^Ggt5fH!-p:ZcaxQiH}S:H=bfI1b}`wz' );
define( 'NONCE_KEY',        'ybo%J}$Nb%S,wfYt)t&nrpB@wKa4WN:g=4dc>SlB dK-t0z=O}Z>Alt_Y,$u/.OD' );
define( 'AUTH_SALT',        'w<)J9o-hbsxjNKyut(w&+yF:[O~G`YP|M.d%`kI#*HS0<^WtB]TJ T=a)B07dC4r' );
define( 'SECURE_AUTH_SALT', 'g/z)h0)YBKo ~WnLi3Y8M5O*! g Zx7zJL{-<A+,sE1=TmFzltx3IjsqqD!Ga}A;' );
define( 'LOGGED_IN_SALT',   '{l{G]h36*#Kw)*V?U}fAu5W+Nb&MlNw~j`&1rMD==3>CK(T9?B6SeI;1HL=R_W7W' );
define( 'NONCE_SALT',       'WRvYU~AbF0F8f,Rf}]CP*}A#Pfxu`?]6C8)?z5#Ky:sxnN[,UCmS;^76TtIG+R,Z' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
