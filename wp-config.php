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
define( 'DB_NAME', 'alwan dan kevin' );

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
define( 'AUTH_KEY',         '-#Q%PEtf|PdhkPg+(IDZGt3FX/k%|tg!zv-:UB].JQfD~1^s3R{v/j}%xgn^-Ys[' );
define( 'SECURE_AUTH_KEY',  '$8.I*4(Ki*sy+U;gWaT%pveF1i8!PDR#(~zj76^?~9ALHVqMi5<ZJb:3sl-[;{u`' );
define( 'LOGGED_IN_KEY',    '|^*TU6@;z#.66Nyj22s#br]%(UKpXu@(hyn?S$s%0?{^T[*/L!zVd|B[I(X-T`yS' );
define( 'NONCE_KEY',        'Pt}~1W$hihyH:l~f&=T!RKTQ0/0=f:x<I<<.&V>Q@]6FB^YM=h8d]EyQ+zi{.1lr' );
define( 'AUTH_SALT',        'JFuQ^:8ZsgmcMw,lX|gCqH!=b):p)%ttQs;:Q|z.OYAH~l=2MdE27xoj~N !Ji?v' );
define( 'SECURE_AUTH_SALT', 'R8rKh@Ec4Xd-{3cPv*k?E]145e)niTUT5QMWi{fx)L9wjckD0OWl%8+eIC_,^+-O' );
define( 'LOGGED_IN_SALT',   's7F$O0ID?rUc<vEBFLD.<J]d89W9B%LRE%Dr5&O$K#SnUM=EYcjbTp=Tq.-D6kKz' );
define( 'NONCE_SALT',       'Ig7V.-w2!0O|?15Yqb {._Nq|;9$eHLoaHpHZ2;oHv]|ewJg=/|ny|A+]r5^#E1&' );

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
