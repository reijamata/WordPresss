<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'efJQQqyngYh7DyjIF3XFsjwEoTYRJBTCuYlRDn7ZXYeTS1Z90YwJeFTRMlmwvgX4' );
define( 'SECURE_AUTH_KEY',  'TMUvEIecJ8fBTXfUsjmyzrPiMWpcm4sXGu6OqGybI2FQezR3WAh44lZZmvbUVWYy' );
define( 'LOGGED_IN_KEY',    'jGnBhPakL26kYCk7ElkuwAq6QUBUnSGvz9cD3usprdVdf2IZdpPzA8zhZe3XRPT3' );
define( 'NONCE_KEY',        'BgtqilJCzilGYpsO3K7VSeFsfjFjzSf0NPuo6xB0aY7jAp5sLPNbtso0CdqR3Og1' );
define( 'AUTH_SALT',        '3ZgBj7vXFRz1PiLCFbDdYfR8tpDA2U9q7XOJ7hHvUwSg2CNxYu1bUBFOumTIEqz8' );
define( 'SECURE_AUTH_SALT', 'VlRLVV6fuBiGtelbCjUH8vhK3pxZPLnQbSYhEauxG5XchyNhk4hP8OzpNz4CSai3' );
define( 'LOGGED_IN_SALT',   '1FukUCIOEhoVJujugSvn01fwBe8QmQCCKHnWAHsisL0A443KjIsjNdC0zmVheekI' );
define( 'NONCE_SALT',       '5Z8UUkmmNYtaZKiMUs75bucia5IISVRojxLBvdp5fslXOzidhnDOtCESl0MVzimo' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
