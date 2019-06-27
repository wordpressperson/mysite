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
define('DB_NAME', 'wp_database');

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
define('AUTH_KEY',         'j?9GliQtjUE;|S|_[7#>&EGW7~,V8XuTbl.]mH![.mov-Vc6j9KTO.dQ1)Cl0.$G');
define('SECURE_AUTH_KEY',  'I#Og4WO)fdLv]@K-Yo_l}6&1h6b<A.Jx8|^$4Xh>36`dvR@QrX[7sa5t{&%8~4QD');
define('LOGGED_IN_KEY',    'ml4qOlD,=Jf]<^$i61d{7NZFp!a3BfoChg6c&NVo8[0.&`F6bQ<!82=+<m=Snvc ');
define('NONCE_KEY',        'TZ7z[vI8IXRxYyA_E&cm}usC>W%GYK2R@3Fp.i4GRt4QWFOtGPTgVOMDH5tsV:,}');
define('AUTH_SALT',        '|zibVmG70-<u1@Xx9^<s0dr2XMz=CTRA-P.ypM3tDuEys@II[&?a`j}=,iD^pdd`');
define('SECURE_AUTH_SALT', 't|% dqy@fg%J/idqp2(=RT1}1+WIb.qP<(y=KZ{P7Z,JZH!F`RC<lnk[n1_ZMUs]');
define('LOGGED_IN_SALT',   'BMz9ZLOriEl|k,0w/{WL,zW6|$6_WpmtR!4 n$M${<MCD_gd:+3=p_j5IiJEY%r$');
define('NONCE_SALT',       'I@m%0[Iq~tf;~&wG[EOe[Y1Sf?*qx_&8jJ8zV_%qrIc:90AN1}/,|CG69OEni.{`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1';

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
