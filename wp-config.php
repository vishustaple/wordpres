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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'roo1' );

/** Database password */
define( 'DB_PASSWORD', 'Password123#@!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '`uU724VW;GO93lq8-~,{%,u}=-ja%*7z?U4i?>L.8S&u_-~su4P*R6~F9?XN|?x4' );
define( 'SECURE_AUTH_KEY',  'mP9Rb=6`Dz29_k&`zQO^-Nhm`N.^$OSm!$KCL,(i^7>]QR!cD+(45Qc5l.[XfgWK' );
define( 'LOGGED_IN_KEY',    'gbRC/h(8ruj*$O_+SmT&}spj(9*G)kvcRyn2YY[fq~?sr&u4c);St0hMi0sjX2CI' );
define( 'NONCE_KEY',        'N[HmHNQ&! EO/dl[B3G,7:ub{}80coO`C)}WepE#eu$*A/p#`FRDaR5%y(l}?Y;R' );
define( 'AUTH_SALT',        'SZ/)VAWu ~j0:Cn.ooL/;O[(XVgl{,BHBe.6)By1JI{&e-L0!&Yn8#owo0aQlxgz' );
define( 'SECURE_AUTH_SALT', 'y%Co9^s6cv`tb5hTelUy[2b}J! AVV_5F5T+T`b=qDa!/]xR;C/TLI%3z5GD!zBQ' );
define( 'LOGGED_IN_SALT',   's_Oy0q5_~J9=PQ9)Ch$/-)Y!H;?S|DYDQ s4J/5iGUSxkvqr[<L2d}P}h4Ie|Et ' );
define( 'NONCE_SALT',       '.lC?-UT|9-($/&D i&QB]~zWW%aP 1u2yO=*rs&F88U0<yU,p2CxVrJ/(D;md9oK' );

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

