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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'RdyBdiBjpoWM6EzEixr+R7Ya96mjdVNJDpyVLKFs7obCnDLvnSOLfoSESS7hnj4b1A1G1PzGtE5ifTkfTEjilA==');
define('SECURE_AUTH_KEY',  'DxYth0LByDNNOYyfbfCnHLTBtYFzj4LFrJnCRZU4LThmE5CpPrHdJoWgMwEEEV6h83Y499gNQrj3RVVB8j9zDg==');
define('LOGGED_IN_KEY',    'hW/Uquv1E9S4Wp1DUNRxE1ykRdJWnE1jNEpyV2R6YX0jlTJqHQaRrw3vNF6B9m7jF75cj7H2Agz2iUSDYJkIww==');
define('NONCE_KEY',        'jXBgPqbEF98SJ4Bctae9IpMKEa0a9GuF8Dj4dg/6DIRF+9SC7H33pUuGKFucOC8iygXP8sW+9vN1OzSa2dI8ZA==');
define('AUTH_SALT',        'm8Rgg+Jzni2e6FJk0IPILnFiEGfah1cPHtpr3F5AlEeKuLt+376hjtCnCuYU9M2TWAVWFZ8iCII07zJYoNpcrw==');
define('SECURE_AUTH_SALT', 'ccYhx9hnSyXjQskMKYVbIhy0+stCxo6vTf3EaqEgF0p2kPoKc9wJ6BUwCukeH+lkSZLsRemnrPbsXfaZfvJgeg==');
define('LOGGED_IN_SALT',   'p8xjRH95UuyhH6oV1YM0dWWxGgPjwcV4zFLbxvrkKFoGVhAky0yDMhOW3cEzYPgwhHGBncovym8k66qeSW+obg==');
define('NONCE_SALT',       'jY7dVNluceH+bxV66gRwaiuU2EGSksyaxPGPisSsrnulzexSPYlV8lCnAPFxolls67mDidWFKBmuxYXg/twC4g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
