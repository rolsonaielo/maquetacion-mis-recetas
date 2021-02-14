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
define('AUTH_KEY',         'lwkFUjwegZcQ5ynnBquWYbEn8IOVyR1EKcAlmUOv2EVveFc6HkLMIfJUKBlPFC9DT3pMV1gwcLv6zx3xkATViA==');
define('SECURE_AUTH_KEY',  'e9u3pLjjzlNzADxekg5SR7G4NpNfgabCYnTNZ20V/WfYFZc473D2Kd3cayELkIhnF0JCurOqVALq95i4ZV1lgA==');
define('LOGGED_IN_KEY',    'nAAIqVPpvFk6ZKVoZZIs/0xYXMOmkmkEZPC0woaPc894ymoJarbvrj44pACPoWX2wVrVYNsGwulvF/7bAFS31g==');
define('NONCE_KEY',        'uEAvRLl7WOtS3Z3EgJa7rfazkKxUlySO6eSkPNlXK5Ko1QoLTaDemwuRUsfFnN0mdHTicNmiWIBgwHH/f4PySw==');
define('AUTH_SALT',        'CWIhXaQHBdxBukTOt2YT0PCmEGAbOs85xQFdpMr1krUMGGm852Ns5e2ZgA07pReN8wGUAE+0BMC5c2+GbO/5Ng==');
define('SECURE_AUTH_SALT', 'tHRuK1ROmHCGZ3itHsGr6YvvdpUrJiNRKR4luez8nCSsrd0J0gxaN5NT9na3Qo8HMrX9Z5gi6BRNi/I7fIUAjA==');
define('LOGGED_IN_SALT',   'RD7uy4+VKTg0b5BKyDCPABWbPWIjjiOIn1994pfrtBn3cLW0ggkSNhpdW6WLokdQTj6jraySt0zXKX53fLQ9lg==');
define('NONCE_SALT',       'rcei68gP+yCxz/X0/woryw1pDztdVoiOZKmZho9nxBtzEZ16QXYkpfZZSizwm2l+39GU9/xvd7YLKi2ZN9RRzA==');

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
