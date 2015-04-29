<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'novastar_wp');

	/** MySQL database username */
	define('DB_USER', 'novastar_devuser');

	/** MySQL database password */
	define('DB_PASSWORD', 'tB?3O&da%Wm#');

	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	/** Wordpress Home URl -- defined here allow immunity from database changes */
	define('WP_HOME','https://www.novastar.net');
	
	/** Wordpress Site URL */
	define('WP_SITEURL','https://www.novastar.net');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** The current website environment */
define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n[_GApMQ0-<-s1 b[tX>*$A`JAm||hd[#lE1z{ 5g_HcRz5[,O_N@>IuUvJ,DlT|');
define('SECURE_AUTH_KEY',  '>q[5+l!%rzBu!t03([0B`Ey|!V*NvfP)c9uN[(&&L3RJKAx,EAtWSo*2.vL@%X5e');
define('LOGGED_IN_KEY',    '$_U)g#VB|A46>]iy);S>kYVLj>+Y4qx{d_+}H2JC)eVlHz[t(+Qw^T^{|g2S`Ei(');
define('NONCE_KEY',        'Rxc:r|U+OS[++Ak/e/)iVInP]T~0s<*#u<k&GH{B[SL}zRv-rAAt0Bcl0jNTvP+N');
define('AUTH_SALT',        'eg!MDj:l#&:3HArrsq-oQ_R?Bxv `V?C&BjYRrN+J}27v1sYkzH.}X=k++.&R!w(');
define('SECURE_AUTH_SALT', 'C_Lv!ZbV6;_@!M=FZAGr?FXvVrHd4s#jB(eP-cDW5ZetS^px|&,W[od1|qa#9l- ');
define('LOGGED_IN_SALT',   '[)Z,`~-3k]eqdK*3g41_K(0J=s(v}L#TE1me5$&F-L}<7imejvejm_~c@R%(`Vk6');
define('NONCE_SALT',       '1*9KY/)Z]xIaujdYMBXh)-GEB9-<O10gh$0)Gf}w~:6`HF&Z&}1bLL7M{ijc$+nT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
