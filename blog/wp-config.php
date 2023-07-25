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

if (! empty($_SERVER['HTTPS'])) {

	define( 'OD_BASE_URL', 'https://'.$_SERVER['HTTP_HOST'].'/' );
} else {
	
	define( 'OD_BASE_URL', 'http://localhost:8000/blog' );
}


if ( $_SERVER['HTTP_HOST'] == 'localhost:8000' ) {
	
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'odessa' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', '' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
} else if ( $_SERVER['HTTP_HOST'] == 'dev.odessainc.com' ) {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'dev_odessainc' );

	/** MySQL database username */
	define( 'DB_USER', 'devdbuser' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'DevU$Er@23' );

	/** MySQL hostname */
	define( 'DB_HOST', '127.0.0.1' );
} else {
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'odessa_dev' );

	/** MySQL database username */
	define( 'DB_USER', 'odeadmin' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'DeKJSyT%%123F' );

	/** MySQL hostname */
	define( 'DB_HOST', '10.72.1.36' );
}

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
define('WP_MEMORY_LIMIT', '256M');
// define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         '~+_etU_/#l6r/?h{Nmk7Ud$=sppY`OsH14[#l1hK3YYOLs#d$>bZI)eMJr0qy3bE' );
define( 'SECURE_AUTH_KEY',  'R;36Wz]FnLff.19QWXlV? m5>5kz>`1k-XGU$7_fbB]#gvWz+j!LR7~ 5bJmZ!S$' );
define( 'LOGGED_IN_KEY',    '8Qz1od#]`?%@}C{~n-u{~n~s0f&Tg}b>(s{WsoB<v?TCx^+A<a<e:8-V!0-9AQDW' );
define( 'NONCE_KEY',        '7@1Yh bA+ %LD]9i^GoI{R:+#R-VX:dYH`01R{)x+&,~NpH,I8caZAY!kap4.5bN' );
define( 'AUTH_SALT',        'QZV?{D+*Ly}Uat_T/Aoe99a$-zC s$?*Gw|`QdnzuktI0rO~I[pPVYsT;^* USD`' );
define( 'SECURE_AUTH_SALT', 'j&m7yA*UL5Mht%E6]og10O_?`#Jsu|=~@@SVxA[d-?|UPYNS4f$Uydixmv-yg&C}' );
define( 'LOGGED_IN_SALT',   'LMarRYW+<c1,B@v!KyFUCba{HNV$j6~`]i#s0^5h<GM9q8clHsZ`Lv9>lr=/:hlF' );
define( 'NONCE_SALT',       'mmwi!Z}~L261R7Q+lsReUp$>ZFU3rAI]yK{/C*cSYMg< w[! z|f_EkK9+s>Opa ' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
