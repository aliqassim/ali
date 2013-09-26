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
define('DB_NAME', 'devu6f6ujtluer');

/** MySQL database username */
define('DB_USER', 'dikewcpbwxccba');

/** MySQL database password */
define('DB_PASSWORD', 'HnWCYeMHMJWkfuFgiuN1IrFiwz');

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
 */define('AUTH_KEY',         'OK6j2RRe[?h5JAkbiHfeXr{RXy?1/iaX,)Usk]A7,UJHl0!:@6,vpY@pddnZ9z/a');
define('SECURE_AUTH_KEY',  '+#ajN&U>#`-% U2|W-`&/6Kqr10q&L<jJ[-ua~B9xhOgWkvj*oM{.uWixe<kArNG');
define('LOGGED_IN_KEY',    '_r|A>RKGHM/dXiy|1H^dB~t:+HzLNCL~cm6Do)JxdbS|c9?vk;@1V-3)>b%[S!2S');
define('NONCE_KEY',        '50/Yvbe|s4ZJ5qx:rn8i,-/]PWR?=i8kULsW8e3#$_{&t%S_s|!r),,ES+4}-B+?');
define('AUTH_SALT',        'vlF-dJ&iemun>5vT}<v]1=#ii?F0T86PHh^E-j}} U30#.!` >Hp9dXHftV~6I*w');
define('SECURE_AUTH_SALT', 'dx%|+y;@(n<A9*y$RSC>[-kH)4T]PkY|A-@hz)d: AX!]yVq[|HRy--)-0]Aol-p');
define('LOGGED_IN_SALT',   's9NEE$@:-s3=1eH9!y(IT}.85|3=2~XX>,zG9(N#IG.H(JB8b<}|iMaL5ge;? UT');
define('NONCE_SALT',       'D8q&tMM[(8omv_r D%<2lQwd:6h KMY9 VBbqe];al+KWz2g{-oz|wOfFZ^2-7q2');

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
