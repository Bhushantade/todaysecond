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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'todaysecond' );

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
define( 'AUTH_KEY',         'Jeh]`I</OD] 7pw(19MFVnyG&yr){+BAz$o^#1Wpui}KocJWy?yZ[>_|3b:y-LHq' );
define( 'SECURE_AUTH_KEY',  '^C%*.p%a@WVxr];/!l{Hj)$m.^PsQ6tE,-LGa8(9nWG`duZ)+;}LkneP<iPdxd7~' );
define( 'LOGGED_IN_KEY',    'nQ2FJAO^E6u[Z7o)cc=y`!]9)GdvFcH:60e.#PvW(,1I!63zGPOo[6S+rT!tH=t3' );
define( 'NONCE_KEY',        'okBK8GYiExR$,> W}V2d2^M;|j64jRIasP+Yy??Qw:8STWRG+y4L2[9z2]~>Jv`q' );
define( 'AUTH_SALT',        '2n2iU#i:7+l.,X_!7M^7dgb~C*$9&x^3SY(!Yn5IK!QKSeW(p%&@(>f?:j 8K`#t' );
define( 'SECURE_AUTH_SALT', 'OoL [?hN#]pJAvdw}0PTKvX_H*IGxK<QRX0%<jI{EqZ`kyr7Jb%&C3l:;4MGA0#n' );
define( 'LOGGED_IN_SALT',   'zY$3RgO0q4t`$9XO<^?kx6njB]*pN#U*L8>03/R$G-zFh|#[PwBa7BWg;&sGM5$!' );
define( 'NONCE_SALT',       '^kU6-6!9&TQTbiH@=_iceZ3|`z=,=&j#EL]=x&}k%wv,z@cvYr1xt_IVM&8b_/^`' );

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
