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
define('DB_NAME', 'localhost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sg,(9Ez83]P-{]xC}DOGt1][d*K6<h;cJ]}w!C1fY#%Mk5D1-~o#|1A-E|y=fz`|');
define('SECURE_AUTH_KEY',  'aQ4%9UOgL8R4<?[{5KB[aqt{}]P4`<$ZD/-]0k?S<Y))1@9S +L9?RB!31}]o}*1');
define('LOGGED_IN_KEY',    ':{{9i.kwO ggP2(d.B&%H4*a3>Ec+8TSy)&^l0Jv}dtAx{?.ES~fq59H0G()$9#|');
define('NONCE_KEY',        'x}RAw 5O&W&}SLcQ*QAn+]MP*Q{q@^w-:K,<UphrL+rw4~Sfiz<1r4]f,2Y+=a2X');
define('AUTH_SALT',        'kD7;D0x e:*!l$zSNF(tWx-c}OYR#SbO(?yj+M:)<ry*-&4<VtVGHyMeFS&s.yYH');
define('SECURE_AUTH_SALT', 'SsCFz_fqLT-]<~,lsAh;,-f)c&D~,1*CWf[O<k1xke1W3l/9UNT{VC{i3~!CqL]I');
define('LOGGED_IN_SALT',   '~^+:.KJcqB-7pSU.?V<R-*jx<@.h38fZ:5v94+^#*dqAh{+Pn1bg>!x`X-X]q]s{');
define('NONCE_SALT',       '~i!dV|n$@X-nB++X]z1=k_G_&8d}F-zg<_6e@)z9P^;8n@{@%T_]1)kksm`F3Gc{');

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
