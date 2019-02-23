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
define('DB_NAME', 'wpproject751');

/** MySQL database username */
define('DB_USER', 'wpproject751');

/** MySQL database password */
define('DB_PASSWORD', 'S6]S7E7p6]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'frjzxvfaognnsg6emsrk8y3e1fysxoj3sratjhjmliqpx7sfx55pcqkkxegnxlrn');
define('SECURE_AUTH_KEY',  '2qnjnfs8aye5wsmweppfiwyxzvym3chkgp3okvn743s9eueic9zq3shyz2yu5f1o');
define('LOGGED_IN_KEY',    'sclfpjlo3igfqvcoos4y4zv8rdntyguwq6ymupuhvoszytm9crbp8ivy9mlw8ryi');
define('NONCE_KEY',        'ldxdutzofbc2rfbumjovm9oatbrm9piigkoalxllnuqs7tz0pijtvq3bfxxpfrw3');
define('AUTH_SALT',        'co1s7965o7fzke7xcswrpn3dsia31jhrs1mal1elbsthynuxoqdheso69ffpwf1k');
define('SECURE_AUTH_SALT', 'dqpd4iugmjzkdot8ramhjav8qqa18iv4gqvuomwwogxy0ounfcfqufrovxdas1a4');
define('LOGGED_IN_SALT',   'rwflvtcct3pwamuchxxkiiiqo3igphltq6jaj687jowyrsckmsslgwt90mtnlqeg');
define('NONCE_SALT',       't0huucnwag51q8tchiuqnxvznq6kjfuesjav2mvb20kls48dokmhsz2cb1cwqa1v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpa0_';

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
