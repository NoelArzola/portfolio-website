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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}s/uy&tvQ6kW`s6+H8e28j>k[CE/at,qw7KXDnmmZ7Mt~c.AxOfv&ZG`;l7&HO :' );
define( 'SECURE_AUTH_KEY',  'xJ>8f_QQN#`|/x)ko<D(eQdZJ:#1 :;Lm1bRB :,|W6A1UTYd -bXxcRA}(@SY>7' );
define( 'LOGGED_IN_KEY',    'X|:.7kXWQtdXgl~GpiTNMviI<p]NFcSfUI}g#B@Y].y&1wDYGnrmu+`x-R2o$EV~' );
define( 'NONCE_KEY',        '}{N&t?`2Pzq%xI0M_la3}.]jD#Q+vSYO@>DKSSBq5A2?^4I|0LE^0lK{H,.b6O G' );
define( 'AUTH_SALT',        '*#4H.5[~=J8{F]meNO 3pVv-RYk:ccgi:F.^MK>_&6M~3JiB,doj>%I=yg)q]7)w' );
define( 'SECURE_AUTH_SALT', '}2l6TfnL(kWH!2q{(bufgQ}Yt&,8QC?Me;))2Z`>eNpeOJ0U+wpK?mPL8;f82^Ry' );
define( 'LOGGED_IN_SALT',   '1h xXM!|r5Sor1%tZud6bQo(=3R940a({,bOn#}L)I$fDC$}N{Z2{4h:LY+t+>z}' );
define( 'NONCE_SALT',       'qgOM@>+YL=)G~+]<ADS:1Y.{fD>S*BDl6TqYe^sXXzMxv-M6}/tXFfQXX&j1.kPD' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
