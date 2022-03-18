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
define( 'DB_NAME', 'sql5478951' );

/** Database username */
define( 'DB_USER', 'sql5478951' );

/** Database password */
define( 'DB_PASSWORD', 'a5rjiMVCHT' );

/** Database hostname */
define( 'DB_HOST', 'sql5.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'vsy[B!OmERH(e1Z^gy1=HQHFH{f(Q0k+5jQ^w=?6g-DsCv2d:*Uo^E!k[lMx7,q1' );
define( 'SECURE_AUTH_KEY',  'bM|b<vv#Z%V7_Ec.s<y>tou_&~a|9dWN,U`8=z%t:(kYPD]bP*kW$r(fqjb&/cD2' );
define( 'LOGGED_IN_KEY',    '3gW*D#c4XM>1#m<-3 HAHM##eA|V*Mri:Gs|6+v;S:<p:t~c)?MDczG:$X#WOD&_' );
define( 'NONCE_KEY',        'GcI%*gBOY mB&FVaFOB@(2hoLB4;ts$q3 t;d<H;J^d*U_Qt`NWUu/P3e^d7!d0;' );
define( 'AUTH_SALT',        'Ji8m6alfX:.NWFWLib%0b((&N|r5!1=]bwao[Ois}aA&VgW+h2&fIrVnTP;%xfT5' );
define( 'SECURE_AUTH_SALT', '@h& :p#`64*r@9dR8?H%I.=!4<Ag}VcSF>/hSz6*r1y?VL!Ka#J`S,kD2r,qe~Y6' );
define( 'LOGGED_IN_SALT',   '[G;K+>k{ZchyoaAs!GDFys`8*=8-I?zZY0/o)h74YLJ8c>j5TI.6S;,SbLfKZm$w' );
define( 'NONCE_SALT',       ')[tRR}@{UBP~,jkD<[VQ(M]iH-!:htWx35.>w5}OY$,JS?7C]*O$L7op;9}%zEc~' );

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
