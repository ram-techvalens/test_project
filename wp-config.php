<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p]P.paTL;$+( `e75wcdNz~ZIiwx6zkV!d-L-J5x!YkZSQU{Ljt)=KeQ+^]axRD+' );
define( 'SECURE_AUTH_KEY',  'QN9G+ykXAlllvs$VfBB,bhq8*n(p,>wn!|``_U)<Yhr.Y+9~Am>8Gq~)|Cg%Q+7+' );
define( 'LOGGED_IN_KEY',    '+n$]t/c8M.::3,f6$n#f Ajw;|K`B:F={lvs^D{/696d:&o$eB #r&fO6J|SHb5h' );
define( 'NONCE_KEY',        'tJ[?$QUfCNN.M|}_DE1+G]MadL%b@O038H`.N~x#dfa^H<O&U8><YUz[D~/t6`CW' );
define( 'AUTH_SALT',        '_fG4Ynyp%y|u7SqSLe*R <N.A#@{~I4Jo!m)ASIL2rN[3kF39YYppJ;K62T@6GEV' );
define( 'SECURE_AUTH_SALT', 'DS`}g%p7}D-&9D_bRWlr$L%/<U?<l7Rqn 5E.py)0sSi/%o08Pfs}`9F2epH6I,#' );
define( 'LOGGED_IN_SALT',   '/Er5nvp}y^JEi:iC{]o)ENC}u?v%C%}$Uw)~,se7F^/.0%v5]tZ0Jm*l[bB{.K7f' );
define( 'NONCE_SALT',       ':yO6IW^@!]/<DNrb]J`4l[YQrZ_XaK]Fn~@/ln5(eN?`bQk+Vg~v$6twP>-1AItb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
