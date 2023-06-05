<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'almileyt_AlMileyTree' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Tt`&0-bTP;ve>,J.a#RmKA~Sv[R0D}+V#8I];3mUvf`cM%qppd.Xuv%>-Mp-?]{`');
define('SECURE_AUTH_KEY',  'M%&f!`z;,tC+~)fufk5tJg,s%U;#GsH@+vQ4~2mE_Bf]MzO9~X-J||P3RM]0c_j{');
define('LOGGED_IN_KEY',    '-B7$@-d>my~Fqw6_)tp<l8=:YKMSr] yC^nzf|)1JG(]*,BV-*!|=,G=BH-3?y~q');
define('NONCE_KEY',        '`p f)N`QWeXAeIaeNe8[zq;*z*okcda2yo^ODqI!+T0N|F9f+)mq_k{RxiPP>etp');
define('AUTH_SALT',        '-a-Zo^J{xEX]g $DCq(TAIFIC`5/vG11x21|Dxb+d@;g</)T_W$^lb7WQ!FZdB6u');
define('SECURE_AUTH_SALT', '49H<IZO-rs[I6{KX^|Q>1<KTa@e)[J? OM~4Epj9P!O@<tk?A`zIsLhG-y64bCR%');
define('LOGGED_IN_SALT',   '8Qr_kO10AI5P!P,)<`f(bMKz9i|(ZTWYPz Br[XL;je2=(V@[zgF9(q2C7Ou<?1e');
define('NONCE_SALT',       '%S h??T)!?Qfh!b4cle{UhMKgZ0-j#~-R,Eo`REi]FKg:c-];nN[L~[[u1tm,~=V');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
