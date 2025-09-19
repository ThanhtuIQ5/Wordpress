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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'db:3306' ); 
/** Database hostname */
// define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '@_@pxnN2}7|,6j;Xs3^Q1,V0Ghw:qHPS,@F}Fs=83|yetkj~a[wu17@`95RuZkqf' );
define( 'SECURE_AUTH_KEY',  '[{.c Ul>g2:;C;.O8BBaQs(j`_12%V7HgO v`VM-B ]:bMbhUMS(Y>W|%GT4aPj#' );
define( 'LOGGED_IN_KEY',    'q},&vJmm*WTCy/9i_@PI9_#5y=8bxufz-Jz{N;0U&rl.]&in2}E_9|zp+3sq G2&' );
define( 'NONCE_KEY',        '/z)NT53+:sFUW7Hv>vRuA5I2x+M4QWyXC-m65&7!8|$@`6r/k3E)esmk]Ph*s`z;' );
define( 'AUTH_SALT',        '!@co&1bl[K-(QEkY;)AnSz}NdZ!LW!X5:4?BhIfA3Qbsa eHRxY>J7K9wNWS#>{0' );
define( 'SECURE_AUTH_SALT', 'O:}Y iz;Ukx[_#*N/PGH7w5@jp[d6}J9&<9#{*X)dFjO}0sk4f[Z6]`?=7OUSr2a' );
define( 'LOGGED_IN_SALT',   '[JmZ:/<V!l~}W@:KdT{#*6&l@/?} jNcl>oy?ACmW7o?>]{Fz*dHTQggjpZS?G:s' );
define( 'NONCE_SALT',       'QVdqj6}cD4m~P}7WDr5INqNjYd?R3oe,uyK?60+Bznid}t09!vLv9:4X|=l||hd1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
