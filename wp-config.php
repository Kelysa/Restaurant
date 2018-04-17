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
define('DB_NAME', 'u472306867_anuvu');

/** MySQL database username */
define('DB_USER', 'u472306867_uxale');

/** MySQL database password */
define('DB_PASSWORD', 'yReXyVyTeT');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'QKC8PunRO0BlMrbiFHKHysCkbTSqQZ4hb1LA9lBsLqfJBm5b4OaP6OvTqatTPxTV');
define('SECURE_AUTH_KEY',  'ixIuf8Q8Sk4C08wNEKlqZAyrbd5bHLQ6krZw9nj1LZmBFV6qCCruwKiivHk9jvmp');
define('LOGGED_IN_KEY',    '2ov4cimSHOPuJ4aD3nLMVdQHCSHj5PCatUJaQpd3mOZ2sOAjzsNrLP6n4LCZUXYE');
define('NONCE_KEY',        'Fedb9MS7nZ2F3rlLHZX3QyAX3Ux3rokM5nszDdHaeb1U9rYDdEW5ocoMyB3SpLOa');
define('AUTH_SALT',        'RhfYIcI1UIK1b3danEdrycNVdpBfVOwUzaTRPaTjWWnP0qegyZzPbsSgbj8Lb8bX');
define('SECURE_AUTH_SALT', 'a5YM8H9wSz62mO5TJlZLB8te1VX8n9N0SUeuZHe8fG4ZjRYn2eVfhsU3vBK8ngf7');
define('LOGGED_IN_SALT',   'csyboLXSHtQvfSAy64LJ9xYv5hsLgf3Wo7WZrK972l0cWw0aLPODqOq7fVtZono1');
define('NONCE_SALT',       'sJf5tSuhOU9oJtVbTDKelZAuBYa54GYH5F2Q7HMLcaKkcRvVLEmZ5O0K59FXco7j');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qbjh_';

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
