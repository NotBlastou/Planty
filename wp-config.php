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


define('AUTH_KEY',         'EoKHNemjTxyGvfWOv0WWpQagPS+VKI4aemQhk7oWBN2muZw9DbB3lvNqNpGuTakD+UDahhX4EdK5VEU6xSjMDg==');
define('SECURE_AUTH_KEY',  'drrB3p4PfwEo4XnCIMoXeXdqOz3M6gRB9cL9tB4Ch7b4pabEqlBg+cYB3y3RZ2qnUDunp90uHPUqYmyEtFazeQ==');
define('LOGGED_IN_KEY',    '9qIWsyttSxShnTr00LtnoyOGLis0I5/pKY7PPfe1IXTFFA4Uiq4UR98CLwyUWAoZVackH1hrd71ypMCdSB9heQ==');
define('NONCE_KEY',        'RAUQYVVLp3eTQK7VS/U0f93ZNxtbE3C5JzOe7goQDSSRSB+88sPJo3PnmKHy0Xr32roxa1OX1xx415WBVkfyAg==');
define('AUTH_SALT',        'hHf7o84QbNTcJUNzjLWL02V/7qMKbQsQewjcXeAtN6eEuLi8Svw/0BciYTTNovyfte5c2kIAtu962tjelGOzfg==');
define('SECURE_AUTH_SALT', '3xfsyZ8znLzaSTBuh7q9bIpRUAiYGNDkHcbit8D5Yc2gYjT0Fxe6C+oGShVRjChueJhMu3uLesRgKFU7Q3B0rA==');
define('LOGGED_IN_SALT',   'rJ0aQqSXjyl4XjLbHmy/DL4D8dGo+5exr4YS2pn1hhLiaTRhRgwmUkmAf3/m9K7oKoEr+C5hADZqkt2pezuPkw==');
define('NONCE_SALT',       'SAXmuFykxFURKAEqoTSghEHvHVnjxJikZLn8F7uOyuCW2HEstazd+ouDc90G3xdzhT3y+q79dp161iRGlomuEg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
