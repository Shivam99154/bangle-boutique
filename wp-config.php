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
define( 'AUTH_KEY',          'dT;##d~SU`P?.*[dxQDXzW(>kYWYKOrO:^$yV*=+W7(kXo&>ra~%y7m QSaMGwcj' );
define( 'SECURE_AUTH_KEY',   'U3=W#~:nERZ71>Z*+~six8ZZFr;JIglr^d` nFfK)ot}{blDgj5Yaf]yN#a*!s58' );
define( 'LOGGED_IN_KEY',     'P60cl 7&Ur&ifkZ[V}6(h]mbM5xD~`o-n-h/|[t5An,c`9>i_lGQ*L$J.:;{S>,*' );
define( 'NONCE_KEY',         '&b3.?|;L_%N{%.q#aV}t<3XPNg(4`/1@m>(+R:5x+PeN^~m:b{xL.lmS#[%>MHK?' );
define( 'AUTH_SALT',         'S,/oWTL;& Ui=lmEEQ(3Ldr~ct$_8BMK~^:]6H4`.#}J@b&dH`4yaIJHh7x;1xXz' );
define( 'SECURE_AUTH_SALT',  'c^{l~xEO|yZG,,Tj*qhnnjR+HrP_!>2&#RmI4TE-@LCL&5>KkC(xV0x*8{ mWc0[' );
define( 'LOGGED_IN_SALT',    'A{^Z;vVWE:}jT Qb;d:]gN;>$%u]4w1QS-d~QeHmuOET[qs<p|~@IHmo8Yc$n{W!' );
define( 'NONCE_SALT',        'Fp=V{Yst=B_+a3]<)G_-uX^jYO.zl$q=bS1uWr._/5fgt[n|&,=74QRy`5bLUe{r' );
define( 'WP_CACHE_KEY_SALT', '8OuOKKk}Vcpx&1;[,>9)LsR[EKIzn_C_|cjCH7^OfE1JnfNZ2<:8I/BWM!=5vuIW' );


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
