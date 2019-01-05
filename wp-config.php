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
define('DB_NAME', 'devmyhomewordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Tot0tot0-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9_5DQg@)I{ixr[xHa-B.-Vsv7Bw;Gd+/oZ+oR^.+DX%v+Uqq7/Awx]|.F^{1jvBS');
define('SECURE_AUTH_KEY',  'Qo:<y)t;9>muQc:G^+J=8!BLrSaG0F=$LU/+OS9-w}6Eck}Z$P(ZYW4=Qy*hq_K');
define('LOGGED_IN_KEY',    'Qo:<y)t;9>muQc:G^+J=8!BLrSaG0F=$LU/+OS9-w}6Eck}Z$P(ZYW4=Qqwefg');
define('NONCE_KEY',        'Qo:<y)t;9>muQc:G^+J=8!BLrSaG0F=$LU/+OS9-w}6Eck}Z$P(ZYW4,mnhnmh');
define('AUTH_SALT',        'Qo:<y)t;9>muQc:G^+J=8!BLrSaG0F=$LU/+OS9-w}6Eck}Z$P(ZYW4=Qy*hefh');
define('SECURE_AUTH_SALT', 'Qo:<y)t;9>muQc:G^+J=8!BLrSaG0F=$LU/+OS9-w}6Eck}Z$P(ZYW4=Qy*hwri');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

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
