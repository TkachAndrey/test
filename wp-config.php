<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-kronotex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|=u)ZlFu>p!OT[/u(CzFW tx2W5Xp&a.z5H%&xE^p~e5kFZ;L*kDIKCz^tusd;FL' );
define( 'SECURE_AUTH_KEY',  'yt0M@3$uiG4w08cAWyPpih5AVB+Gzdx.s7.uZ/p]E#TE;M|DnONm%zz8#sHmA>Pm' );
define( 'LOGGED_IN_KEY',    '~QIEu9=o@uK~ x/x%rUZV|PO@:A6qh$mwe5x=I`vm?.&,D=F|:bW3.|5l9Xdb}Ns' );
define( 'NONCE_KEY',        'S0dS>6qg.jvQl}>-n a8T Wqp@EFv.JNSq=xoo6x5?7}e8?T@4S(y-:kU5mu;;C7' );
define( 'AUTH_SALT',        'NAL^iZlN}E/!XA}6Efz;q:=4k#V@n8XMJz~WDb=$5%w1gObd]I;eq=vw|PK]63#!' );
define( 'SECURE_AUTH_SALT', 'bv!V8 gupk3D;^/WokDen!])@M#2!(|L}QBp3_G_R#80%V:9@6/OV@=3IZB$jjSk' );
define( 'LOGGED_IN_SALT',   'L;e fX0PUH^YjL^N)0fx[-C&&BXPt2wyv_dQy-mRv9/?yCu%oYfsz~stak2jw~^i' );
define( 'NONCE_SALT',       '>?LQ]7jC9}|-6mK(jA]mFo0UP?zcx/Xut*#TC%vYc:a)zzX15Y2Ag5C5Lo4Ay$Cg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
