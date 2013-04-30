<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'crystalhearing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'B^1BNFC6:_j>#o6h$ouBRRbYNk~\`Ku=O!U$hGf8oCmhK0z-QYR|fLeI_T|4_y8LCgDienA|1');
define('SECURE_AUTH_KEY',  'P$lG16T6<p9RB(ny@420Covp-9--0$jo69m63JJN<BhoL9zn4L5uP>TY:6TQqCY)3;)Iz');
define('LOGGED_IN_KEY',    'YxyyOx-GuLKH;KsV8-PvcVJ|?w#w-e\`Umrxv!Gnc/4*BK|31cjm3P\`<wI7RA^');
define('NONCE_KEY',        'GD5RBY2*YD8~BF:P8vuilc\`/84O0|6i~1l~4Dx5<jUcA^-OmZ^G3r<L$UGL2T1wVZX^>;@gAJ|Tp2X');
define('AUTH_SALT',        '*_83TDI@kLL9!$hQ/NoCS:Zs8vngT?B?UI~yV)UKUd;cMs?vDGdC?gTDz)l-HSz13treS$1_0lv^g');
define('SECURE_AUTH_SALT', '!$_)-hZ\`#JEx8wr?R-r7XahW2/AQZNpU2$2ZiAEAloyV9?4qC_MpGjBoELLfw8D');
define('LOGGED_IN_SALT',   '7/zIdNY40Kf*\`OxBUlIv4xHuU~N1PMm\`pbGs:/4|zYCKlE(Q6Mk@AqM896m$mdC-J1-xbc;JaB7\`');
define('NONCE_SALT',       '*oE*4:e\`rk=mH(@qhHV_|nktSZr2ft>$3IIX6VRUPIFP/-$0C28e~gB~sgTB4c^gCwr6LIuJq\`He*a-C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
