<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'masrenov_wpDevGC');

/** MySQL database username */
define('DB_USER', 'masrenov_wpDevGC');

/** MySQL database password */
define('DB_PASSWORD', 'i5!Sk84]9P');

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
define('AUTH_KEY',         'cgzfekqowqjgmihpf38laex374wbdpxlbfhg7lsym6ioy66kzdpgw8i8jwpycfvm');
define('SECURE_AUTH_KEY',  'celg0su0q4czgixp3e5cpgdy5iwfxqyildbksfjhju75hxf4grpwihz3u9mlrqgb');
define('LOGGED_IN_KEY',    'jvi87m6kqoqbc6fqtelanwgqntqjhd0v0abco5yzj1luf3qkkluyucbq579e8myg');
define('NONCE_KEY',        'mr28pkbonntgawgfgp4haq4fji6bsfdmrr42eropsjvnfsgfys4bj8iokruvkifb');
define('AUTH_SALT',        'd4mziqhnvzkywixbipw6mqurszilj6ivhbguawqr3gkbrunzvqw4ypx40abjvyqy');
define('SECURE_AUTH_SALT', 'mvej8idird8seusgrprf4oogfa5f6clvz6tdujoids0j142pphew3osu28ctenl0');
define('LOGGED_IN_SALT',   'fbbsmcowuluxxw0yrztlr1nrozbwpwionq8klwkmwytrcz05k9vj0iqjew2dzv2t');
define('NONCE_SALT',       'enrt4riguqrakifb2oylzseta8pygnzusqc7sifx8qikyvqrwij5po8212wcsrli');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'masrenovable.com');
define('PATH_CURRENT_SITE', '/dev/wp_gc/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
