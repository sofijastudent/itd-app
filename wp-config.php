<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itd_baza' );

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
define( 'AUTH_KEY',         'eI!<n_n.%{s$NT3L!w$}J2HANhC)A~k7aI)Uui[5SDLnoEm+Yc4F}!y!>(>30aeH' );
define( 'SECURE_AUTH_KEY',  'G%dk%TC`g@fJDfNncTqybv<PA,/MRsWV|qVY{eXsrgcM!Sw;HN!~vl8]!]cOS?}J' );
define( 'LOGGED_IN_KEY',    '1a8K@QT#PirBh}a1XkszKLC./{^sk9)`x,LRxr:|vS?16B1dfGr#2d>sxlkrI#HK' );
define( 'NONCE_KEY',        'K3>T={Kl4Xbk1` nIF-/WGUGW:3NyNZ0O2UFCQui ?+R]VNV 42^IKnS.jGM-I`$' );
define( 'AUTH_SALT',        '!PlT*Nn#iC*iM^CjtxD*L$x^H]nZn}sF@==he%TmZ3^jW5HZ+Rkk}o3#]`rf>iXk' );
define( 'SECURE_AUTH_SALT', '(>z/X%2nJpvu;Fh=HXb$,|o`hQ1m@kd:Ng@$lmh?nM,-M{d6pl>F?5W:Q4D!b:fQ' );
define( 'LOGGED_IN_SALT',   '[$w=tH/3^[pm]TGw4PUm;Q>/*X2?F/{xm*TOP*mA``7L,AydeF`SJ~3-*vEfNB`o' );
define( 'NONCE_SALT',       'nU9itOhD=ap8r^xK7z}(;cXGLB`ot/tf@K=4!?02@pd)76PohKQ[TZT7Kiz]ueSH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
