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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'www');

/** MySQL database password */
define('DB_PASSWORD', 'plugandplay');

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
define('AUTH_KEY',         '.y2ub]95B!^|&n]+Fx,P|r;ksHph%~9G-`q?>5IH{LFSZAq_5mI;Uu=|0yzH[^Hy');
define('SECURE_AUTH_KEY',  '5HMCh$`h+lR1^jhVXPJjOn&w*R]4JQ|y~,-Pp(+>o1bbNRP/gs^58`Xro`BzrL{W');
define('LOGGED_IN_KEY',    '}_brYPDp]mo4Jn.%X!&AHGeM2cTJRl^<>l)H=] !1LP^iu-!wcn+|J+oWd!|ByX;');
define('NONCE_KEY',        '[qk5O @iJCkp&{=%J?W:TQFk,rt]ze!)F)Ku$xD0G! G7<4+RT5;arcBl7:;-56i');
define('AUTH_SALT',        '6W<9t,a2DK4xKLxt3CFn]zR0a+~x@IGWb_Wld=]4X95hZexLj-t-4]!21&t2u<KZ');
define('SECURE_AUTH_SALT', 'Y]n +K9fqShq2)8JAV_lH-MZ3>jz,NZJE48LOGEHz5@@00qm*u4)vO9v$K9/3 Vi');
define('LOGGED_IN_SALT',   'w-g/PgM5U|=2er_%1di^,aE.TA<)XkB7Gd/In*W^mxxKV8C/LJ%vK%MU&} B;F]2');
define('NONCE_SALT',       'Yt=<[j 3IhDIN1`T8VZ|KIUTE0om~!U3L;JD6{Z9:RW`&})VlSCv}>X,|!_;!n!g');

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
