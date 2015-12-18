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
define('DB_NAME', 'suscong');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1122');

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
define('AUTH_KEY',         '$4S%X++ C].8h^o$W]>sm#g4f};M0W+;cX:oi3yzU[*y=zK3JmtXlt..-aExa2D;');
define('SECURE_AUTH_KEY',  'YRG$.@,(FZ;^=@JR,:?>dwkAIWY^84,6aF])iJCcfw&u1]fMJ{O|F&?/8M#3J]YS');
define('LOGGED_IN_KEY',    '^tR[`<f.e3pbYgC][t#cqT WC-$BYJ7YHf!o,u+;+FlfS&3Eh!>r0 B-SG]+%p[!');
define('NONCE_KEY',        't++&|%bM(?(zn%QaYwwp:%#&ls3<KGy]QMC;sj/NwkeaZ5Gs_-j0}=b+}Ddm]Gh7');
define('AUTH_SALT',        '-ztL$4F[YuPCd_!:z+?A)jle%|[!Kv@JcdB`Sv v>w1uT6$]f[hvI=K=8bLl{+ZE');
define('SECURE_AUTH_SALT', '_(!J&mMe3`)o3-@n7CYET;8`YEdLlO;7+b@0r^*V$b!MO}SW,PVHs9D6AGT+G.Jy');
define('LOGGED_IN_SALT',   'C6i[~vY#3)<HaIjinX6I4nddRkHkvQxRQB;3X-FPc)zqa!%JAZ?/ObfH/Y[==kO-');
define('NONCE_SALT',       '9.lVI>As0o-p9D>l=Y8&Wt|:kS-|S8o*lnFMu>BdzaEt{F-1![.,ln8-FL3u_Z+q');

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
