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
define('DB_NAME', 'wordpressdemo');

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
define('AUTH_KEY',         'dl}XmgSttLRsj%T,OMHp3mTi&e|i#7q&RTolo/ncTvD^`7o|,J@]KPm,;SL #*Zs');
define('SECURE_AUTH_KEY',  '#i:5D>!+= ^{/>jq))_@n ;(La!_|_O$}-IAx;;%Ou7R)b`QVgHe( X%tTb/xN&4');
define('LOGGED_IN_KEY',    '0>.*-#+}}%}Qo2NO<Bzr0+*,}CK1ko;.|>8L$`fWXIA+3Q;ikIkS$Ug!Vd?I:L:m');
define('NONCE_KEY',        'YtDXWRCt-I}Q&`<{[fg 796*aD+,!w:;P`>Em/ }V4CjQX6/@5X9V|^5cSAG{zjN');
define('AUTH_SALT',        '-bd`5~yx#U!g20Z|2Xg;s`(Vkqxd%LHGLy,6dLb8;cISV2{z^.:4..$0j*Fb<;(%');
define('SECURE_AUTH_SALT', ':|9H~l3fhf1b1%L}}|X$1l8]kh.cZNOp9BA(d!7#CYaE |PRX8s_`.gz$V0ks8s)');
define('LOGGED_IN_SALT',   '3vv|xLHa^m2 P/.%CRu4e@Y8,eZNO(=r~u8Iq>I<dm,T QZL6rt.j(hg)7l)`KMb');
define('NONCE_SALT',       'Kp]YFZhKqYHa0KgdViEIgQ 2zo.sD*aSOTYmfQ=x,:J_%+4AYzW)6}YXbos*4Lvr');

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
