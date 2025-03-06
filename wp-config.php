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
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         'ICiZk1i#LI;Ik9t=ue%69}^uGCi<t5Y0bu&@=R6tF7z1k[e[ 3y7WK.TSY4_0,B;' );
define( 'SECURE_AUTH_KEY',  'A^R*a~Ma*3.Hvu9PLm359?u.MEW<2m;TUl4ws!ns*$2qyCtjL39l,IAPl?hX9~[@' );
define( 'LOGGED_IN_KEY',    'c}BeP0-gduXv.Aj?^E{zN[60`k~~1J=2Gn#_~Ok>W#rR1[fl]~#pwluAUwm3R6G:' );
define( 'NONCE_KEY',        '_~#SR;sX9O{7sKb,rw<@Om1A( YM6A+<`4[UgU_>N~GC^rsBJ2QN{8D%t#2vJY[t' );
define( 'AUTH_SALT',        '1PGgmgTHv>%f9&?W$/)1ZD(_YFK9L5Yv`tb]29xv#xf07rLYT[]UJ{JK&=Z#zy-.' );
define( 'SECURE_AUTH_SALT', '4)nU~8~7dCau9bIZMY9t8_:Y;HS%]b9.EjX1op1x1qc!nLH) pO ~9zP!,@6fEC@' );
define( 'LOGGED_IN_SALT',   '@;T:)&i+o=0y=%YjSooFQ,xVM>J{-a@BT^G7[C{5;Bdfp:^%[gSW^Al#ifmf`a1<' );
define( 'NONCE_SALT',       '^jC9s$:JnmEO|iU8F60$g@yxv]*8r$*HI*qMI5Dlw9JHxZOG~9mRV:l#&&h)|W+P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'mp_';

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
