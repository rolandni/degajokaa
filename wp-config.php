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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'degajokaa' );

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
define( 'AUTH_KEY',         '*BZ,V)oe,}:Sj}4p#K3X(7*FWfzj|B^>c@0(M~uyE!A{]8yY?@Q`UclbJ=.K|x5n' );
define( 'SECURE_AUTH_KEY',  '}SkSH5V4iSNSl~,a>Tu!v8j]$^zB@M%q49!G]@$M0a)aEN.;DUcZvY,Bj#SI(8/x' );
define( 'LOGGED_IN_KEY',    '~VroBWv;=whNYgo z$P}bgsYhd:#(%z5)t&H(IN_LKcB/6@aV2}%H8y5MY5[g]lS' );
define( 'NONCE_KEY',        'Uj-NU3*dlLx+7E81eQ8[PIz-2(#sa#9!~Q@27qDOfxa]I[Q,q8}#U*0P&,BBXB :' );
define( 'AUTH_SALT',        '2Ndm-r+WaXu8g1T[{ $A}?xh3S1SxG+>WuRC*g98n,HGQ<YceVYGydN)[#lZ&(~-' );
define( 'SECURE_AUTH_SALT', 'hph|-STNc%W]%`BcTUXrfX``oa)n7;A5yxqDC^C{I.yv)(Wj#eIBZ*[$)vN!;wc>' );
define( 'LOGGED_IN_SALT',   '~WBPukq$LTQ3Z}-m5yQP!kH6Kes=up:tf-b7@nVKckLT{JufWMel%*>;?|>tr1]g' );
define( 'NONCE_SALT',       '@LW+c:{O[.!Js~6~R/=P*E>9sM%.d9t% y&9%WSvQn9vXD^]S&-%?nbncCW9Uftl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
