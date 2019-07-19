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
define( 'DB_NAME', 'toursntravel' );

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
define( 'AUTH_KEY',         '}$4Y)XJUt1B7YdNvlQ#<9hsfp7Jk@P;$/rnSVCxTY!cV6T=jGxXhL&S~xwiA;:n^' );
define( 'SECURE_AUTH_KEY',  'n+_|w+S_XsAQ[SrbQb^isH[91BkR7G}#=c-|g;YE_FX/(GF2AoC]$+*^^>Zn9}*j' );
define( 'LOGGED_IN_KEY',    '~=X7*qt[V?7+K(ghGKgl}<bpL6A_6YyxK>uf}!y/nDv$S6NT^[o|F89K4+`gvnL}' );
define( 'NONCE_KEY',        'W#UY0yH]$}c3tD?4;+[7k2zJoLiu[/<6ZL]%~rF8?mhn?:mW,r/NN9t&Jh4Hs;z&' );
define( 'AUTH_SALT',        '^L$7zNF,[aIUAI]UXC-I+M+W`yRf>m~+RK&Zj]M9>}g$n%_J+2U:HHo7IJ+k?OgY' );
define( 'SECURE_AUTH_SALT', 'B8r5fuM?BS@Ld_-y=wK?*UxFdoXB]by!Pm}TVs0euell%y1&V6o8?w*AE#Kl`v1A' );
define( 'LOGGED_IN_SALT',   '?-uKd`J/V-J-,r+X`H(OnZ8p>(wf|Dy=c7bMD7U`p}!<gO!M(bMRkMwRd1v6h$f^' );
define( 'NONCE_SALT',       '6qix97wcMpUHqQc%=A:fB&6LhM*Gf!ij)B/D@z=]73og.xP..b84g*T9yYX76;[`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt_';

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
