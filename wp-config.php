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
define( 'DB_NAME', 'e-learning' );

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
define( 'AUTH_KEY',         '=[{&+9^ReM~QT_`K4cS@J[&&$qb7V0e?P`~K9jv%^&@)T[R W3C:UzGOGP=-p8,&' );
define( 'SECURE_AUTH_KEY',  'B1]F&NU@L9Di bM)y#7chL-<0ru^+co352U`tQX4Lh6Y#t!Y D2(AOWqvvk0<4$y' );
define( 'LOGGED_IN_KEY',    'r);+I0vFvFn=t*wc8VAlDJFaFj?yq-<|l$K!I0xdkIBEHG@UGPrM Su]f`BPWadP' );
define( 'NONCE_KEY',        '~nep:=~=o@@?Iq45Li+_%9tdP(M--]B-Wj]YpD!YqEt82T)GJYse| 5Zk-+BZub%' );
define( 'AUTH_SALT',        '1x3e6_r#t|v~S@5#U<[Sq,Fjn?~}<_#,)WmiiH^m<4;,zjRC$O?4kG9HyADcPMG2' );
define( 'SECURE_AUTH_SALT', '/`743Dqszqv;P)=V3FD<JCZ@{x<sw]I?Nl/1@4mZHPoXC-0+spG:Xk:]o]D3t}.C' );
define( 'LOGGED_IN_SALT',   'aY:vh+[w;x1p1^C8)@^J=Y4@.B<K>{X/BtkFY7k/mC~x?P(((.:R?A0A/+k%h-P+' );
define( 'NONCE_SALT',       ';9(Uza[}uCpQ-T,yRbt>9)[ngNC /@sGRKH$.26N%BSm^$<,WO8h7AiEP!g)Uie9' );

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
