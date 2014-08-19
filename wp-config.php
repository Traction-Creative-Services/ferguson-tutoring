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
define('DB_NAME', 's3_suzy');

/** MySQL database username */
define('DB_USER', 's3_eda');

/** MySQL database password */
define('DB_PASSWORD', 'GWQs9Hv1@');

/** MySQL hostname */
define('DB_HOST', 'mysql.sheekssoftwaresolutions.com');

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
define('AUTH_KEY',         'x`2pH+kWk[?H3=ab <9Sj6Z;X+6_>Uze)4~BiVrETWG07PC0Q%d|]Q-0+E5,Dbta');
define('SECURE_AUTH_KEY',  '-bbpgo2M?OW|CL(wy|#uJ?d(Uj>w 4-fe+|*4W%l^z^?z<sCg;/oy<a!sK=_u1{x');
define('LOGGED_IN_KEY',    ';PAujx)h2ZpLNV>w@1mm$89OY3H.w(H$/eFCSt+U,2s-hCB6 9MMv(~,nfWKtRj*');
define('NONCE_KEY',        'J}I9vQ3W+c]vakH3D{dG#&hmS594C<2%1s$;..#j{+>7%1[<^JBF@5+Z%ur)2Avf');
define('AUTH_SALT',        'riM|h5u6C~]eA*V!&Z{cObIAiV,UT>!7Af[5]Z*;jCZ:*2cUlhO6$wgo(qwb`-5_');
define('SECURE_AUTH_SALT', 'H/?B?Y|k FY)5YoB~[RQ54;o%-vv0.+h7qF_f|l.l<]s8G}UY-K6u+mS&y3m.H2}');
define('LOGGED_IN_SALT',   '9>T0::i}%bsB|)!+sIwY v;^kl2a~oipRBFI.*O00ygW`7eHOu|b{Vcq,2phWID2');
define('NONCE_SALT',       'BxId}vE:(N%uengwb|b0s@l}3)8Mxi-$H]eIjlwkZ,biQ1EPe2/$vM$;%;7#^P}@');

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
