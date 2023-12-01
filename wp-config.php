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
define( 'DB_NAME', 'abc' );

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
define( 'AUTH_KEY',         'z#!tiQ}p%,Hmt.?!()6xOl]6mlucU/DMR`IHK8:+`M_S2>%)?x{Xsz>NQsS)cBa`' );
define( 'SECURE_AUTH_KEY',  'i3@?9}Lo>-{[dTXG,7>~fBLkh$@5&3p0bBN9t0 !Eou6}(YU^&]_ m0/58=im4*%' );
define( 'LOGGED_IN_KEY',    'cFS,/$/!-KmQ:YDE@Yy=nydbw#(})#Ga8E_C8Di7B^hVWQ3cwd|FEmCr x%,ctF?' );
define( 'NONCE_KEY',        'KqM2f;tDtIZ:<Oa9xZ&fP15_]<~*5T:M<(NU1/z.V)yb/oM(UJ)r_s~K0aD#u|:=' );
define( 'AUTH_SALT',        '<{Y9P`=ng9D]ZyBtbYAOO0!G<D~O}:J0KA_#hVs>8df3[4*}II?qi#Dtj_ s3<PQ' );
define( 'SECURE_AUTH_SALT', 'jrP33BBY3w~x+XgTFX=JM7:zOu2I4<v=8HZEY[xj$Mw]`u@gL@ci`i!WeQv&;_al' );
define( 'LOGGED_IN_SALT',   '@qGZ%7f;p;Vtckc>x,}nNX(l5QnGoU$bl-q[ovuEnEk.k?6FctEF//MrMa-K69sT' );
define( 'NONCE_SALT',       'SFQE>Hqa9qy=%E{VA(%Nm8+yb^gk<O25w)h4YV/xQSKiEW;^/,O2g>I~Y|*kJCby' );

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
