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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '~z+NwIVD%:&GnDPiFfDD0c5x@uhk(~d3v3hNp`,oN,j-(vF&^Ta=b hkDx]6tMte' );
define( 'SECURE_AUTH_KEY',   '}UhKG.UF8I?~TJ%E*Yv-1gG;]lA2*;,PyNw,ArBFMCWJd>O9C-TeeHNJw8a D48`' );
define( 'LOGGED_IN_KEY',     'nUIfoNtuh3t+`.w?tOpS++yD1#Uc+@.8/|*D:?Yz^ZAiR}8}_=Sz`!/mR24^LEh ' );
define( 'NONCE_KEY',         'oZIYl;diwVkO+;pA%UD3 L8C,XPd6Ki;>(=rERH-WEABuk@#%AI45^AMa*}XF8~j' );
define( 'AUTH_SALT',         '?Gq7`){7B.jC,nLB4sF6>v7=%X5h/TUGQv^qT*2a:S#Azc5[+*]zq2t9%Kn27S4,' );
define( 'SECURE_AUTH_SALT',  'oV`4$JbX`lnfA:+#/3c~;0SxS@!pe(E_pI8aN2Vv]vMWWKe$X:elSXZ6mJMFL#xV' );
define( 'LOGGED_IN_SALT',    '#E=<Csl#W=A,E4?r Mkf!zIAw.{(TfY%KLZ$VV%Suj-rcj<>K2E,?-)~*b]RtU37' );
define( 'NONCE_SALT',        '6GIIeN6aR{UHF*S)#C=0P;^PM(8{aop-Gm*23XoK=iUu?X,Q?atr<sYy9<K;h8U9' );
define( 'WP_CACHE_KEY_SALT', 'd/#>o{Bu.W;U)mjM#cgyYTw|?/1;LYJP-LYgxuDu>*+mPe5+*UZ<o3.gn/&_5yqR' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
