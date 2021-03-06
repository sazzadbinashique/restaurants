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
define( 'DB_NAME', 'wp_pizza' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rl.p}?l$K,pWY.A&Adi^x.c}{9cc[%&MSAHK]!IdZ`CLM%^%.f(6:EXx{FU@eb_3' );
define( 'SECURE_AUTH_KEY',  'IC-c27|*kJ[s.L`}ab8e>X*hJe$>d).bI&GrsX)kp_ /jWP2n]xQZBA3$i~]DIoA' );
define( 'LOGGED_IN_KEY',    '4Ap<cpBpq@*jo/1gIH8A?}2dVl=,Nke-6dA`h$KZAb+Q03Tvfn6cLc/E-g$H(!>R' );
define( 'NONCE_KEY',        'H}P6r@}won2/.A;]oKKZ|v[e K/;C`w%kE49]5lGYvmsLzCjit8Ov2fGv>m|xIsl' );
define( 'AUTH_SALT',        '!kf3p[5I@d_iEqCK8eD5;t!Uy42oL5Dw?J{xzoA1P>FZt$$@h,gqpFzKz*{rv|.Z' );
define( 'SECURE_AUTH_SALT', 'v%iAA^p(]#Wf_O2I*3sej^o3w8_1P73:*)ZM1wb(;,^Z4=HCXjU?yl7sqeZKnl+l' );
define( 'LOGGED_IN_SALT',   '+RZt/-E`I_3X1Ve,K&y_UzBTac.8E*O|;9)NC*D~wQK*,[g)mr#u3yd{&$Q2Vc#3' );
define( 'NONCE_SALT',       'INt$WI5UKWTsXtHW$vgK@Hrj~uuce-YcOyR,sGaHx% fIt Ebc~8mXa}9tS.o6$@' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
 define('FS_METHOD', 'direct');

