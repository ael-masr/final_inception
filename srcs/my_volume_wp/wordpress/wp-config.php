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
define( 'AUTH_KEY',          'o G2]O(f2+?I{cZuveUyzqKuowz$UKJ|6-,RT`Xcjr[Fp)q/S_SV] Ppo}6oRd2Y' );
define( 'SECURE_AUTH_KEY',   'DH_,3jEo2IT,&CgKwLbOhbkRf*h`kj-aEnbG[mcR:eu)]XDsxjuBC>(KLMnCm@o6' );
define( 'LOGGED_IN_KEY',     '&b_Akpu_alORqWfgGDJy[.?3#Mv|4{$/y@j,uI?*<U3ts4~:PQv ,Ce_e^jr<Vcu' );
define( 'NONCE_KEY',         'MO?U0$/k5,|t}@rW4Y[?q=EIzO6+pKBMYBNY?+$r_JqIqj=~vtePf?G_.M?,#[k|' );
define( 'AUTH_SALT',         'LBaLISWtltj{) Z!H=yfr)}N(AD<sVXoT#2(;clL>iluFjM5prIo_R( j,NC%8<@' );
define( 'SECURE_AUTH_SALT',  '_Zs#JdRH|ec0<7twbR=U&&?p=q)1ZBD_Fjk|s[x_ao<Zxh1VIIb~P!T:v&aJgPPM' );
define( 'LOGGED_IN_SALT',    '!T&fGP>])l^_]IYM/;3n|:Jta0Omjnk=BiJTDUE02sk36qjQyhGc&BEmFE_~8qC<' );
define( 'NONCE_SALT',        'N3/Hu2sF,!n|;m@UWP:3v(lOx3c%+~*TB(zev[n.<z*1_&XTA4nKDpK %h:L`*v,' );
define( 'WP_CACHE_KEY_SALT', 'g.el9<@(~|QD7e?+U4SUd?j/b7QT/iB143tx+QV1Sw>4~:CBinx#Ds=`0(_Ccjyt' );


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
