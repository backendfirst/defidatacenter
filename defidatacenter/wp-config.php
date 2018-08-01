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
define('DB_NAME', 'defidatacenter');

/** MySQL database username */
define('DB_USER', 'defidatacenter');

/** MySQL database password */
define('DB_PASSWORD', '321defi321');

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
define('AUTH_KEY',         'ki?(:oTm/W#n|(Vphf<Z#Kw%HkYn!Z .,LD)w^ZhQS=.%5wh)/ oAh?BN({L3DK~');
define('SECURE_AUTH_KEY',  'Cr&;bULhcbU8V<s.x!Pq*G>c21=J)w42<doN.9vvv6!o<aCa:!Y/=f+&E0IJV*L~');
define('LOGGED_IN_KEY',    'VV!s`hkKbe<7zU,XintcSa_B8U9VKv,V]>i:Wfb5LHoT6Q?!/sBfU`3VFxB=SW9/');
define('NONCE_KEY',        'ycor5^Ps|*+e3QApKLF vznB;OhcGo0.vIW3D3W,Ukl%|uMA,]6b=+WW+joaj~&$');
define('AUTH_SALT',        '&Uaoa#@9OL8D03@,2e/SfakbrniJ5U1n-)XWvG-ySIe>0J)vN3Gr*qcZt38.msX,');
define('SECURE_AUTH_SALT', 'fu=m?J|bn[$4=iKC[DK`l!IXKI@JbrbfAP49zfH#ZSM0hFRC&4udZc(x{xM/8M23');
define('LOGGED_IN_SALT',   'EglN.q0.[e=X;J2]aXCo3bU0-9P]b3JDon(8o `s1P>/A8jT+K,P[*Lx00VHqE-G');
define('NONCE_SALT',       '<A60(G*,(*4dc*( #P=m<s!VmM}S;MuPS}-Ym6F5< nAh/n>T,.gsVGpR!Q4IIM$');

/* Multisitio */
define( 'WP_ALLOW_MULTISITE', true );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'defi_';

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'defidatacenter.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
