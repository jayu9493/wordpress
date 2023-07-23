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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5k-|~|FJ!V9=QFjjl(QvDaM`!]5{GdyLKhiCc9F_X15r f{!}] xEFiB^$@tFh~$' );
define( 'SECURE_AUTH_KEY',  'qFTHu`gY:1cfDhKS*b6}.L6v1%V0GCWF[U[s)eFXP>_ru:>&!6,)mVh.*T3W%_2q' );
define( 'LOGGED_IN_KEY',    'KuFp(^5roVk69RRN4BJ(f[?Z}zm+f~aPue:jn(6e D`)iOT^>C$+ImwT-4^$D&Ul' );
define( 'NONCE_KEY',        '%CL5gb.#iNDyP,o! t68 0|@v `Nt/1nE94^_>/>^46Ra_#m*4/P[nW%yTu.(b??' );
define( 'AUTH_SALT',        'heg>H!|.Ds7>ju*8F$w88K)83upKGI`7f7]/NT,mMD82*o=H1rN*+mR]M<L8sy0i' );
define( 'SECURE_AUTH_SALT', '6~E 9W7*q2@3dp7!Gs?A$#Jw=_!^}X;v1:J3-jZ|$&24|PaTslWJ{@bf%mqi&Hq!' );
define( 'LOGGED_IN_SALT',   'BYpIqFNCjT-N9`Te$A#UX>br3){!y+42zKYu%JZ~[OKv0(,;PB_`|aBrrK{2zHw?' );
define( 'NONCE_SALT',       '%ci}a(aE/X`cdVR 8B]+tN&=~J4{v8)aabvpg`G>1P{F;7w(8T_Q1O[k]9_H|ol6' );

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
