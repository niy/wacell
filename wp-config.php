<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


define( 'WP_CONTENT_DIR', 'C:\xampp\htdocs\wp/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wp/wp-content' );

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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         '|U<}U X#P17_tQ3{uL;$$/^j#v0#=hkPnj`JK9jQIA@BbtOK,V`E6bzm{FiXgQ0V');
define('SECURE_AUTH_KEY',  'S+s%$XZ~/%TP|Kc^QoE1VB7fd;,-m[MvA$ SzSih+L]v,:nm~kK`4qm4BAI1=x<X');
define('LOGGED_IN_KEY',    'qHB0{6Z#I{pTT:C$SMNyi%s4|&S[L7Wo(,av@I=-h%&;TgPfaofQ? G&vdb:2iK.');
define('NONCE_KEY',        '<*abc(-C)GVV8JFr[FUQV?b;*fW`x4q:l<{y8:q/}[LTzO#8!1:E_)b1yg6tq^ v');
define('AUTH_SALT',        'YYc0@S.<5[!Ak:C9}<r?_imXwC Vr+^m[>Xb6L~(>Hei8r<rF,!ZSK6Ee>b>hg8q');
define('SECURE_AUTH_SALT', '<pie{@]}gPj:bG4,{_xk4+6NZI|<Y1Ne96*T|78Vdf5OIN0NtN=j)t1ZgvoA$kb-');
define('LOGGED_IN_SALT',   'l0?f8&G1:zI>p3q-.y6DV#@`[%b l|1D:?emG0&co6<YB2}&|Tt|Vkl|!13lj)Y#');
define('NONCE_SALT',       '|NULfa(026x&]ILIk$#Q2viOfj7vWSjF~_N]Kf%gx1g4a?Ow*P0)~alwwi@,BskN');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'd1nmyg6k_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* fa_IR.mo to wp-content/languages and set WPLANG to 'fa_IR' to enable Persian
* language support.
*/
define('WPLANG', 'fa_IR'); // by http://wp-persian.com Team :)

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
