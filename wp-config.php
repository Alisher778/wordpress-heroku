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
define('DB_NAME', 'postgresql-octagonal-90038');

/** MySQL database username */
define('DB_USER', 'alisher');

/** MySQL database password */
define('DB_PASSWORD', 'alisher66');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_HOME', 'shop-shop.herokuapp.com');
define('WP_SITEURL', 'shop-shop.herokuapp.com');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pF8|ytL7Y:r`hb+{+1q*b|NXU-]:O~=cW1Xv;!rKU_j>DEyX8>=Mk:u,QL,su(iP');
define('SECURE_AUTH_KEY',  'N{RMG?b*~QXM3*H54UpLg#pzkdWC&u$.u.- qws+%X##m6zX./84XA1K*!+g4duD');
define('LOGGED_IN_KEY',    '@gcZ#a4v>$L@?kCUNIwv&7 dKD+L>Y5H{}/ke~:Ar+}S=T~_6/LM:-X0D%ZP:Y12');
define('NONCE_KEY',        '@FL92hzbqukIZLI$gj5A:Cvkw#nCdT`nu~nd?xpa%{%kgp1!TVYry#dnI]eEYMje');
define('AUTH_SALT',        'Oj=pGwgpR0|8/^DA(p4*h.d]u,._eY~Pp;NNJD4E1*6G*sB`<<RrG+Y=s$nq`^l1');
define('SECURE_AUTH_SALT', 'y*FDB|yN*/Eb9(`1<^Fg42-`>#W1LSR3x`LF3f#:ZPI5HIK_--nZ~.wzF0yQEu=i');
define('LOGGED_IN_SALT',   '!h**`CNc@F)/<Ahm@,w/reKDC^{jM*w2NHv{!@C:Qk=L/ zi/lM aku)vt3S]:P{');
define('NONCE_SALT',       '3v4AWQm@op|eB[(|Chh&A/, $o]0E*OlX2nh<zC,{z{~rOq8Quw^t:~m:f}I~ZZ8');

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
