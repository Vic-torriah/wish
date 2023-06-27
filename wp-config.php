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
define( 'DB_NAME', 'vic' );

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
define( 'AUTH_KEY',         'O_6F+l,r]>Y,f<qFK;z+%6|gKKVoZc@5w5P$wCl)Ny{5yjBZPQrZDjfH@gu7v4C ' );
define( 'SECURE_AUTH_KEY',  'H=60|ZVrPGi3BkPa?cA`sF26kH8$pmcSV=BH|BM9| A!_bX^dtj_#~{S]gbAL4[l' );
define( 'LOGGED_IN_KEY',    '?YPq=I!]qYbn&Y:x=:T:ClYHA-Tq>Yz)!PR<munS~Ww]7~,FK~dH $pjkR016Q>~' );
define( 'NONCE_KEY',        'hA.Wxutu]~)OzFf^8>tt$Flr_1)s|arID?pIKMakM!}t ev_.t|-H/GII_J0X#74' );
define( 'AUTH_SALT',        '8nk,!{G#~=5n Rd*I6(K]#6Z}P~Nb7`J(1qOf{}h A/A9&>&TAQ.CJU&&2nA?2cp' );
define( 'SECURE_AUTH_SALT', 'ql;j/ZTO=oFWZ[FSYme$0twW8:7su<2!}|2TGK);B2mc6B5r/VS}L;8aAxw4X*a+' );
define( 'LOGGED_IN_SALT',   'D+9_bKf!vR`F(p>>0*<lx4J*i!u>#0#1_/Kpr` raTzXOKHh?FHS!P|Z}1E4DfV_' );
define( 'NONCE_SALT',       '<wP0/sqFI6s<^^stu/|D)oS,K+6_ %Ze+3*{t)O OU39]wXvD[vrc-JqR5]zlylO' );

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
