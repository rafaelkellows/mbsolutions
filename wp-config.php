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
define('AUTH_KEY',         'TZnYJCr8g4bVq3TTYeI0RGGEox8lQ@9SPOAcah1Y)SRZeXm)U4l^(tyb%yUAd2*U');
define('SECURE_AUTH_KEY',  'WV4wS&SkQMYx#8l4#VK#ek!aQKt2QqzDmP^dawxUumvSxjGBG8CX1g9gmN@sQH3p');
define('LOGGED_IN_KEY',    '72oeX@PeFG(Auf@)XyS7mnHB3cwq@sBkoiiMH1DPvylqYGYEPAaSBW^Tfb7zPRrw');
define('NONCE_KEY',        'YR7oBq29yo6Y)DRuqp5WT@NkCULn(Quw!)qwc&I32MdWkGDFLKSEv!oWhqBRe5ay');
define('AUTH_SALT',        'cttpsi%l55gX4OCMTiyTf(eCE83tx6H89rYSVsGVo2UONIN)vc1%(!Z)53TlSLD%');
define('SECURE_AUTH_SALT', 'jyVBZGW!bn*88qHeI0Cn)gM9R#Tc3jr#Z4K4yy@SYZv)N21AiPy9RDEC%Tkh&DRZ');
define('LOGGED_IN_SALT',   'dQXpxuXGS*(%G4!O0xdE#UnTX6FkgEPVWfLyIeR2fo3H#*SjiX0EYRYoNzI5qji%');
define('NONCE_SALT',       '@b3o%CywnBUO)ddk5oAgb3a#d@OL230fP@0y5mCw*x)4OhcJVOQ09pjdv%pHE&G6');
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
