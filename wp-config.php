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
define( 'DB_NAME', 'olmekskygm_m' );

/** Database username */
define( 'DB_USER', 'olmekskygm_m' );

/** Database password */
define( 'DB_PASSWORD', 'jZW_7379LTW2VLHZ' );

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
define( 'AUTH_KEY',         'hTQ%Kcv}}|xHLzcIS.`EI;E}T=RDaY(eq,a]e*]3|-;BY=<#Gn3EQIVGHzkI(b<W' );
define( 'SECURE_AUTH_KEY',  'p~W.8mvdm(d8FT%=L$9+g{#J3/TGCi5s`,ZsF-;uWZGYxMNU)qe]uaAkpj0CT}$D' );
define( 'LOGGED_IN_KEY',    'p(BHyMwwf<rb<R}=ou7XJ~@z2CUi:>*{mB)1P~I]9S85bo{l[VWaaCu5I%sS>vW1' );
define( 'NONCE_KEY',        'h1DLC(;KZ!j>A17T^tRZmRYtUA.R?gC[ZgnF)}(:[(G{l DPSOUUXtfG[<=[NCES' );
define( 'AUTH_SALT',        'L<9Fz}FD9SE<$G<3<{])z+7!])3(+SwPTwJPVi~on?X!jM2}43)gsH<CEWQ*/ylJ' );
define( 'SECURE_AUTH_SALT', 'v1vUoA6ubL&Fa1_gHK}WXzo<<GU*x*#{V/srOfo>^&!uQZ8?tb63W;1l@N:QqOb!' );
define( 'LOGGED_IN_SALT',   'e ^;rMqALP2%3iJ{ (eR1=ygz4gSrFwue0qeNr}8/A@}0929`ZvY}9xYR_=0S_zm' );
define( 'NONCE_SALT',       ']b.>pWZ!`ZO3^puzHzFAMxl/%Vkx5VE2NO}-uxu)I<C~vb-;plNzY*xOm;4q<w<F' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'm_';

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
