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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '!A}-0Je4i3k_*vQvlDt`+FENA/S%7h-G6o4l8#jy1Wfa7<#W#WPFlW#h,j3Kn) 0' );
define( 'SECURE_AUTH_KEY',  'CboomwH@l*y#.LX`Yb![I I*hUl$U3xY>td4@HPC|ArL_&GAfqX`LBn5~Z4ZS^E+' );
define( 'LOGGED_IN_KEY',    ']E^o1Z|Pb;Lir_zFVpm1?T_F0G$#3EDTlIrDoF!cUJCX Ck@[i1CZ?M#FyYFUlLs' );
define( 'NONCE_KEY',        'AX5T&bV,k6L @2Co|47Kr9?}{h[l0 0vJ{`l%gO|]$rzkW^~k|xEh-RWj4wn{o9S' );
define( 'AUTH_SALT',        '@YQoUKxvCV}iZC|1Yq>39_$gaB;#KbNRZlBpf*r?<oPbE}:uv,co_b|=BL_E&Ju9' );
define( 'SECURE_AUTH_SALT', '!+)Nr=mSNgriO; JAbnLuefm)Z(G6i3YTEn=gv{ivom|@:xqV0[Mcs2,d/!$0=Ct' );
define( 'LOGGED_IN_SALT',   'S].>8kI>A@jQ}ccxHxEI&OFJ^!4pN#,s.{nDuB8%%mkJ@rErG#t#O#1O-G$]2(J1' );
define( 'NONCE_SALT',       '^&4f}zS+gq:XjL*/K`-2+7*UeX<V9<^^=_2l^*~T$5E(1T_IIbsFZ~G#R+v2f52o' );

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
