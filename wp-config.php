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
define( 'DB_NAME', 'gymarena_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Pd3l`K18v6L?2VfP5X&[eGoE/Vm?oLnmv}qrz^l+>+}GYVB)wtS<T)Al@n%o7.H>' );
define( 'SECURE_AUTH_KEY',  'T<{`~;?c3~DIn~>$Ub_7jf:5M7j@oJ?5iQ^ht6pg2+H3Skndp;E&`.S<NC_w h=?' );
define( 'LOGGED_IN_KEY',    'hdD!_R&P{6pYPjs`bl&Hk7W177N>/pY~g9p3ps:-+F0G:xBWS[;<(n0=Y=oWBSHi' );
define( 'NONCE_KEY',        'P:d5`N =]N8+!:V)+DIgIx..hm*U=1Sw{}Ya-:Ns*Q<{`*1IweNv!1^Namk*X%[k' );
define( 'AUTH_SALT',        '[5,K.W?V;?zDR1qr3W&d|KQAEpV)ii^n&JrHeX1I7N$tYkYQ-?`B}m~)QIhC[36j' );
define( 'SECURE_AUTH_SALT', '^*@Wtb2lMOS/}/-(p4:3Z3XhJ`y=|3 2`Qya{PjVbaw><6V@1Xk<n8Q;S9oNQu@w' );
define( 'LOGGED_IN_SALT',   '=i|/HWt]sp.J+8Hov6@JC7reJ*!#!0+wo&C-qP4.~O#$qIODWA2PTmVwGP7s6.*r' );
define( 'NONCE_SALT',       '0ImlLQ(A 7mkic]w_)cr0hS!%7noI[$S jpLEdeX8-edh`u0qX>S^]r8o8W?%w K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
