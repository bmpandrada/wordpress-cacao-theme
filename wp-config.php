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
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          's]JI@:;0-18DE_@wx$/mU0D3RT{<b]H__[>4_]s Qt= Hu~.6v$6-1ukO1TZZmo-');
define('SECURE_AUTH_KEY',   'cpnZW>c3*7V9r#PCbUa-Q0)79og<E[E8GRh=/~u*<5/u/arRI)5kl|ak}<#ZFiVw');
define('LOGGED_IN_KEY',     ':>H|}Ebpv]S?o!/.9|9jW(3$l(P;_pKWC?3Vm~9*8M,T5smFK4i]BR[0_IGs1WlL');
define('NONCE_KEY',         '+m4)L~c,b<@<xV0bI}J@qZWj0TpW0shO$T(}~dB$=UTPv7sN$XW:ukU3zo VK1bn');
define('AUTH_SALT',         'u>`5N-Yx@1!fb<cRQoA-a=$+!$66JW_M%?70lS+?< N>8yL1~;=m@}#T:P4T5$Iq');
define('SECURE_AUTH_SALT',  '*cQ.)Tfd+,hq%4xGn|+NBi*Z_UX<=k;PY, N6:/3&(&CO_I^=2)o=w]-Hi M 6YV');
define('LOGGED_IN_SALT',    'n?J0IE+nry()RM!&dhs3B.*S2|@%jrT?TdqfKNcqmJsNa$lU{EJ&8sVd[-q+TYls');
define('NONCE_SALT',        '0SYmF&yQ_6tm|4M@Ior=9cpJRqLO1`hhXKy4U7PtfIwP`? Dq*4_$Tipy8zi}x--');
define('WP_CACHE_KEY_SALT', '%lEfPs(lKHO|X4-+qyL&,$.Wb]V&uwDXJV$xk+6n1C+4DH4kTA%6tC`$e[`.uQ0!');


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
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
