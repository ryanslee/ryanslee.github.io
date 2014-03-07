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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'gundamwing');

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
define('AUTH_KEY',         'i=F%Sgd#<MmfHU4PU`cu6XaklvQd#,I}1dM7!AGLBnHZ$O{3rZJ*>.t-Gkx1l(T@');
define('SECURE_AUTH_KEY',  '[45vEttyTM&mlg-)?U0JApLsfU(hHjWe? Dv)N|AQyYC^^5[?qYvKp +J%&@VicK');
define('LOGGED_IN_KEY',    'tyJs2wPOzG(++[_q*2Xg{Hnou:da~!:;J-!Q6jEnexnT|v=e+UN2)G!|f3L ||UE');
define('NONCE_KEY',        'eA=m#9Q-FT:^+qUcjc|AP?CB:Ze);AOhd^F$u`w7gE,esuGK-+m1|Al+oh++|i3o');
define('AUTH_SALT',        '?2YyK +R]zyw!`-i.=uD;kLV2G$zo&C5s*;u*H,yB,0/,0_~ 6QzQu]*(|4{b|Zd');
define('SECURE_AUTH_SALT', '*u+3BuF{%zr59fACP[f<mApL8%m7Q!K)%k||>A]sfwJJl@Blm9?NvM57L}0*||s9');
define('LOGGED_IN_SALT',   'VzZSr2NP(UV;w-.t8?r *ktNYFXtA;ObHZm5HwF<9F|lf^VT,sa<MtRVqMc_W04p');
define('NONCE_SALT',       '?:3I4Pi;0@t&cV[dg%`uA[%|[C)tF<JZ`65Gj)V >#}>;h=cFQGj 2W=f/#F*f O');

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