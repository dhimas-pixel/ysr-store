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
define( 'AUTH_KEY',          '(sQH|ycll$0 FTV@lHmC~xtXo6F`U(~G2v8@YTMUr<yXpDUjf{!:FM$qJ&E>=~rl' );
define( 'SECURE_AUTH_KEY',   '8r3(  lRH>d-txrS#*p{;0E-)CKPE7S9Vl`d[l%X4&dC;]-G,05=pE2<sZ[c<MTK' );
define( 'LOGGED_IN_KEY',     'OIANgCJ^*TSo`s_X_.xCt+<ik!6<S|}ybHWr5dax._o24EL#: 4!GQwOgJ<39e,S' );
define( 'NONCE_KEY',         '$*6/M7wh}_I6]{)nVe2K[;AR@tF;B8(7]k(3w?%Wf}j5 Jm4M}J3n>Nl3M3kmDK|' );
define( 'AUTH_SALT',         'QbJTp+V8Xt0>d5zYmoOE nP@G&1e@V)e&&:l$|$BDh-^_SalT@kaHv?=G@/C)?F7' );
define( 'SECURE_AUTH_SALT',  'uMU_@6<D(_AiFo_cv<q}62b%<g3cu.~jJ_7l}WZ_Qgx/rj-q7f&t*laTjEJ!^0<f' );
define( 'LOGGED_IN_SALT',    'YbL7]`-T9-Fi$;F($.[;GK&0;/])r*:~[Y3UP5mR4P8Ye;; zsf$y#yZ7W}(#r:y' );
define( 'NONCE_SALT',        '4Nzn%D0@vsZeD(>DlRdPMSL]ctz|]9LI|z=3jvBHy y9hl^(qaiS]qv.}?ZC&YhI' );
define( 'WP_CACHE_KEY_SALT', '[Ed}J$BZ+#/ =SZJxuelI0Y?D4#i4(_GB%EcFmO?,4ewP(@,>{*,6G5q3Sow|dfL' );


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
