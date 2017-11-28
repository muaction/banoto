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
define('DB_NAME', 'banoto');

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
define('AUTH_KEY',         '![?1EG}5S:x)Y,n$Qh<07n*UScT]}xw6S.WZ#/3[s]ZU< .Q}coF4h~r@y~w@CC.');
define('SECURE_AUTH_KEY',  'pG_qPInH8y6hK};e?GLgp /Us0@rP?)&,q_qXI6yr)LlQkb<RvU3i/r1bbjnCr*&');
define('LOGGED_IN_KEY',    ' U,B1G|+`bhgCWZ@ i9O:?vWC4nZp_C4^ how7.ow^C04~_yfXF#4H}AF>rEYdpb');
define('NONCE_KEY',        'i.540Y@p..!*Jx/hh,&*b3i(7biS1-pSI9QMp1cnYltTuT@&:z_!At|_-eO]^A@Q');
define('AUTH_SALT',        'q7[8B}oy{1;Is2gX=uFs[+4x4!~L(<iHSq)9*bxqS:NnARQ7Pl&aq@cH-T,(qxD2');
define('SECURE_AUTH_SALT', 'X4Z5]?lbowGq2ju^1D9!e@&!Vd|:#_v}nn)cWN51p/).phDEho_JT<%8p ^J5`<2');
define('LOGGED_IN_SALT',   '9rNI|CwU6Iy&Yvg:<xl*W%`%:e_&Wbyp)`UaO&W!b~>IzF76fg;6nyZg(5@UX#;U');
define('NONCE_SALT',       '3Lcqj{>*1_mI1+]x-lRdnMqXbWDJE^@V6/_[(4f)fo6Q?DZ,_=#3)MCfkCSgMkz[');

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
