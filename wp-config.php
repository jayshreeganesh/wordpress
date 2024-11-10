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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         'Ec8LRktm?,,Bm|JBUbWYutbHJsxRQX@1#otbO>FUwGk-bMJF=AMSGW+>9YpN&ku_' );
define( 'SECURE_AUTH_KEY',  'Z}zw[8xlN<9xr],cH)Tk/u[eQKQ@VVc1d<#CV}SNNc.+r4P^Ky%LK2 !awX@5`)g' );
define( 'LOGGED_IN_KEY',    '(7W,GYlMU} 4:mi2Oi-s;syBOA#J@hQTC[cSP;%9opE[$UXiE_tzlc9SN7mQ3Di=' );
define( 'NONCE_KEY',        'uC7@Lf^Kp<;tVRj%%j[-8Yc+Kc:>A9nSe%Q-&&bXhHwUyRwME<%pw+s)wmc}h1kB' );
define( 'AUTH_SALT',        '@APsFDoKIRqIPyrw;.J11#pU(ZvtU<=$86z@83* Ke&}$%:n5j;V(NZ-<yL!:6$c' );
define( 'SECURE_AUTH_SALT', 'a6c%UJ<mQBdV0C6-<$?oQJs<|^4?FsC2xLaW7QB?{[)`dpt(jC%5/9d8zUXdnkuW' );
define( 'LOGGED_IN_SALT',   'R/ GL$t[RtK|2?Nelc/jg,O#VaAAwXrUXbNa`DSz(et3U=$w#Rb8?/S&bOX9uO!b' );
define( 'NONCE_SALT',       '=AA$<WW[rD@,Lsz$^J1XixE_&xPW[.GDhdXPN-7lpr4qme&|[[ >K0;@Oy}*G]D:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
