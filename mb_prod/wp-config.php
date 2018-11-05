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
define('DB_NAME', 'dbmontblanc');

/** MySQL database username */
define('DB_USER', 'dbmontblanc');

/** MySQL database password */
define('DB_PASSWORD', 'Kellows@Rafael4527');

/** MySQL hostname */
define('DB_HOST', '198.71.225.54');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f9c&2ch#(Gf^9VxvH8EFi7EBRgBR(#dsTNtZL7&GzIKE@lp9AZntEb#!%1v28FTl');
define('SECURE_AUTH_KEY',  'QfXwHY3*ND8QH@zJpqWQVXR%J7eMOzE8wt#wT5Ppj(oWG9V0&&&n^EE(d6yd9x@N');
define('LOGGED_IN_KEY',    '6ja7S7roa6WQcb)QVakg^Eawj5BkSFFdgX2Pc66&TFFwdcrp%%k7wvk1LAd1xuFg');
define('NONCE_KEY',        'iDeX*rXPRw*^&*7NByRyO(Lppf81BBURrvUJQWWIcV%QS9G^t5m2r!X(KhZYa2(l');
define('AUTH_SALT',        'ULt9Zx&a4r*d*Mueys6aj2J7Aa5(Y00lx%w8&V00nqP!iw9pJjGD9M)XTH%^Eq#P');
define('SECURE_AUTH_SALT', 'j%Y&RaqcmZjlyLCVFADQigiR6U09NGVyUoQziU8k(Ye*B5Y5bRVnlRLXVk%LiLKj');
define('LOGGED_IN_SALT',   'Tz&Kw0aayc@HX&UX%NPtxvMi0o8y%45bwUB3)qq6qwtz&Wj@tUFlmYHgO1SbLclp');
define('NONCE_SALT',       'oJ#e8L8Fe2w(n2PDjR()4o8&ENy4Zh^R5@@lS%pOgxU95r#kb0D!qtF(tjN1O*t)');
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
