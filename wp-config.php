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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cnpm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '$OR*6sT*OaPn.YKotbO8,t~Hq^I,2xvoYw2c9!K,^=n8m5Y4}c|}&HkHwZ0SPyoS' );
define( 'SECURE_AUTH_KEY',  '-WQR0HR<tuO*LCu$OL[pXp:w)>2:HxYV5JnJ|)7m[e7p)58xqQ#h&)W].8e(=5io' );
define( 'LOGGED_IN_KEY',    '*J@YaO3LNGlSRb.UoQl`u/{=@gZblvoNsO$pluKL]h[`@3N5H66T;v8|b>GE`~FY' );
define( 'NONCE_KEY',        'Mh-b7j,uyPL(xD%yMFOSbRL9~wnWzw8bmLr3>slg6PuughI4rBRqd@>kUQ;7yT4h' );
define( 'AUTH_SALT',        's?gOVaL@&my`>8m|M4,VIb+zJy0B$Yrk=i_ssFB|rc*4p$D5#4!.iCl|SX5[1^Cn' );
define( 'SECURE_AUTH_SALT', 'RwEo{P}(o$+?7$V3POP[7]aP9Y^raPk*Io{0.-N6^;?HRc8nXC.uF!u:%AbFg%1p' );
define( 'LOGGED_IN_SALT',   'y;ktV!Ocj3aFG2z{73yH%~fxhg6iGN+rd-(lH+;n-T:r7g|p|/+#&lqrO30:r)hT' );
define( 'NONCE_SALT',       '!GUV *L9F7Rf@5;d3pp)nWS-l`T+os0(k,0hglJYf#R;vCt@b0<581?.BhDK,$Us' );

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
