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
define( 'DB_NAME', 'wp_accelerate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+*o-l]XGG#Go~(|584p)E,|ykgp$}Xsax>~UE=S#4q:R!*XB|{9^nO?qn?.ovK/3' );
define( 'SECURE_AUTH_KEY',  '+QhhX&2:Au8JhRC1!T&JQQJ4LPDb%;Kj7ME|H4`jI{)>&l&SBBqmZSM$~HkPZ~By' );
define( 'LOGGED_IN_KEY',    'g0ZL^i-sT*(wxxo;i[|P#==+}s[@FIJ9iO>.eZ>$[RtQI50I=L|s<F=]US/e5L|4' );
define( 'NONCE_KEY',        'hL+q[r#U{IZCe;Mi7=U=U2Z~pTV_6 5MGyz6TRU.cM{*|%Z{qBh&kgTL$ABo|z0v' );
define( 'AUTH_SALT',        'B9@.x^3@IHG8>@+N8k4r[:TF<x<:Ji;zj%%]&LK*Bd0FoTv0N{H)%!Q*X>is{r1]' );
define( 'SECURE_AUTH_SALT', '-cngWC+ W#sTq#5Rc$Z;kkJ`+<H(M#;q PzfSI^xsquf=g(#ngx:``hnNM?_k-^*' );
define( 'LOGGED_IN_SALT',   'C_ybzx|f]tmA|bAZV;[S!]0-G#{=Q*?!|c6#mVAvZ#&o]1*$x8B_.t3zZ(Z,b(Kb' );
define( 'NONCE_SALT',       '?0U1_UPWs8pfa|j^*$qP*i?thk.9c[zgGo_;KQH2B7.ER@3FKZf&_NI|9m(Rtf<u' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
