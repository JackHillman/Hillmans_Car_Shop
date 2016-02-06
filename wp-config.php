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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_jackhillman.com.au');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f8|#R*s843Q,cqlzP j)5O^=93jfnx4kVj~L*vx/H|cXeU8iOJE 2yUo^m:1M}$q');
define('SECURE_AUTH_KEY',  '{Dm^B+V-b:qdLtv.LAUb:^A}ul`u2^C<g<[`{v?IIAmu3j%^AYAzV!SQO?(n3A`(');
define('LOGGED_IN_KEY',    'YnBYjK)j2{5L$S1DH:+%u8N>tuGw>W/e2fN~#}.kGvH~zIR-T(0/__#5&uQ4W#HA');
define('NONCE_KEY',        '5hjGN ,Z]Ft5&a,gD+D5)2oX%oF:1DJ#i#d0WP[~j._)x5*JkSG7g,.spHRasyTk');
define('AUTH_SALT',        '!,$l7OC>Bdj3D9;!>8-y.z&Agy=)[8<[S0BvmB#BwS8K<[[s+t!~_uI(c-<K[^%O');
define('SECURE_AUTH_SALT', '3SoHVQwLkk+h#h(I)FmwL|a[}hfT,$(k/lhk$,DHX`kEm1sdX#@<}vT~^N|k-9,|');
define('LOGGED_IN_SALT',   ')b++ZwLY[|40l%(hG;M<56!AM*-KJh-Q>wk#+S-L)C|@l1q;J5M77hj=,|g42:lr');
define('NONCE_SALT',       'O+dtuvrVx[w?#6_>,wl0!^+H#w0Lz;&)S#~|EW4)C<*[cn]S;Z#<7.Nt$1T+AEEo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
