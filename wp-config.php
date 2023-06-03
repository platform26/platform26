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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'platform26' );

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
define( 'AUTH_KEY',         'd;|xz*8Xxma*kRt,=vPf,,umM7IXQB;T[tXq76gaD;OfuqQ:<^1Z~lxLS00H]6]M' );
define( 'SECURE_AUTH_KEY',  'uAB|]I/!YC-FR1F@1d *R3m+qPPT2}b8-58F3$_ (kVo,)<yC7_:qh:MY`2`LcNt' );
define( 'LOGGED_IN_KEY',    'w?do,q|tOCb$vAeq+>>|w@V|7RB55!GaKI} s<p}fKK^>/+T(Yrzt}9[mtxtkQn(' );
define( 'NONCE_KEY',        'i%8`*]TaPkU^s)Q#}V]MBvgJw(pyT-i){{T-OF.ia]-}p_!sW:JlHc^S;T1s&4a}' );
define( 'AUTH_SALT',        ',qXNLDW9X&g~/ *7|NC=/(6}+S##~{A9aX8T`[87<75+>z(9TQ#j2]xw]!_u![69' );
define( 'SECURE_AUTH_SALT', 'A< l0H}%M~97s07d=8ZSXwJXy/P;r]n5i<bg|5$?+w<`ZCMERiA~EY>Z9jV(MR3a' );
define( 'LOGGED_IN_SALT',   '%&#C.T`bk}ru;4%X/-G,jUcA ~uF|~yi avdr@(5r;e&`-9{c==*ausy#+`l^v6O' );
define( 'NONCE_SALT',       'fqIteBWawlU^#)7:.q?rY/~dHp&ZFTy$!niV@}aEg]~;k=p6isItz/ZSekw#{YMg' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
