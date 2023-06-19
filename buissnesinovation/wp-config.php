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
define( 'DB_NAME', 'buissinnovation' );

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
define( 'AUTH_KEY',         'Y~rE]`Pa:^ScC:I^i$d16)E;@/<UwLFK/0~/K=3Iy-7|1 hxNfu5C*JHBIygn;IK' );
define( 'SECURE_AUTH_KEY',  'qbuk[aFWI]l5gg$%q69,ys3<Gb)?uKJ#bJ1|bWaJS*Y_?{-%r-T`=-hf<p5TP;n|' );
define( 'LOGGED_IN_KEY',    'mu0#-gOh6l0T}%g2`+og%-D@`LRc-0J{Hc{-Hge<G;snW$9b:O,= lg9uM7x(vC2' );
define( 'NONCE_KEY',        '^eAM2;V.LL7dhNIS-Zhphs-e%!rR`Ait-[,;1;k[<|HeB7wTbvv[gA=%ZGANW>@0' );
define( 'AUTH_SALT',        'B4p0ve!kVFeccJf~_s%6?whS34dD#P9uE8MAiXFTnSc{:vHmN-Fu!tsC{aIgV~T7' );
define( 'SECURE_AUTH_SALT', 'W#Qpoaowr(iQ6S>d4LB~w| ]0j=ds38F@L]8SJ5E6<Db^%`*Or]cL%[3BVjyJdE9' );
define( 'LOGGED_IN_SALT',   'ssSiVPQa<4dVuLU1^BP]h.39-Nx{0W89}b]GCgzB={()5KZWiy+Gt,P9k0TPb+!3' );
define( 'NONCE_SALT',       'T3^G],VhM:lgrR|czm%Tnfuq9.>~#sPV!kZ9x|6Q#:|Ckjy{!m{T!irYVksdmlnl' );

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
