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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chqo5974_wp559' );

/** MySQL database username */
define( 'DB_USER', 'chqo5974_wp559' );

/** MySQL database password */
define( 'DB_PASSWORD', '6p5SX[8-qt' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'szngjtqaehvnqqar5eys9wt4p2bybtvkv7arg7hsxkjkazvqljxua4jhv7ndqzbq' );
define( 'SECURE_AUTH_KEY',  'p8nchm4qurgm2zuydooddf7tmbog6djtbwoz9ti8vaqt1ipnn9h34dsgixl9ocu2' );
define( 'LOGGED_IN_KEY',    '66p96nmgiilqt3nu5212grtgqmg3wxsaanvmmxk9h2jxclf3tmczrwor8ttmmoyj' );
define( 'NONCE_KEY',        '70k63jtvszv0wpzbvs9wakbge9hx6gcvhfebfu1egul2eax3iapy8oltg4cdfb9v' );
define( 'AUTH_SALT',        '4atuj2gbqbuhbfulbrx0t4nnvshremajjmbdrtuhnmo7iz2hr6qgs9e8fp5b8wuh' );
define( 'SECURE_AUTH_SALT', 'w7b2976bvpqpy1fgas7gfgiu2f7vrzmo3l8uwkl3carasbkov4s6cxbmovmeiekz' );
define( 'LOGGED_IN_SALT',   'grgchnwwkhycroxlsibuivim81fduvwmuill7s3jzzzajphlc5cmcawb3wmbttxx' );
define( 'NONCE_SALT',       'uvrfi24x6bjbswadtkjt7ev8md5ba9pfdu5xho9rz6lwwpuybpgharcbyvpqgzak' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkj_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
