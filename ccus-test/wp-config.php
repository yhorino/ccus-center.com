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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rjc_wp5' );

/** Database username */
define( 'DB_USER', 'rjc_wp5' );

/** Database password */
define( 'DB_PASSWORD', 'J*GekWl]Yar3NP6ZnJ~41)@8' );

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
define('AUTH_KEY',         'DEHIujbrRXciSt1He0bePvShzhimN1yVY0IovXOL9DVW5oYM7kD8Crpin9tOLcIP');
define('SECURE_AUTH_KEY',  'IoLOMf9oj5QvDGbGCtnZPzlUJNNogNpMxpfdwUguLqHxGP0tww2iY1oueuRpjxg5');
define('LOGGED_IN_KEY',    '4QD8CIkuffURuszAfGcpkrtuy7uQDeg2PiAlacdDiNA53C1tMPM05ooaKJzPTR18');
define('NONCE_KEY',        'Ofd8JAUndU95FBE4hZ63vgAsDMrwEIdpZpCMjDzbF9AYNUJxE5glaWH8EqzRjjJR');
define('AUTH_SALT',        'FJ1SWG96NaX4Q1tRCQRf1S3QB57Wy7R77CV49WI02kXqYyDcy6936ku98GpEtwsc');
define('SECURE_AUTH_SALT', 'D1kNCwroRJtdNH7IcUuZcEEb0hljWS5imJBJ2ovlSp2DVn5H4YCXDfOSUVpJjZjc');
define('LOGGED_IN_SALT',   'ETcJoTRdD9DLBsZZZIBTu53GC1YanBn5Eznq8MNnThAhNbG2MLU7uzOVkZyHapMe');
define('NONCE_SALT',       'RUG0K3ihomYbsKPSXxgY5JXKbo87rFwG5M3Ai3lKJ5d9tISkvv9Y87GP8rOsHxnu');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstg0_'; // Changed by WP STAGING

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
define('WP_LANG_DIR', __DIR__ . '/wp-content/languages');
define('WP_HOME', 'https://www.ccus-center.com/ccus-test');
define('WP_SITEURL', 'https://www.ccus-center.com/ccus-test');
define('WP_CACHE', false);
define('DISABLE_WP_CRON', false);
if ( ! defined( 'WP_ENVIRONMENT_TYPE' ) ) {
    define('WP_ENVIRONMENT_TYPE', 'staging');
}
define('WP_DEVELOPMENT_MODE', 'all');
if ( ! defined( 'WPSTAGING_DEV_SITE' ) ) {
    define('WPSTAGING_DEV_SITE', true);
}
define('UPLOADS', 'wp-content/uploads');
define('WP_PLUGIN_DIR', __DIR__ . "/wp-content/plugins");
define('WP_PLUGIN_URL', 'https://www.ccus-center.com/ccus-test/wp-content/plugins');
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
