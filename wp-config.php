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
define('DB_NAME', 'la_reina');

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
define('AUTH_KEY',         '%IJg9(jg6M}{0WEm<urk?E&c}W49{mT*wyXv~M_O/8|}{X,;oj&q=MN]BpQnymYI');
define('SECURE_AUTH_KEY',  'Lvj(e^qAdOioZOrMHW:+*{;>wfdGC9J%siARR_2ZG_K!`|ine$.^h/tn:atg<:r@');
define('LOGGED_IN_KEY',    'agEoQm*m1_qo<fKlEm!=)<8(4VEt  `CM?S^;;T0.k~)2T^8.bM)~1RH?+D/iR*k');
define('NONCE_KEY',        'I_i*<cw[SVPzs5xi45MqVa^;[fK0b,;>Ya#J#&b, o(5]TVKxzq5g|$m_Rexuknp');
define('AUTH_SALT',        ',p&mP2921zKknOYHn(HZN(~YfK>I(7,5d/sUH[;m4G=<kR9qv4RxeVjN%FY*KnW!');
define('SECURE_AUTH_SALT', '(P-%^y-5?Q%,X|,%b%dBy&!p1/nr7F5[s_R)s!kA?;o%5oc-d.pn@&tXCcYqy*+-');
define('LOGGED_IN_SALT',   '~cKHI>/R>hm`}4`uLxqC<Yu]~=H+lgY|E5q{9cd._MX!jfJ`.i[mQ%Gkgwf!4(~g');
define('NONCE_SALT',       'h.d]@l<zxGTtFIb,)MP:$aIY2{eY*Z[+K9b~+3gs~P1NZ*AznRPipc%TP|J#ftHU');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
