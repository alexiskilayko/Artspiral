<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_e');

/** MySQL database username */
define('DB_USER', 'wordpress_6');

/** MySQL database password */
define('DB_PASSWORD', 'L0A!ga8X1j');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rxME4syiD%LjCr%!!r1pjuBmy#Wie2QOUb8SlpL0^)c8i^donrF7S4CmmJ3Ni7qS');
define('SECURE_AUTH_KEY',  'omlnTCf!(arCKpKdxPNBhDgRfRMJgKuU$^!%PXtkOVQ$ati^LC8H8B($!6NZzUR$');
define('LOGGED_IN_KEY',    '0&(j1kd&2lz9h#W6T&smMusUesbNRXvZNQi)m8$ajWh4gwVk8mI%9s5QC^gaUrdS');
define('NONCE_KEY',        'Up#@xsTz$bfVXE(fHu&(sO&#0ti@RoH)WEALWr8^F#QK(lXZqMhPYUVoqBpuuuqn');
define('AUTH_SALT',        '$9GevWV^wP)92uYd3XnooyloA4Q7B@WZyiSECF5Az9sK3IfFjtJ12cu9)tQbnlPB');
define('SECURE_AUTH_SALT', 'Q*LN9C0dsaOiocNT41j#TcueXVe5Abebx$u50F)kRw2e$o&yq5bMGMHa7^DV4Wfm');
define('LOGGED_IN_SALT',   'M0aXF5TiV*2Hh*T*7UI9YYr!LWR8XIS5vOAjiNh4L*BF5OZu4W1w&!LCOB45k4$t');
define('NONCE_SALT',       'Hk7Rc0$1%o2kp$Hd$JzxHhKlI!*0bqHk78ALAgZ(MAa*753F(dQ4mV(N9uFgNPQq');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
