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
define('DB_NAME', 'id2293575_weblogicdb');

/** MySQL database username */
define('DB_USER', 'id2293575_ashu');

/** MySQL database password */
define('DB_PASSWORD', 'ashu02');

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
define('AUTH_KEY',         '+Tp();8!1I[H$ZYG$Xr/ Mfrmek<ti*=$hO53bBfF8$V+Gkga@_<hhj;{0ynci{|');
define('SECURE_AUTH_KEY',  'ln+d`?D2@>x.1|i~uev&IDQAE@3i9IFOC yS/j!,1#jV1_P)RRXpk#5)=J}`]$c6');
define('LOGGED_IN_KEY',    'Y}/boG*QAE{&Uc#2>M~*ZU%I?+v:XJ?l+q:OQa%>RDveF88XDm){3[Q,SYbiWRkG');
define('NONCE_KEY',        '}$*Y,Lv]~VpG_@oVu)Sv4iU.~1Et]c__WxN2}t)X*! d;mn[rjZ!!2:g]yyk8qCi');
define('AUTH_SALT',        '}iw0(14NSm~p=t|*FN-:=}=JJ[U)!u0)D^38Dq/%,Z$.!u3%l9Z$TJwryTP=kbuS');
define('SECURE_AUTH_SALT', 'GG+(D|cLzaOgTUPCRmlDq+{,?fE=GJA<O!!b|=bi9[-nC!ZP>Fe8_=&%n-%X]+d~');
define('LOGGED_IN_SALT',   'U#J-R]oT1GQe95l`#02UNH3P,uj&9(Yh bV:f5i.%1h9[=Zen5z<I_}aEX|;U>U2');
define('NONCE_SALT',       '}K%7CWq%S$&[J@E_/&2f=|G: :09{<bpV~#POd*=zswG=n^&cWuqVY9<k>N5l4G]');

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
define ('WP_TEMP_DIR', dirname(__FILE__) .'/wp-content/temp/');	

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');