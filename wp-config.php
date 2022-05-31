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
define( 'DB_NAME', 'nftwordpress_db' );

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
define( 'AUTH_KEY',         '>q])hPzCSD,N:~]V3Ievwg|YfArfIWU<a)iNB~KoIg]i]}p6U~Iy2#FMrqV_),_z' );
define( 'SECURE_AUTH_KEY',  '}T6b>Y!IR`(/w?OGu{(*dnX/=sOS4ke!!$^}2ny%qLUBIF `M;HR$hy&2cJ7f)oB' );
define( 'LOGGED_IN_KEY',    'xPAC9m*-mSUQ[.5m<Mu:u^fqnGb&-5lBX$Bo2eT|W)j6-K[?XlJL=ujqk|`&dBeo' );
define( 'NONCE_KEY',        'Ab[>utk[kEr xDWwDZ*gny <|{yC,*Tn1cGPGu7v2E#K23@ad4v_>;A(V*ZV|HgV' );
define( 'AUTH_SALT',        'y^>{)V;v.2?Mc+gFmGx$?rLJeePWum;i-/%f~[$]?GITHHt=hIV1YdG)QR)jQW(Q' );
define( 'SECURE_AUTH_SALT', 'IK_8qn;:% sa)Dso:IzPMLoYB{JK~[0%[FqV]Y4R,OR<8!#D5eWpJ/j)nK6@%^E;' );
define( 'LOGGED_IN_SALT',   'xP$mW^3]hbhz[fC/<I0BG;@FLtu`!!6e!pj2Gv&Knb^_Hhe+(lVeQj^ZE$ rPLBC' );
define( 'NONCE_SALT',       'eU_XzW6>qTHAa:MAzbj8YBqd<g;=hXHG-?tolMs/3Tp0<+Z%[5/MW2JtdZ|m,NBe' );

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
