<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u470987726_FcEM5' );

/** Database username */
define( 'DB_USER', 'u470987726_Pu4Dr' );

/** Database password */
define( 'DB_PASSWORD', 'be7HuTAUtK' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y3Ww2Q@S3b2.}D?[wCd3FS[Clk<0=@7F{ub`_}x>W^JP56l[:AXZpMA!-7dw[E8 ' );
define( 'SECURE_AUTH_KEY',   '*Q`c4q@^*FOM|g5~MqScS vaZzC1C)C),bW=#q6f3OYrQ%v]lau{,ENai0}Qe(g@' );
define( 'LOGGED_IN_KEY',     'LMCEhktw .^l|N h vTzRKwX|X?paftg^^aN.DmX}V]Vn8C^MS&5clYdkSLV`y;&' );
define( 'NONCE_KEY',         '{|XxkW[Cc u>n-wxUSalIL1ll=lf,b*|,u+,&_oJPdT,[f)Co@5[#I)?)Z9:x/Rh' );
define( 'AUTH_SALT',         'CAT8dNgo3w2?T*Ym8<QWI(eK7KZv*AYVs70F;Rb~:zQq&$]1=M!kRv[T^*:H|5{z' );
define( 'SECURE_AUTH_SALT',  'U[l(_n.%3*asN}t<i,y:U}Mv=oXkh5C?J9,]POO4QL Kg0BN#C#}XHrOujpV=c.D' );
define( 'LOGGED_IN_SALT',    '9v4]B5ayutA0DsVfXV^KAg69v r{y0w.BW0tI4:eGc,s1(BT~21V,tRFdV*V,LKo' );
define( 'NONCE_SALT',        '~B[wdg JHDKDK<D2}J;9ya/B6^n;F,q@}A>,8gNQKoQfYfggGbP;w o/1x0;RC28' );
define( 'WP_CACHE_KEY_SALT', '!B~akaSU0$2@bO1gVv]76Q6w;aXG4ik(nU[u4kgIta-)|Jn.<G:g1N9i?i*7L9km' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
