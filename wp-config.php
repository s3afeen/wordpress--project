<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'z=E]c|#VT+kktKQ!B,y}p89P(*JDc0aT?sv}+Y&eNslpdBGo,xSo#^[- /RruSt4' );
define( 'SECURE_AUTH_KEY',  '`1Bn,3?UV>(NdalY%~oBI;/DI^-98;Q3vZfGx. %:vN[t^~n -+mkZjB`FDwq&Z4' );
define( 'LOGGED_IN_KEY',    'CB`^-RzN)ap8oQ=sIu8Ia~)xgYpV?Q|9~b[lZ[{dv9w>|tPbW#b9G&`,R~Ec %i>' );
define( 'NONCE_KEY',        'fUc6~IEQB/w9!{^bURsW5*U]X$<4D;c ~m,xwXK+DM94tJrwdd!3{me7mZreod#^' );
define( 'AUTH_SALT',        'y .#{gq5y(YB-*R0cF>s(:+ho$|l:Ttz[@9pa,U)4@q`-9N745uA)PBB_EttU+wr' );
define( 'SECURE_AUTH_SALT', '!!djWT+_*mv=q6n5nTzb*]of|oou[xzw,*GlbSknOF6Zi<l]yzp1%|0{<&mwQwdJ' );
define( 'LOGGED_IN_SALT',   'T0xL42-~b`eNd6f$%8&^1VR pw(EvDvFP>/*ont=7h~yt49_91 &<!kF_E5!gm(M' );
define( 'NONCE_SALT',       'VV*ljb&W1tN@_syf.:QmQLA-cB6E#bO# 0MzR:725{4t!Qz:{;wGbYLkM/HGp=4h' );
define('WP_MEMORY_LIMIT', '256M');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
