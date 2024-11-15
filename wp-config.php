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
define( 'AUTH_KEY',          '7CK|J*#qdRwv{wv {L+Mt#25e@Fp ^BC/#P@g[[(co]fDGw{9y`4M)bn{Hu1FWdf' );
define( 'SECURE_AUTH_KEY',   'y@(0<*CjWUO<CD-1<YK}7~s ]}`m,5O-:Va(r8_QF?i9=nH2}a6LOXner7XvX_a>' );
define( 'LOGGED_IN_KEY',     'W$;Q-^ ?}g90}m<4OT]!A7*AXH:6Q?|9,YS>#CgbJWHRC!?ywsk)dp;>Whi9p<na' );
define( 'NONCE_KEY',         'G=%Y:3bg%`M^s2q@I9e5d}iH<lVr#Q99*)cz4e_pFX`JYUav^}N_>s]/}]KL?r/p' );
define( 'AUTH_SALT',         'wlh,f+!WEoPvq-;Dw:jV6226cNE()7K%`RJuq7^%~<F/pm2vb;-K&XvE#Ws(}=Zw' );
define( 'SECURE_AUTH_SALT',  'foHvU`5(2xyO]ufQ>u#4K]1-t!.Q*D|%bh3@8=@*eW<`CjY,U3<prk=a+R.IC~v!' );
define( 'LOGGED_IN_SALT',    'FJ?ogm|-fg){`BEGkIj8v&W/[|!UFb`N%(IPV|7V#?uyHa0O[N6sqWmAx!FH5j3t' );
define( 'NONCE_SALT',        ' *(I?4uf}7!oN%M3. 5oE>O__lxoB;6YpRh5GQ3;yN|!Vhf^@.OV%;8<!0Z34^>N' );
define( 'WP_CACHE_KEY_SALT', '8&:(~@Q/>;+H9Ykzd(u1#Jo}2)v?5OA.QYC6jq)_h2KI(4#B&q.o{PS$If1`/U/<' );


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
