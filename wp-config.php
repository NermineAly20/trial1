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
define( 'DB_NAME', 'CV' );

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
define( 'AUTH_KEY',         'vMv9slkVbFYC,oUmlSfM+J)S q5tIOs`A.C;i9p:asgzhG3ne8ZhVF#/Wl:>$e, ' );
define( 'SECURE_AUTH_KEY',  'HNA9 6j8+O0)bdd2hpRn&BCRdfdA4)U -#gI*nx5@b%A$M!-0$*XVOx7Z#QO&)fX' );
define( 'LOGGED_IN_KEY',    'aOVg-IL``Wm<EFO>5n=jPSvVJPiry/N9Qx@jC5g<Lh<okC0ovG*,)%Mhxop4ss7?' );
define( 'NONCE_KEY',        '>Gm.QLAMkSr234U+?,o@Gi^:il1s*fgXR9q|j^l9Y~l*[ F#Khw6iE3!N5[(3 3~' );
define( 'AUTH_SALT',        'dn{>%6l.ASF8fK9q]93k7Cqnwx=vOav#tb.CjbhUEwuG0w<|6 vcETD@Wg/.JxX)' );
define( 'SECURE_AUTH_SALT', 'd<STM0~5aRtwWz}xS;f-4K+x5o.lnW`j>zi`=sB =(R|<u<vZzKRsg/uhPP@;gFl' );
define( 'LOGGED_IN_SALT',   '$Cz}kh;Z0;Pjc(&0D!%,Kk{K<D{_`~B5^$474^)1(C193uDmTwQa|aMp -@H73My' );
define( 'NONCE_SALT',       'zF<*r3&2!to[is*nH0z4xa`GdY9&)53g^Y+:h J*8OVfDNR%fl+,XhH:st#7~:Zi' );

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
