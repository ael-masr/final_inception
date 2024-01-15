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
define( 'AUTH_KEY',          'ufNh,p)iRR?;D*dYl:&`(.R;$=1%>3LG}/S)Hlza~*WC-r1lvGj_7CNi;u%Zmb~v' );
define( 'SECURE_AUTH_KEY',   '<_cqHGU@. c3hR_,lbM>4+c8]j0A-d*on-0gb|[><%r!+2Ns)7LU3&nA > _YUv{' );
define( 'LOGGED_IN_KEY',     'uG[Kl$mF!dCy,d$8#.3bn.ldwE?0l4)/0;$kCcjiiQ5v6.ZWqm1j3fSoBn4t%dsW' );
define( 'NONCE_KEY',         'y{3Y:cj*6.liT%/rLhm!$w|r,;P<+c+C2obQ{sg/(#uA1jpfcH5a<K~aaQ#g$7W6' );
define( 'AUTH_SALT',         'jc4}icuz~B)1 lGW^|[[o&2:b2{09}jisyj,zOL,au|%p@, ?MJMbZlf] yWm,kW' );
define( 'SECURE_AUTH_SALT',  'kh?:8UXd@I2b7r6VvnJ.ED*bHq%e&<G.P;0rmAYG1Xpyd0^$,t@20LG1?}5DU+CI' );
define( 'LOGGED_IN_SALT',    'S7=?N =O#3~RJb6-m{F]ur*UkZP,u 5Y1E?MO{4N}0_tPGW6/n*]`^gP<`r<1%(&' );
define( 'NONCE_SALT',        'JI2}e/rPb+IeA4@E1C1c+[MD[Ayf8N`9S#d.1r}M-z1VPJl[xQ1X5S)d2_nV10oe' );
define( 'WP_CACHE_KEY_SALT', 'R1~6. _vB|VoImg)Ac@8E.>Y3n]Ge7l7b{Wkg/a8;?>i/14n)2ews!6X9bwK47so' );


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
