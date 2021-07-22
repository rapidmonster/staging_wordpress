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
define( 'DB_NAME', 'developr_staging' );

/** MySQL database username */
define( 'DB_USER', 'developr_staging' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Micro123##' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'X=E)[(6] DW-4LY( M4u^+~RI*d;7:]@b)?i4,GD#Fxh)c97G8e#+7F>MA7=tKTy' );
define( 'SECURE_AUTH_KEY',  'QX}(Knj|e~V-5h:z{6O8M!_s{n*Fmp#tbP/nr@EynKF^yP:11VIp(_Q@<!6n[:,m' );
define( 'LOGGED_IN_KEY',    'MCqo&Ddb7KZsxcJwk4|bY,db6*JIL+$wm`.nBKzw@BTv.PNY}lUm;5N$zXvPBz4s' );
define( 'NONCE_KEY',        'E&UO3&hz|aJjDH079CaIuI,5PvD;.Zcj-,&7$zU}QC+r0C9%99`W_~<LV`V8BFL2' );
define( 'AUTH_SALT',        'U*g%wVnz`*#j)krrQ1*Re mgZ:<mKhppf6(^^FJN%2F/(bR{XumZ3bleZ:3RT1m@' );
define( 'SECURE_AUTH_SALT', 'a#4PFW+5dgGxF(sN~OqaS:W?PHyO]p(~ldxhBf^(8Lbi/e;Q+im!OtMfDkYf)QlK' );
define( 'LOGGED_IN_SALT',   'G#v !&]ryCYQX1^A<$E^KNjle#X]g5su{eS_eSVQqtip#5M$I]:6hub)6txrT}.W' );
define( 'NONCE_SALT',       'n=>1om~o;qt3AlcN|k~gAv1/jkSp3EM &(uTZ+Z!tfv[OR4Vd$g:qu7og*h:%.>I' );

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
