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
define('AUTH_KEY',         'Jwp=H;ZV4RwBPQ/k`cAaP*$}_Ry:+dbCUF]P: J*17Sdx[cR{8gv(.+I]+P1Al&O');
define('SECURE_AUTH_KEY',  '!pg:hbY=y(7`8-kFhCU*gg,fs-J[KT*:+=I-7gLFHb46l{D}wCcS3G8O,2kceTzI');
define('LOGGED_IN_KEY',    '-!?).u~d%:dd4OhQt9m@Le~6 v.{P|0e:H6Uj{bES|g0q&99DvNidlwjTK1q+[(:');
define('NONCE_KEY',        'IG=.MNf`f!kTn+Ihh?z>h8HiF}f#IwpyJA8_r#Zz8V^|4UZbqdPr6-]*^]zS.+|l');
define('AUTH_SALT',        'Lg,a @6o##=b`{;v/<+PS|!v{xaE>gUBf{a*P&]t8q+fxiQ.+z{O1(B* k~!H?bz');
define('SECURE_AUTH_SALT', '|m0/i>ZCm`CsLMW!Dv$?ByM9zYa?~EXN7[U~.{.y7Ub.U37D/)m2cB>)P-pMILPC');
define('LOGGED_IN_SALT',   'Mw*-4}E4Vfa3.0 nVHPwnR+&bHpRA)Z60REdz>IS/sWj4Vf.}ZxS$#Gg2$m*BlWA');
define('NONCE_SALT',       '9YD:e +*4[Q7LT84AmHby L}7G<MY{!-a_l$Hh4KIA(iGs#951OXZc%DB21Qqxmm');

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
