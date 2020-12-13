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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'x~^6*+T-aD_^3*jY;8]d1:(WYL5[vKfq`&CHp5xm6PwV[0Cr%TI]*)}Y3,[]tqy-');
define('SECURE_AUTH_KEY',  '4Dl&rqz&AiI=|3!]@s8>VP-XmtMtiYI;of:0Fudcw-OhnC6@D|G.ZOWqEP7K$5{}');
define('LOGGED_IN_KEY',    'd(-<VE?oD<kUlFBGKDl.w?UuD&8+x6[kg;g+q.HE81RVq%.Dvp:>y//-mK+1ch?P');
define('NONCE_KEY',        ':mC OwDIJRj|BPo^MSm<`1*#52cWn0p)@uc/s?j=)_07K]wa7<0L9ux<wFJW*rvb');
define('AUTH_SALT',        '(N5&zM#2<Y+`<_,%Oaycon@s-D+{9W^&,*e>(_e<Fz{4Fq[s{`!|tc@S/r<N,X_!');
define('SECURE_AUTH_SALT', '@%@<m|2s#;N(Sxcxu=r,FSd(24x(@Ogxp}W?W{UHoPfQEi|7Hq8~J^rR`q-pM*)p');
define('LOGGED_IN_SALT',   '*~Y_i-f#tBC~0a!o]bJ8c@)Y>A),pIp^/wc4ds#7a3N+Z@5+,C6A;Kk~X,S3DzX-');
define('NONCE_SALT',       '5)&1DR#orT+A!_Kz$%j?zWBhsGe0amTk$}SbU0v17$<BMvAaT?J;b#~d b-b1S]V');

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
