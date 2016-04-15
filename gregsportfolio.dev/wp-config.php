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
define('DB_NAME', 'gregsporDBmxggb');

/** MySQL database username */
define('DB_USER', 'gregsporDBmxggb');

/** MySQL database password */
define('DB_PASSWORD', 'EvSAJu1d1D');

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
define('AUTH_KEY',         'yy2y;P2EeDe+m.;.;P;PaOex+#D#HSGStSh_s_:O:OZOZ-Zo[5|4V4KkJkwkv|G|F');
define('SECURE_AUTH_KEY',  ',M7MYMXyXn<y<3T2IjIiy.u;E.EPDPeTe*]*;L;9a9Ol+p+5-5K]KalZl#p#5-5G5');
define('LOGGED_IN_KEY',    'd-1z4G4JVwVv|v|0,0RcFgrgr}r^7NBMcQc$br{${7YAXnMjj*6<EfITuTu*;.AP;');
define('NONCE_KEY',        'Daxm+#x#H#HSHWh_h_;_:O:OdOdp[o~5~8KZKZ-Z-[z|4[4VgJkvkv0z,FRFUgUg^');
define('AUTH_SALT',        '3QFQr$r$7$7M{MbMbm<m<3+6I6IXyXm.x<2#2TiHitix_x;L5HWKWl_x#1#1S5GWw');
define('SECURE_AUTH_SALT', 'ddws~-|C:KhRo|w:@>z0J7UFQzYv}>3BYIf$n,B{U3QmXu{+2.AXHe*m.t]H2Tqa');
define('LOGGED_IN_SALT',   '0YjYj,jyF3FUIUuUu^u^AQEbEfqfq{6*6LALbPa+<+#H#HT5SiWi_;_;O:OeDdt');
define('NONCE_SALT',       'S-#-#G|GVhVh_hw:!:C:Cdocs[o@8@8JYNkzYz,z,F>3UgUjvjvy,FUEUfUj^ju');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
