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
define( 'DB_NAME', 'structure-demo' );

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
define( 'AUTH_KEY',         'gj!gID3n/D0t2l|6%tz@>dl:Cz`/L;]CEL6Z=JB4(d;GbM>>a@F8t)eiB@g(,P*Q' );
define( 'SECURE_AUTH_KEY',  '$JPV4v+cMCB~KVV!pza ocxU4}rs|d[Fg1f#a8=Ho#Tw&stX`1< whoBp1R}/^0h' );
define( 'LOGGED_IN_KEY',    'LUyjrq{[%xd!Yu@7+et1n}TE:`HVWvsteC)D7&nea0N=|?Yj@fVd~/Ae:DZOlXy0' );
define( 'NONCE_KEY',        '[8Og[{3F!.}srr={3;^pZvv2ef{ms/,3LW|bCTOG;?_;yG(eCM7B(A%o2E(/p!8-' );
define( 'AUTH_SALT',        'NR}{S!of^VpI<{.W$Au%>f~,d5O-JoS7nEJ&^Y+xi=!hXcC(3qRkVcFFK1b5u$De' );
define( 'SECURE_AUTH_SALT', '=1N+A7_L2OjxHG$6cv8 =|NQ]b7bNVk_Z%:zp0QczgDcPm:O%o/d.gr`.1a0tH,3' );
define( 'LOGGED_IN_SALT',   'TaM?<jY%+/|$k1FDB!Xg-F[n?nag<4k3Xf#+SU;n/yaou&BiyBBHX;?gix0]OF=6' );
define( 'NONCE_SALT',       'l%J.BO)##m8R@_[uG&0G+Z*>kj<|*B#IfwAf,aAMx}+!k!IAGz1+8M:tm2M$HJYc' );

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
