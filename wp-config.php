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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'uvWLN=iFJ D@E^=G_HScxX3f*r~/`s_Ex `(W@NXv%Td*D`Hn7CoYL/=w7zC2}YM' );
define( 'SECURE_AUTH_KEY',  ' $d:YOqu2/9y(Y;`8Z9j&U`;qkB4TkP2O:4>K 6=;HD[cN8Ivp&(~x,`j!aI]NX6' );
define( 'LOGGED_IN_KEY',    'iX&P{h5ts+UZEJI %7y35$(QO*3QX}7I =[AD-|%rH,/T?CpBQ:`Qw=.%?c~[09-' );
define( 'NONCE_KEY',        'INQZ3D.~d.uBr1vf&EF!$f_BXYAMSA6;)N#6 fd&3NTx_>GCw,xRkE2kvu2k.aZ)' );
define( 'AUTH_SALT',        'z_G@_#I=fFoZ)B9bjc>XTofoq?4Lc7;{*4NXUoNLa`hcTCoM;pod_Q-R8 }6,DAp' );
define( 'SECURE_AUTH_SALT', 'YnPGBnZ:z-;$Sdu$OkyV0LwgJ):xCR2?i,J/{,+I=6mnq9o|7f} BCx1M,,p>&(v' );
define( 'LOGGED_IN_SALT',   'Bb}Pz.$bjD*xyh5=[1<L-<_X}+DQLIb@{V81Mx=!v[-9+!Rrm w`shj$.J=>G8+O' );
define( 'NONCE_SALT',       'o&{vW{2E^@A%sZwX6dB@j+;HS`s:/zGZHU}w5LP*hFnEk;VX6xT&1ey,o-X|7hMj' );

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
