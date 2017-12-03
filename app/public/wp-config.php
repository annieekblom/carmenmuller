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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H+hBGloU390GAUPOeHm80JnS4dXplp1RmJDPD/tsnbq2m5T+G7vl1KY32PnxgwhJT0iu7drDEg4XsgXpZXgmeQ==');
define('SECURE_AUTH_KEY',  'IhrT9ETTi1XKH38tz972lemYSHvkajJmjvUegym4SndiuEJ6zS2uVsmHJX6LrE5pJbuPUgq6IeNQtSumCKaNoA==');
define('LOGGED_IN_KEY',    'iFI5HHcLF6QXKFuQKNBkw/POCdnZY+6eIivpTCcNNbNuBvO+jn+u1Te4pWB4skXeOEnv7LUIRjF3u7gfigJ5ZA==');
define('NONCE_KEY',        '6nNlSeG8yQ57r4XrPLwnfgLqNtEc+tJF7OMo2KC0fqr+6wQAlRNkRVxMUK0e5Q72wovQfWlFCodvTBHAEJge+A==');
define('AUTH_SALT',        'B1PcecLib4KopPU9YdD1N2F9R+SHCJQVvsMIfxbw2228dwEjv0fpUjrVz51kHJzmk9/kpoz/9fHwYAmlEL1C6g==');
define('SECURE_AUTH_SALT', 'D3kae/vJcEOasSRSmVjhdBeD8nl25YTPQYUAqkktZmj2LsCnw23DEQgMyUn2dJM2NoyXV/DgWNgV0h5zv4KNNA==');
define('LOGGED_IN_SALT',   'LFAo8r0PkqGCM2F4vlvEeGAyolqNaZHBQPqdF1E6OpoOW+6vb8ZJ4Sph+0KvBe/DzTIvAUNy4G7/tzaRYcxBEA==');
define('NONCE_SALT',       'xjOJAGhs4UyZBj4YEYoIUQ0RpBPXz9xyv25fbDNFRWqX6fNXDlAKJFnErOw5qSBaT6wYqPoWGF18TRZS24CHsg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
