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
define( 'AUTH_KEY',          'B6.!{xqX;/O<!IKV[,odVE4SJSlA<eqcQz|7eqUHm+()Z7VY)PD=mJS+7xQ N]Nx' );
define( 'SECURE_AUTH_KEY',   'ucl!N.D4o.W)EBdG051eP]jhL@d$RYcuKurCr^zZ0mAug+*,{T|f}IuWg 7VO1T,' );
define( 'LOGGED_IN_KEY',     'SZ@8HdLWKT:e2USd,=_N&(}nm.n%O(Qvqmq{5gFG_2/aUasgU{R/,`t-V+/:aOYH' );
define( 'NONCE_KEY',         'pX{)ib;!-ioHk(rkLZnWf>8(Wqf@Au.hB_j<C4D[;U.F<re<{X^S].bc]J).vb<a' );
define( 'AUTH_SALT',         'U?+h=w:f}TD;=Z^[!Y-}VcnT_C}CyA3/Fb(I-u.A9AktTM@EKpz@Aje.S``:J&H<' );
define( 'SECURE_AUTH_SALT',  'yAofu.H}*MKm9?x$XW<g_xKp9x?sEs^b0x,H.Dw!Ff!0$23LQ4NV?jg%`+i*?mjr' );
define( 'LOGGED_IN_SALT',    'E#N` xlkuOe(4%lF kmb+xa>OIVVj(Q*mwk/6|IIA;I@ev;lnBdRliBP&Zkq0y[q' );
define( 'NONCE_SALT',        '(OV@XQ[GJxus 1TRpE/.5Wf)hgZ?VV=_6]1:edCA{mRO&,]0}}U> CKo*Xgp>wM8' );
define( 'WP_CACHE_KEY_SALT', '9KN)Ywo$%vct/*3] GpP&9:qu=mxn{U&ko}=j8gEsXZ4iGtyCLuN;XGks`7sWHk%' );


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
