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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Og^TPU]^A1nEgj+B9%E+.v[]49)Jbg-){TxZ >3l(5bV6tWp~}!?0OiVfk)z;#;W' );
define( 'SECURE_AUTH_KEY',  ']GfUU/Jc5SDJZK]A+XZoFW}~+zn8)E]S=/~*3Wnj--99V!-`I(2_;{,aaRZK.icu' );
define( 'LOGGED_IN_KEY',    ' {B*?eC)V$`&p@XAoRL6R* s7CF2CehUJv0ya/66aKpXVkg]8I6y>)vh>Q80^hCS' );
define( 'NONCE_KEY',        'EmI3[O4.u}xYp57PJo(lv5p.&0F}v6O$H4Pybzm6,P]NgdL~#uXuZxh0 zQm<ebJ' );
define( 'AUTH_SALT',        'ag)zTjr< $>mc+n;=j1!(v9H&F~gSNaH[(TXl]4G+(Pn2@=~bW@1a^kw3PoFEO9z' );
define( 'SECURE_AUTH_SALT', ' Zy&,GQuVd@/UlC=asV=*fv74,xI9kOPfL{B8coLd&hB8O3J94Nn&n_![B0Xu#Y$' );
define( 'LOGGED_IN_SALT',   'K}=+C}2>A_v-2mf7w{rCuH,PB!d`s&vmn6Q~~{v+@JaV94d>7e7i^]VghoZ_OLo7' );
define( 'NONCE_SALT',       './$[Ss^,a5W:omESow-o:bYy$s&mYoZWX&0)2CImlt++zAtu8xa#Kv~<~+R?|y)g' );

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
