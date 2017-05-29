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
define('DB_NAME', 'galeano_melchu');

/** MySQL database username */
define('DB_USER', 'galeano_admin');

/** MySQL database password */
define('DB_PASSWORD', '19Befree84');

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
define('AUTH_KEY',         '}d)UCfOI&OY3Q!,U`a[-d?rxL%UJ;n DGu s[uu?lnS53%3wA}7$G>vW<<a{TOS2');
define('SECURE_AUTH_KEY',  'fQe`Lc?t_uuDl.>Lr9ksy:4,iA^${B[ihGau{txx[.S!4HnYPURAi)$dh0kp|wfD');
define('LOGGED_IN_KEY',    'a2EfPWxN`pj&eu~a5kpo+lbuImE F |bjo)E;CgX03P_ND>zN(bYms(Ms(wn9$EY');
define('NONCE_KEY',        '&}2{t/b }g$4UXaj]0n@DbUKrg}U$(0qwIZQ `lkUz8scC><Uxh;c]^cG)L,5lk ');
define('AUTH_SALT',        '>!zmi|6pHr&0Z4{P~y/m,a}.F>1.uR_@*?FzRY~&!FH2GLxX0O@JNF_7|:i.sv]Z');
define('SECURE_AUTH_SALT', 'M(,pC3IqXn&=wfeA0<EyofLlIOij)4~mvp=,*>&#J]q@T@BGz[=.:/l@Z{S&r$Py');
define('LOGGED_IN_SALT',   ';=*/fZtu$ PP;sL-_o)a8/LjSS%r-K .Z{vaMkfu=PW)PmxBzlst)=NN7F=Hu4cP');
define('NONCE_SALT',       'guz)HCoR.30^N7Z 0`Vlz=Sk68V+vl@DFV1HQ<O|Dj8Ro;8SWv+>^`I(2&Hb*:SQ');

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
