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
define('DB_NAME', 'sila_hotel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Kwz[BW2BzPyk3 >|~$i!VHWI#jy!j=yw,9(1qH>g+~+ .|?IjlIbia~m@^$kSf~#');
define('SECURE_AUTH_KEY',  'F9)`r6!_4n-65QrM dh86.]X}!XI11J} >tYnmxl:Me)2j>M+;%Y$D-{|=Za>+tM');
define('LOGGED_IN_KEY',    '8n(hk~i~SbW:u]H-hA^.A .&~.R)kN,TRdvj.>#dzHP5Jt?hU4E9tSPm1wvS_[h1');
define('NONCE_KEY',        'H2=bs]31^k7}]Hpv@aUMqA5Mxsnr8o.6vG}F~j[{-Cnve>v.N}jI/zNJ[1<:F:^A');
define('AUTH_SALT',        'wB%UboB[yb<Z6>RcPH7c&vTVLD#r?Od}E4lPA3+v::3BMv(1e^V|J`/U=LNX3||a');
define('SECURE_AUTH_SALT', 'bzbN-M8uEjx&,XASCmaT;i7Dt$?ax:`vcGZoRFf+L.qcIW&7DRp(`WP:Umro6$5f');
define('LOGGED_IN_SALT',   '4]s%=$.2f;!K|SKPUN>T84UrF*S;lC/?E-$ceu~aTAR(8s%0y&z`*>ujz$.Z}3.<');
define('NONCE_SALT',       '|=RRg6i,bgt3Spd|rfF+sXn5kGBK-i2V^#jR23]rG+x#@9co#qXCfwG(2xz;@<u?');

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
