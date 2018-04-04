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
define('DB_NAME', 'aigf2bdf_build');

/** MySQL database username */
define('DB_USER', 'aigf2bdf');

/** MySQL database password */
define('DB_PASSWORD', 'Pcdeptrai89@#');

/** MySQL hostname */
define('DB_HOST', '112.78.2.195');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MKV11G7kP5W$T:+uy}x0S|8Wd&a;P0BY^_bzdgIJ}gp$zAZ3hCtz1AKIA^8.T3f]');
define('SECURE_AUTH_KEY',  'u0cwY%,:Mqk%@B5$R?sWsxE!MB. fN9`_wk39(@l_9(8Y:[EM+ksc2A,27|BEKfn');
define('LOGGED_IN_KEY',    'F+-:(UF-.!^vZ~LDhP_9rm8bueiV(p bMIP4tE%>RMM7N8>YgO+{?kKKy(5fJ&Vn');
define('NONCE_KEY',        't:yvP=%*F|(ibXLsAKo8N^;`~MbPJ^E1F<%<xU IO69$B[AWaUu_SikerEV2`KN3');
define('AUTH_SALT',        '4$r6)v8sp6v{H ,c]_N/<O4z9LO`[%!1IkTsA]2PQ EA?r-!d*t`$|P[h1YFCUL<');
define('SECURE_AUTH_SALT', 'S[-N7st~|uwe1J;AD^[;&5s=ajSiR{RhPK&5a=W.k.us)L,6(XIR5?g_PXTB{zTO');
define('LOGGED_IN_SALT',   'X4$QfhFwJ|4pwNEnIP*deMA=E0&iI2U>_NLI_G~!L$}baj#0yJ,_uuPi^FlwINV5');
define('NONCE_SALT',       'CwA_]tj@CK:x)zcC<7E%EqT8Tl`::jvlTZ4a!_oqZ+Br23ybVKXq&**N~U<3!q]!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
