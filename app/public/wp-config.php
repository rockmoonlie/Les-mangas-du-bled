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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'bU_;=95${]cK^~@{o}>>QJ}B5,,0OQJT/2k7i< NswWb3uQCg,QipPV#bJ*rSx|F' );
define( 'SECURE_AUTH_KEY',   '.c-FsvvrIK@fbud?8voXrEqqxtf~U[`scFo%jF$i+mRKC%Ds~:AN8W!pkM?<B).O' );
define( 'LOGGED_IN_KEY',     'lBziXZ)(vDp#F+2O%- =yJ{x2*{NuF0|^[Ky# swdvv$k0;IL5lC/>)DUw}mnG&a' );
define( 'NONCE_KEY',         ' A8d-m4492rlGaR~F)>o.if)6OE!YhH#YgZpziDMw6%vpb=;;idQ;=,B2(5oDGV@' );
define( 'AUTH_SALT',         '5*n{%?nVFt2,Iz83+5xx,1_PTW{l[WlO.Uq< ~d0o4Yo}Eu3qEvbG5|+7}d][*d]' );
define( 'SECURE_AUTH_SALT',  'V!,+o37|EpNeUs2IIYPZ)$%dM0BuHhq<DYIi(O&$ _kyk&GHura{WX}4{a-<K!F-' );
define( 'LOGGED_IN_SALT',    '1!!HhdJKc$&fkGqnulH,}%~)jB4)g$fe]OV(]d@ nVo&RppIXhn,UPjImfHB.@v;' );
define( 'NONCE_SALT',        '<6O$LnX>B}2P%Ellw:sjET2P8ShLXT?)N),;,c*vBX>vt#y N}O66l1Zlr:iqsd.' );
define( 'WP_CACHE_KEY_SALT', 'd>A=.<zwr11?7mm6 ^oi>xq^z1^pz!mIDV@3}=VGDMU!U~<W2JqW)*Z*Q1X.OEts' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
