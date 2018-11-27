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
define('DB_NAME', 'itechgarden');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%p9sbdaS(xPtNujh8p$oN!|~48lnfj`IL,(W#=  hj:LwS^(S|?MK9E,|J*fST`V');
define('SECURE_AUTH_KEY',  'cdL,yd@:}FP4^j)7~]UIK>YGiDD&:o4gcbERTo/Q`m``Ppr4P}X<xPK#T9oW_}IQ');
define('LOGGED_IN_KEY',    'R]X12=y$)<?sh0PqZ5$B+mJ=1dO`1B:,xV,@a}`PI<]u5]Q[MMgTN|8].EId(=j=');
define('NONCE_KEY',        'RH$7kleJkO!VykE~RF4_`[k`XZ2ygh0{1NNwGw:AJqydBYct8I%U}(Kz[6cI<g~u');
define('AUTH_SALT',        ']$2#=-PH4/twbp!q?S]YBux: opI-??U 6^UBL,,xj cE!Lu&v>T|N7[afX<zP1H');
define('SECURE_AUTH_SALT', 'xYeQQiTvR5^Oxo!oC7L4(=PIw8MuT}@?S);NB7#=2tg3,JEhX9|zjQ<vN0u_pd Q');
define('LOGGED_IN_SALT',   '[-qk<V}Ij{L9m}+]Rx?Xq+W;=d`;3km2fb^Zd^qN0O=}AbvIP Wb4JcZi{dFY*]W');
define('NONCE_SALT',       '9Wl-E}s 0Lm8<|=:(F!cRp{iUiUU2S#I)ZB)i;$ Py{^^#L196W)1c8a2:Ta.$>p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
