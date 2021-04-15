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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'm4_2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '1}lV94Q*HDfl B#/){Ua]lQ}0iggr(A7Kg^) t$Xw)*vx/VGfs?IN/w)Ds+s8I4y');
define('SECURE_AUTH_KEY',  'p$W`]+RkO<2q<}w4%g#r=N6Hy<XU#A/.27:)QpoRQAA(5T3ZmeD4X%fFlm4U;vF2');
define('LOGGED_IN_KEY',    'w41Lq$ +lsq{[|o=EGgFAW;eQ4gzy&y_i:o||e#78l;Ts5?L5X7@=:Am!?X]{@Lv');
define('NONCE_KEY',        '!TtuczZU`Wt5Cd-YV+|w)HvLmTF}CoZa{YxR>2QWUc21o3KB+hS<c#.%]:-%Ne&B');
define('AUTH_SALT',        'ZJ%U-O qRkXJBw{SjbeiaED6O5:ky=0Sb3x]9t|chce|J%`+i4)~y:UG-+n;9u<R');
define('SECURE_AUTH_SALT', '`%Jyp!dYR#oU_,o;|VjcDAx-~[&huXs%(k|gi-n`;rnzBZo@PCi/gJ%&v(=yW5iw');
define('LOGGED_IN_SALT',   'CGxVf1!+K:jW%1uP/>WX%b3,cUq$Bz.NfM6LR[X<*@4!2/@Mo^{5nmW2>e*{AWt|');
define('NONCE_SALT',       ' 97|er#TSs@J&m*[cusX}r~eu/)6aW0o[|{ {xpq? ||uw~Enslf^;TXON^7->:P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'm4_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
