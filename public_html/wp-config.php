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
define( 'DB_NAME', 'nx365' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'wp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '{g2T};^3h;Z3qi:GyIJDKujF@<nmUcx^Gmq{JQ;ZzpTr[.=zKw|AE2o)}:q048;)' );
define( 'SECURE_AUTH_KEY',   'jh1#T9PUC}Wf2h|=ncz![>esTHH>+1%:s^S=>QTI>]K{_q8AMyHe^6{)L6@WDZV1' );
define( 'LOGGED_IN_KEY',     '79byNw9]d,%ZG#jS490Z$CpnS<d8aW?|`%P4.ip%<m@QmXrv?Pu9,/j&5=HUvN-M' );
define( 'NONCE_KEY',         'XGdoH^;&sLVAF<Ldq;SgQJ$A4ciUTT@`U@!:t_*.3S$&rr@/L2ES(E0d;[D5dR8y' );
define( 'AUTH_SALT',         '{j7;w6zQt]@WigT::_zoOHzb*tCC|KqW<V&ph2El@EO?gNZ!J~x>r=.VqTc6Ri[s' );
define( 'SECURE_AUTH_SALT',  '!HO:(=Vp}PyN(UW|:% f(S6U_o>orFLWY)e6G9#L:ETsQL~nOm@S;Lm]KKeBCj~1' );
define( 'LOGGED_IN_SALT',    'u~5`FJ_ym!;a0+:pCl<2fuP}e7;*UWmjZq0~%i d7e7NY|Uid)>R1y3w6]A]:^T ' );
define( 'NONCE_SALT',        '1Gu*`e5[au8s%I-b3eIrhD1z)IMg$)3V8)k0RHcU]u`+*}U[=lf,C;U%EDdZ9oZ9' );
define( 'WP_CACHE_KEY_SALT', 'lqTIDNstY_(#fQ[B5RL?v;!!_!6-qy*$x1$j.{x}N^g(hVq$>XXg~tL3j2kWDHW4' );


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
	define( 'WP_DEBUG', true );
}

define( 'SCRIPT_DEBUG', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
