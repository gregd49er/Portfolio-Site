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
define('DB_NAME', 'portfoliDB0kywe');

/** MySQL database username */
define('DB_USER', 'portfoliDB0kywe');

/** MySQL database password */
define('DB_PASSWORD', 'mPe8KpETy8');

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
define('AUTH_KEY',         'F.*a+I*X;buE+2m3qEb-1h5p|O_9tO+W]H~L*2m9Jg0k8R@Z0JzGZ[gGsKh4kUnE');
define('SECURE_AUTH_KEY',  'hDwKd1e:K~SlzJ$3n8Fc0YvJ@Rk4kCV[yPi6q7Q.bIuIf3n3Q^Y{9W]h5S*S#DxH');
define('LOGGED_IN_KEY',    '5+L*S#DJ@4kBoFc0g@K@RoCoCZ:hQnBuIy}j7r>Y>fzQzQkB^]e2P_P.EuHu{f2m<');
define('NONCE_KEY',        'EG!V[VpGwOh1h5S#S#D-OYvJ$U!8rFY0c0J@R@VsG@j.X{fI^T<IuQ^XuBvIf3Dx');
define('AUTH_SALT',        'I$QfEu<Q^3f3Ir^U,7j$9p_Sl1atDW_Sl;HxDa#9i2Lx]aGV[Yo8N-[Z[Cs5K-:d');
define('SECURE_AUTH_SALT', 'Q,Y>BjzJz}cv4n@Ng0Vo8R@NgT<bxLu{f2i*M$TmAn^U<fu-:d:Gt#O~1hxKp_S_5');
define('LOGGED_IN_SALT',   'Bz}U!4k@Ns|Yo8k@JZ[Zo8RX<6m*Py{bqEq.MbbqAUyMc{FuWp9S~Oh]Dt9S*5a]');
define('NONCE_SALT',       'sJz}Vo4o@Ng|Zo8R!n^Mfbu7M$MfEn$M$bv7j@Qg06L+;e;Hm*P*2m2m.X]XuI');

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
