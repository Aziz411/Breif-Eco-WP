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
define( 'DB_NAME', 'dbmonsite2' );

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
define( 'AUTH_KEY',         'p[@<zu-KeCsEVSYa]B<];+CbUk8Wy+%ZZ{91+~MyttjaO#mr^NZT?UudM`V}/Kbs' );
define( 'SECURE_AUTH_KEY',  '*,ryzY.(ofOs=C& )h0;S D%s: h<k!]QEeY)oR!3&nBVHEfO|AHj{k{e6yulT:M' );
define( 'LOGGED_IN_KEY',    'q1&mXqE.,>)pC6E`xqYJZt!hDojx)IiIY9P!K^<y3x=[rl,s}dHP*Ii9X8YOKYz*' );
define( 'NONCE_KEY',        'jtXU57mKKT[>/L?m|BW~UB@{RMX-ArF+8>kQrt1g0OhsdJNX%6QwdhfylNILli#3' );
define( 'AUTH_SALT',        'kHM+uu>|w4Xek0]s]+%hN6yL~^5#YUX2P43vM(_.:<lN~^2%>v=g<<BCB)Os1.=<' );
define( 'SECURE_AUTH_SALT', 'vNwqIi{*zG`=cGr+7|{1ON_~X}U1p;BYH_@=F^|Kw@:f_2B5A=sQP@lU9ltDL(-.' );
define( 'LOGGED_IN_SALT',   '!Ot;rOKK4.d1_W:~%4cnzV+;L#UAUDSw(U3%`FbJXUf3as4k<=8#5oMs^aD(k!jV' );
define( 'NONCE_SALT',       'R}:s9A/O(5{H~T`tO<RBrO]88g.{dt{;AGTe9=yX9{u8*w^5%<$;zozk/n.=Iw<o' );

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
