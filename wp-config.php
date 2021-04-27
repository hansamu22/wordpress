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
define( 'AUTH_KEY',         'k|`na+at7&{%OpFA4Pn7?}S}F`z4Lc.@D8r rnMBk=M:0V(.p_MmSn}.BLw)5<U1' );
define( 'SECURE_AUTH_KEY',  '[[YBi]?KXdA1 ]{:__8=w[Wj/z22MVli $nohV1FmwwDgIXSxrRB9!/;z DyQVs3' );
define( 'LOGGED_IN_KEY',    'z8_MjsLa.n]G@b93=&k=8pg^~+26L9Fw<LcH,3^X_PEPUyAfU~<oH^eY||{g^ObS' );
define( 'NONCE_KEY',        's6h3%;jgu!c6lAF2GT^y*7~]@Jlb(`fC6fkl{17F/Bz`<&38T,v`{D%WKb1%/chf' );
define( 'AUTH_SALT',        ',1<H09B%<d|D=*$uN{exCa|vgX7C|uxhn/}.4y-enLQ%e@nk@a+9!WEQ#hdwmFp7' );
define( 'SECURE_AUTH_SALT', 'y#3F%MT`qE<A4h~%<=>DR(smAa?qt.W;e=Hu@-E!kW(G0lGhRb5S7c+c7LzFOCRb' );
define( 'LOGGED_IN_SALT',   'T8^ReO6)>3z)/>BnP,b5*{VjVNb=#^5sx +gEdNDj+G*YH?>8VZ<:U1 <0r*Tn58' );
define( 'NONCE_SALT',       'r!;0JL%XeGHbC7={{xsfn}_SOI/tn{x3!W%O:*X4R 2c&}2B`?C_A<z2bNI6a[X~' );

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
