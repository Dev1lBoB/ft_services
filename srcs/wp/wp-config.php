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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moi_site' );

/** MySQL database username */
define( 'DB_USER', 'wpersimm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lolkekcheburek' );

/** MySQL hostname */
define( 'DB_HOST', 'sql-serv' );

define('WP_HOME', 'http://192.168.99.100:5050');

define('WP_SITEURL', 'http://192.168.99.100:5050');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'msOvIsSINH,gMy4y{Y&S/q&>Cg$Qnm|hTxeH)/eBn@V%ZA|;Y@mWmIyuI::(SNKz');
define('SECURE_AUTH_KEY',  '3b%Q@nb]BlW$_)|soE*+uv7XHc[AtB8~H5?_KT P8Bozcz|,h5pTKDd2_=>n-p G');
define('LOGGED_IN_KEY',    '{&=~&|Fk7C=*FCvFL7^+Ou;%F6Os.kA58UD]%:#s6Nvoi+*.y3ZU2ECNFn~+n30|');
define('NONCE_KEY',        'yP0%y>GU0DbN;DPb@$]:&4:@-`rdLc=!=HD+|tSXI%zc&aH)v=zl.}1=$6M_c+5}');
define('AUTH_SALT',        '1*b@,Rwjoc_v-9LCHyU8I=@Nw{VTVrAW}>IcagN:z+@bAT&zNZclx+vW-R0J^|N#');
define('SECURE_AUTH_SALT', '~V2W?%,#-Z4<f,o(t~QiQp,ZzciqT,%6#U_N?@1)0F9Loqfaz6^e[b|Q,M9S[$y;');
define('LOGGED_IN_SALT',   '%&+!1vnTu^j*+CD$s?FGd[=xr9&*=o3E]m55,]fcpHSgm#Z_HbzNYY $hwF]MO^W');
define('NONCE_SALT',       '_u(Ijx+Dgdr66@11|72/?_pG/h+,c<rd!<uTpRCWoI&m+^:(g_j+0Psp.?@7:;UR');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
