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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
#define( 'AUTH_KEY',         'put your unique phrase here' );
#define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
#define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
#define( 'NONCE_KEY',        'put your unique phrase here' );
#define( 'AUTH_SALT',        'put your unique phrase here' );
#define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
#define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
#define( 'NONCE_SALT',       'put your unique phrase here' );
define('AUTH_KEY',         '(X&6c(WXEZOO}[#-M.Vt-fhs!#d_T-%^^vEA[r_(z--LSNL{#&0*5=*4gzJM+}|1');
define('SECURE_AUTH_KEY',  '[e3bN71G.7k{&2%-<v)u+m+MTm7uTyR#rp~B~t)N<l KwB*B|i<|Gc]t{-IEj5J#');
define('LOGGED_IN_KEY',    '>iTO2g43?4BzX,[f/TbFf{.kY*JniH-,2UL_a8]X&6i<RN^#k|.R|1X^?}(++AK0');
define('NONCE_KEY',        'ERdf6#)n.{p;??HfGo*V|FaJ*RbZ/q[i_yBVoVUri`4G4C%vwu~c:)7d.I/W!5S9');
define('AUTH_SALT',        '#EHVs5yu<{buxde7zT8Tvi0#`T--+H(I-;9Tz]Ic}Lf=%S|#cEY-B8CSJX,NqnmV');
define('SECURE_AUTH_SALT', 't,v$0+f>6*s<k|5_XRPt(?~Dub2EfaFY;|ECXii>diCg;5&sp}%YP+?gLY-c/>&4');
define('LOGGED_IN_SALT',   '}5P3XDsWUX[cDQe_1]$s6M6M.}|5x~V2RjJhNhjH>[|}FSMs9OxA<+=}s*uABfo?');
define('NONCE_SALT',       'lBnqHNXzIx:6T1g<b+q2&KTHiBJhb&wj}5sHMS-r*{-x&t!L6RKx-@wKK.p.~16j');

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
