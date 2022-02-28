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
define( 'DB_NAME', 'u334066934_o2rGS' );

/** Database username */
define( 'DB_USER', 'u334066934_ZNOTz' );

/** Database password */
define( 'DB_PASSWORD', 'Avt.98052968046' );

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
define( 'AUTH_KEY',         '(s8o&7%Y%u1T@HfLqR5DO#S):<lyt?Ru:/KaebcnKyeo$XR*I@}O9|Q?-Xwtc.e|' );
define( 'SECURE_AUTH_KEY',  '>VJ3~((u4B7>%Tt.%`jl4IUtWQU^p$$X*v1>+FRfD0nlh`|[%sQCg~*d`s 9Yjq{' );
define( 'LOGGED_IN_KEY',    'HF;ARk2umpRy|R}XN<*W$~{j?#YVL)B8&.>aMw&!NTwBTv2:0N:v0eu/Po5.`e8b' );
define( 'NONCE_KEY',        '_N2.i1l[9iIa6FsYn`n&]UDzVe:Iz-Ukg%2<w6Ij<ZX(=BR6D1;ufCspEFXpr?dH' );
define( 'AUTH_SALT',        '}RX$hRM%zk,PmD]S,}Uei3tpFCaC]W`0Ptu8g8!ZJ(LyT[Wi#?Xt8u1D,MF5/fY.' );
define( 'SECURE_AUTH_SALT', '&r7HQ~iXK?~4M9U0ygwR2#E`w1nEOoxe>.@lf?06M@~{66t[mwIn07,rC-CCnCYR' );
define( 'LOGGED_IN_SALT',   '`RniONZ>6?&un%=EN-~{l<Mq:O4c3*GchYsI=(TrOuN&|)X)rJ18@3D*t^SPBPAb' );
define( 'NONCE_SALT',       'nFmlyK:5Z FACjd5ED ;q1LXOY?d#JUqHJ^$eyq?m}|0GypaY^r^&^BpQ|%>k<kw' );

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
