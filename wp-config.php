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
define( 'DB_NAME', 'ID280338_purecms' );

/** Database username */
define( 'DB_USER', 'ID280338_purecms' );

/** Database password */
define( 'DB_PASSWORD', '11KC1373z5GE2263I3fY' );

/** Database hostname */
define( 'DB_HOST', 'ID280338_purecms.db.webhosting.be' );

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
define( 'AUTH_KEY',          '9SwBhlZy8kw7oDxRGlpdKi7_NHkFmZ8kQe7C<(O9^L3E?SGD0G@B@w*%4l~uMb6*' );
define( 'SECURE_AUTH_KEY',   'Z=DEk_AL%ahzkg^n~:^ndmrwZJET#,7a>WY0!<iN5/A?jv3Fee#kl0XOm$8#`Qv<' );
define( 'LOGGED_IN_KEY',     'kJ6Ng@MCu-{w-n{cri}o2_x{wM%lsrCHQ8H(Vi_<17cd*wsP5,3j8%O1Jr]8+[tT' );
define( 'NONCE_KEY',         'N&PA6 opxw,V%gUwY4{vTl#Qi7zXZHtb(Z&;#0b`8;*.Rnv!=&MA2xGNl)FQBi9/' );
define( 'AUTH_SALT',         'G6rP=>hQ}A/Pnk<af..xG#}X1U<%s) 9gQrbz8X6.3zHG]wAeIn8aby{b=`TmOm|' );
define( 'SECURE_AUTH_SALT',  '_yS_0c>3Gzu?RhAX{90;+6R*izbuvyE}} [bNY]Nxd8hS.#]8*bDADGE}NSYDdu+' );
define( 'LOGGED_IN_SALT',    ']7)+SN{tdj<PY^:/Trh<UZu ?W*,#m(n3,V9j,j6wSsShX]6B%ZBh&PXQuDEca&|' );
define( 'NONCE_SALT',        '||(T]TWA )[?NW <9Y-YDMp!eoxNEm-BRXl65+HF#J?7+U[lG @nQz)q[Z59zi~k' );
define( 'WP_CACHE_KEY_SALT', '&1i`v|jl6-P)mF}*Sm1?uvj=[W-;::]+)pRE[@#orb{W0p1^%3zScPK87@lG-|^~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
