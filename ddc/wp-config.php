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
define('DB_NAME', 'ddc');

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
define('AUTH_KEY',         '+iSr@!G@wObNM%ZnMqf[2P$&&b,v6&hsqdV+ftgPGJ6dQ;<F+@Q5{QPGN@)zC<rK');
define('SECURE_AUTH_KEY',  '}xkX#g 8f3.|Pea/J3x$A7N{xW)G~H<n#-Uw:*<pU(=)3Wj_hxdTL,4o|XLTo%)0');
define('LOGGED_IN_KEY',    'SZ[8Q=7c-m_l<L%rP@UKj7@<`/GW0t.vnt<N%*6 O=$@N2%tO6O2R@?I{a-!L!~i');
define('NONCE_KEY',        '&3**{IsMJ/J4&|| rFPe#BVQr*LxEK!#^B{J5o^K7FT ys2/?6g[`FN!t2^/P2eC');
define('AUTH_SALT',        'JXOgDJp*6Qni6,Tb59;L;HWkRSidH8&~dh0I,z!*)*N4Hu0G7Z%Xk1Sma #67:}[');
define('SECURE_AUTH_SALT', 'lhs*&mC_IvG&y]rLH&/i?Ej.xhlv=nOhJ:-6]0UgWeK/I1/e8YjUrib0)7FX=29[');
define('LOGGED_IN_SALT',   '.(S{TBeMWMF-ug74z[}83}D?M5PTnX}W^O=>_s#>0tIAR$q7.>*=_B5s;W)2o1.c');
define('NONCE_SALT',       '2KsGh@?F$94E  DCs4m9$!&J|(xre{0s|c03ebAAP6PwJew(?3oMFa2IRgGuvB=R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ddc_';

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
