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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ael-masr' );

/** Database password */
define( 'DB_PASSWORD', 'pass2024' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );





define('WP_HOME','https://localhost');
define('WP_SITEURL','https://localhost');

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
define( 'AUTH_KEY',          '3l|BC){|1&d 6?bm4qwtsd1O`V7H,dv,FFRbu_aA>5Jd#HY-e,=mv%TEZ:Iv,~o^' );
define( 'SECURE_AUTH_KEY',   'JbpQ`jQob/>l!<W1peoB.}4yV$=Q5<B|tEL9Z}@vh(K3H76zM?.<>R}?vh:KbBmj' );
define( 'LOGGED_IN_KEY',     'VUB9f)SD?DEV>,`LDSoM(;(;Pj6~%6]NDWd;f5W8_sA|hb#T@&Djsu<ITfOttLZJ' );
define( 'NONCE_KEY',         '69}o]yYOI8=&FByz$q,oWx*.R2!a&R?KI<R{Fx4/|p Dp:u^B=Fc2Xm{~//BRna#' );
define( 'AUTH_SALT',         'bOD#LwE60?si*nN,z=Y3REN3.|SX+!`ac`kC7l4T{Qx<}QSuU5sIBTp^C@4CHsmK' );
define( 'SECURE_AUTH_SALT',  '{n;t1x@t|=W1j25J_Sk`m81I>3gWf94)L7j3xz@pI1Sl-,.cd+uE|u#92eyUpt %' );
define( 'LOGGED_IN_SALT',    '`72Qluz&PX4Ild.$)%+rK5BP@8,v%+dY#0kx~q=a~o=wtB;{p6W}Y)x8`A-u{*t#' );
define( 'NONCE_SALT',        '[hh49VpDw1?h`_6<$)bK&j`X6M!3<9/v,{[jZY=qc@LWX?qa8g/VEUqc[qeS?08v' );
define( 'WP_CACHE_KEY_SALT', 'VEBc4:3D,g%Iphzlbf-d^H:8{Z?,tHFSMfR<HD$dib5YPg!?3e`,O#@*m6O(Cm$D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
