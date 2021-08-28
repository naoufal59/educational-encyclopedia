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
define( 'DB_NAME', 'schoolmanagement' );

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
define( 'AUTH_KEY',         'MTDmFm@<_ QL3QP6?Ovf(%AmGSsd-LOby>rCs+^uxe6jR^0ZR&3/zk$XpQ|%w$Ci' );
define( 'SECURE_AUTH_KEY',  '<FFG;V(ipi+J<a;r2(6!/ P;4F1Y!-vZ(YPs~gd%.(Dh*m6dZyiT8TP&[[c _=@,' );
define( 'LOGGED_IN_KEY',    '+j`YQaSFAg Uh-fDi,pbMuy5B-f3*_%DbG#RYf7YEoF!Avt_)L>(pGePl-iZ!/WP' );
define( 'NONCE_KEY',        '@wQti)0 OU/Ue>xQZQ!O2w37.*Pf maHUwhk+$@}dPL*kLR1*l4W`6HsbkCXC7kY' );
define( 'AUTH_SALT',        '/g 3J<R5fcpYOAsS;]Z%J}xNWhS:uxNd#/@UcR*DeAnVb&<1}A fXi?fQQA~$f>:' );
define( 'SECURE_AUTH_SALT', 'tK(f|F[Jpi!/Ua}:v5X%`.fCws-noAln$?E#vYdZ9746*:i} h$m=tvSVf+~jk3E' );
define( 'LOGGED_IN_SALT',   'cjc]&Ue-1gPTmsIiqg[xBOEREQf.niK[Q3dO/uk;65-biYmmwI)UbS>sP@6mNj%j' );
define( 'NONCE_SALT',       ',]]:HFnf!&5chCT2Ky3,]o:OePG(JY|}eO7td~q9xA?o s([~QTu_Ua*LMv;m2gy' );

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
