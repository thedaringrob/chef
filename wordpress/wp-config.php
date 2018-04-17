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
define('DB_NAME', 'chef');

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
define('AUTH_KEY',         't4*, 9AI!F,{ N k}RmBHuHKU}09*UTRw,rtn)83(VVr?;|e%Ox},)Ww-q2iAA_N');
define('SECURE_AUTH_KEY',  '*y6/DPs26[`JO<aKTcR>3 J@SVZ$HpV#egX9ycu.PqvC1a;3y04LAy))~J<)MIw}');
define('LOGGED_IN_KEY',    'sr DRsYevg{m]p!x0xfo=L%$KB9Iji0a@PqgFN6C79 YN(v=ZO*<F+bYsd|9hnCY');
define('NONCE_KEY',        '2_{hG%U4o0{7DJWgp3[(QDC`oR.EV1~zQ.J-V-5~fG,zIBopa9y*75t-8bU1yCDu');
define('AUTH_SALT',        'Lj:sH5],E~m1.pa&heXf*2+F4PsTi5V(,R61 PCYaCrRx6];:w5,RQ1a4b=5Zsee');
define('SECURE_AUTH_SALT', 'T=,mh>@SxCbE?!Z%<_C((.ttz6_nEHQM9&]<H:;~Y+Z ?</:,Rd 4{QMUdAJ^*6v');
define('LOGGED_IN_SALT',   '79;xYXk7#$BbJ:[,k*(~S86(3GUxh>^[?_,LQf<A9/r/GQ>q0lr(w!eT_B&5O^&K');
define('NONCE_SALT',       'Nn!a|&&E0:6JQuN6%@_:m/jpC)v~@zeEG)-?&chVCSrHR9hV8h/kefVGy8)K={8d');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
