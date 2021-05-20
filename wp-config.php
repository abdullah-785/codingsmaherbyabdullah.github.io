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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word5' );

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
define( 'AUTH_KEY',         'X|IX]4v5sI)w4;]X3pK-UOn`^/f?`6W>`+<$IFC,{PW-k.&?bz~bU[4F%)~K&_I ' );
define( 'SECURE_AUTH_KEY',  'u/4U$2h^ 4Ykih5A]k/<rd2guv3FzWc>K}-@?mS)#QAp>kp#4KbxXnJ7@IWqo=Hm' );
define( 'LOGGED_IN_KEY',    'T5L$$hM-G,jJ[z%zk:`oypho*5?E37]S`?d4rQ/0Aq|(=+-A^yp.<(9JmKxSKk`g' );
define( 'NONCE_KEY',        'wpjRnUkN5]34-cg6+WQ[[B72#<yuQ`8v:AZLXpNc..CbgkVeD1_(2 GX~ oBbv#D' );
define( 'AUTH_SALT',        'GPCEkWDhzVicZ*IXb_q>6/~PkGN,|>tz@:23x<^$s@+HQM=YFyZny1;:4Ejjb0`R' );
define( 'SECURE_AUTH_SALT', '#AL^Ws8xxh+Mu5|l?G+f&y#aA~~?LS.uFo[8|(] F%0x4gC_v|=7Qw1rP;,yf#rf' );
define( 'LOGGED_IN_SALT',   'aFR&+SKT,Z`ONJvbnc!+IkE,;qK)~2)E{pU4^71}5#cPpYf7C+*LRl^tIr1@@J|*' );
define( 'NONCE_SALT',       '(r8Vz:#A5:@ZZaa8tT;E8HwJEP1_!Nu*Z3SGVaH]O+k%&(iy$K$>Fu$z^]I b4bF' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
