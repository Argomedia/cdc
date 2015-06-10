<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cdcwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

define('WPLANG', 'es_ES');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7RD4uCRdpJ`/y7m-meb74JfnNy`D=d++hl4:O*#9-n?BVQ+.K7EyN|5^(rhd--+k');
define('SECURE_AUTH_KEY',  '%o`P0k>>YX7ZT_lf;HU+)[d+TMEMHg9^},;=+F%i%r`>#VKY8k$f#wzFvNzJ1p_V');
define('LOGGED_IN_KEY',    '+N6;kVC-s43pAg>&?5vXM,<_*:087%v+/t!Ti;YY2$wg@i0QR^D8U&C|SJ8jz! [');
define('NONCE_KEY',        '&}@l=*PZV71&owS^-$?K9cvgu[7}2.:s]nOQ5hQ(qloeHyUt6LKmcIY_9UK_tD|=');
define('AUTH_SALT',        '=2q3s<IM@_e&Qjt7D7stl$um)Spg;Y{_AW+wgU8{@5,@j,,Inu~Z:;l+#B@o;!Oe');
define('SECURE_AUTH_SALT', '--%:{_>v{FuXa(S|.-OrTK2DAcduOE%)`@B0s.qcdFvR?S uXvK6-|W|vNzKRQjp');
define('LOGGED_IN_SALT',   'N}h0yXu,S&$p?k.gB+,_VSjzcJ9j+.aALmaE50gvy4gm-+py8+p7cxH`Wi%|i7GB');
define('NONCE_SALT',       'I)$9dW$X1_ng6S10{{|+,N@&*,Sa8WEUWten,;7*JXp=(%tes^a_D&kT-h;|w6[k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'w3sp_';

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
