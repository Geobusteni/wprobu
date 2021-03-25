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
define('AUTH_KEY',         'JfXOmsuTUCupuY8JuLiOlYbm6y6EEoQcsj9IeEIw3RyJsjPWro6dVsevUZxIP5ZZCXwXESAZR38Y+7KMDks8DA==');
define('SECURE_AUTH_KEY',  'jfny6OHac8ZGKJ23PPB0NMYigI6V/3CZwZQ/ghWQkgVe672T9AHChLfO6riw2K4/vv+zizzXWAYMGSQQstS5Ew==');
define('LOGGED_IN_KEY',    'sYjEXuwzjL68CF/W79Uzt7uUpV79mIQ0utjE5eu+i/2Epd9zdbj9fcnL1Y/Gxhiwd+uVcpJ5rB99kwbjyjdUzQ==');
define('NONCE_KEY',        'bymXDUGvB3+dEVbxyG7xT/PIoReeoWaakmK8vKdCtu+jJroTEOh3I1gmzgqNnVLcCtKzvt1pHNSP6N8MHCHdjw==');
define('AUTH_SALT',        'yVJmb0U+wXmd5dKA00ae+OeuxGsVy9PeVSWe42+9+kGFtYZrsEBeOPy1PPJa8UUXeDkJKn/E2d5pq7MheBrUfw==');
define('SECURE_AUTH_SALT', 'lhNeXRvUa1rlISr4zqReyhdAYJVNysGqLNuOiL7uMYnKHmASBioNToNssGxDaZBc5D7A72QsRB70vog9k2bhjQ==');
define('LOGGED_IN_SALT',   'oVBIOwZUerp6kRRIg9XQvJ/AGLch5GsRspJ8IAweU0339lrbVKYQmXLuvNVxev5r4h9RH+uK4DTATxwYNsDLGQ==');
define('NONCE_SALT',       '+rkkIvxhIRbqazMloua/Qv0sahRbz/r+kwC2Co3vCI6TUYKvNTqXDDpgc464eamYLewOLn8eihSKxm8VgYOsjQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
