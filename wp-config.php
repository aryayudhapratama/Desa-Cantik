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
define( 'DB_NAME', 'db_desa' );

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
define( 'AUTH_KEY',         '>fsF`3* 2nVi8l,N{4O{dh=`v@EZ%hWAD(*6!K1O}zIJhOG0@,D|M~D32midMdJ*' );
define( 'SECURE_AUTH_KEY',  'RaErpisIREiq4z1Kd2-)[ov[-z6ux@~@/L<0N51#8{fhG%ggN>+i!Bi>s6XIZ1]f' );
define( 'LOGGED_IN_KEY',    '/c$Z40v%8a3=u?slZ=<JIu|6`tF(;8:]+^ZZLN~4A&z]5t.VI*.!/_3G$Yi,sVlf' );
define( 'NONCE_KEY',        '?I/7WaR8)XJH5XTFL+Lzpp9dkCwL@R|/3B<1>>n<:=W5`ZJOYp +.$QX~cXl8>$)' );
define( 'AUTH_SALT',        '8hbZ9AJxm*<jt_,[6n>OYl]gDq~TDrlr(XH1L=#U#~ePhZ6}e]K-]?LC}/eORkL;' );
define( 'SECURE_AUTH_SALT', '+qV+YkS{1xH<XVB-)Kb4RTWJDUM[[JS0v>4224NDx@2h]#nP15.c[Y._vm@~XEF3' );
define( 'LOGGED_IN_SALT',   '0j<Lxbj)iF9_5PzwJa*z.c]g1$if)#+8>2h3n$gga,Yr_)Khs#/LtKjqc6n)0VXT' );
define( 'NONCE_SALT',       'aj8]f[+@iH0O$rmD,Yf-3WD>6&4;vk]F(*WgrT0$|y:am&<Wzu8g]LDn^r8wstq|' );

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
