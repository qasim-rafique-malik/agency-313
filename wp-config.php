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
define( 'AUTH_KEY',         ']!MynTjV!^Q5+tgbe%:Ri+L}mWu*@r_iXiJ$yD;T,0R9Gn_UQf{|(u}v]G/o8If0' );
define( 'SECURE_AUTH_KEY',  'Jpud2*k1,hLb( *UuA]NMn:Y<)nM[1^G(~ca`97C:m94W|6/iA=3|=M$#{ruRmS^' );
define( 'LOGGED_IN_KEY',    '#+k!(fo~ Rnu=rXa~bK%:vfr)]%S+V?:4f*py.J= 4iaPqCxX` ]^rX.e ixraqE' );
define( 'NONCE_KEY',        'k <-,69,4l|X[S7&7/Uo@V${:dyrJ)2X|aE5D2 Z:$b,up*r I8-bf]Z#Jw6o4ta' );
define( 'AUTH_SALT',        'MOyqBBC`Xb)!k,T.>^;/v%@`$i2HKwTr;9Q#/ty;xrY;Psh$St|>M${:u;wtHqXO' );
define( 'SECURE_AUTH_SALT', 'SoB45#byE|^W^<C~2yhMB5gz7sEwC7&IA eY 2z2=D_~M6|afh}0:,LHF-xuFB,?' );
define( 'LOGGED_IN_SALT',   'Qp9s#3GyuC3BhmLbrap#$Kbx=+I<ae0HLJY[P$7iTC,*Z@1KP?Ff6Us6){L~Kj){' );
define( 'NONCE_SALT',       ')4;K03aYnA|d8tFy8Zt_9(eh:~@5@)a~q:2E#CGIL`/PphNC88Nj]M#o2QYh48Yq' );

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
