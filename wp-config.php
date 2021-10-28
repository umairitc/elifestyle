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
define( 'DB_NAME', 'elifestyle_wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'kUXrG29iy/SfKL`RVp=4egQ]/m5+%@j:eQ!=S)bGGk,:usOg}<XWz]O9`GNG,ON/' );
define( 'SECURE_AUTH_KEY',  '*nsuwqm|_$k:nseJ|oYYVrt/@K-8rJdaXC56;Daxv{&TOjBN3^y^g^5`4bQ?|RA=' );
define( 'LOGGED_IN_KEY',    'g o^*J(Ql=p8[az7`^&J &(]mNX<n(pId2X,4v_5!6:EM@lKb@s6zUI29<6D;-Kz' );
define( 'NONCE_KEY',        'sh)GPsco6k*UWr`MXi}! T,js=V$9Z|FU^3H8[e3R)mYbtsjW]7Lym;g;H7#Zb2E' );
define( 'AUTH_SALT',        '~1G^&JBw[8Cx#/G #n(_l4bz|@+W%qyJVr3utv X_h,V/&:G)Z=xBNagMG`Ovbb+' );
define( 'SECURE_AUTH_SALT', 'wqArbj`I:~EQ0gv1#Ugq@X3W4nQg^wWrX:gN!M)e6L&.Y-XT}*{Vuvg-;mF}kBF`' );
define( 'LOGGED_IN_SALT',   'zlW2tpa`uUl46F:V3!H_%=caS}9AJx)WAx}!yf}rG;Uc`b?|/*@>h2/y-(:A34d3' );
define( 'NONCE_SALT',       '73[3(Z8|L(<=`r#<R5T(Y^L/0!43YF8tN,,n`Ld3b&AB7SV!z3-(RMQS Ki54 T(' );

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
