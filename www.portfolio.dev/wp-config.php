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
define('DB_NAME', 'portfoliDB8v08h');

/** MySQL database username */
define('DB_USER', 'portfoliDB8v08h');

/** MySQL database password */
define('DB_PASSWORD', '0fh9FinFLn');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Oe56P_mAXX{{IyyfLii62P..XqcFFv}}gg@RbyMI$33j^$Q!8oo|ZVo85O->8o!');
define('SECURE_AUTH_KEY',  'F$K@41k!!Rkh:KRk40Jv>|Vok4RDt]]he+PP_9K~~5ll_WW]H;ixLLe62m.2h~*SP');
define('LOGGED_IN_KEY',    '[Jz,7njzMcY>B7N@l~KdZ[C5O~-:dt!RgdwGCR|CsDx]<Aqi*Leb{ALe;]9p_*Pie');
define('NONCE_KEY',        '^Xr*LebuEAP*2{fuBU,!4gzvFYRk4FY,73j$zM0J5oo|ZZ:KK-1GZZsGGd1~Sll99');
define('AUTH_SALT',        'r<bbyMM^73n,wJJg44o||Zk!YY}JJ@z4o9t]]de+OP_9O~~9opCZa[G2mm.XX{IEy');
define('SECURE_AUTH_SALT', 'eLP..Aq_WttHDa;;i+nAXU<>IyyMjuIff23Q..XuFvv}gg4RR|7R>F:hh~WS#DDx|');
define('LOGGED_IN_SALT',   '9__aa;LL*:K~:hh5SS#yff$PQ.AAu.AtqDab;;L*U,BBr>,YYvFUnBBu{}fgzM8V');
define('NONCE_SALT',       'pSH+*2qqEXX{iiLMQ,77n,>cq<bX{MM$^7rc0NN!!8ooCZnBUU,,BrrptGD~:K~~V');

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
define('WP_DEBUG', true);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
