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
define( 'DB_NAME', 'elifestylez_wp_db' );

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
define( 'AUTH_KEY',         '})`^lAkdrTOBQ-R ;6j- D`UZLmj18s9w_/;Q]jFcQ4?2<=v^9393nx,I?~%+zlL' );
define( 'SECURE_AUTH_KEY',  ')|#L;gr/Du0|>a^(=#mD3<1 qXSbFw>Ty%WqA^>5w]>k1FB)e#Mw`|ud-MR,159I' );
define( 'LOGGED_IN_KEY',    'w*}CDp1?!6BZ>S[%=WLbWa3+G*cGoHkiYn+eWck!`Sk%mh~nUA3$k3fD)Nk}/S>U' );
define( 'NONCE_KEY',        'L9Kn5 *frHiK=qLK%Qn@:4E:[_R/zTRzJ[mH,gJ<|)M&f+OZAOVyo7FM~I=JzPjN' );
define( 'AUTH_SALT',        '|ALW4c7.xvSMXKpnGXswEN51G&8zU*j.K65#[|C_IwL1ZDRc*5JeEjef>zrT-$l2' );
define( 'SECURE_AUTH_SALT', 'azH:v,TKj1D(=%`,emZ(v6fID``-_/[<kSLJ]1A6QYMQyp[^Q>V*!~TH4XORfbIF' );
define( 'LOGGED_IN_SALT',   ':3,0*lbRnfB4?37)9 3i}Lv$R_zAK|<9,%MZ] wy)ATIP=T@`{_4SnqK9,1*kaaL' );
define( 'NONCE_SALT',       ')Ob+EtDp,%,6sz4I=n{y/|]1WrG}`{,S6Qzz*>}!F%.-,mHYX`&GL1e_Ms1clIg{' );

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
