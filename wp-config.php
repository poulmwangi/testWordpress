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
define( 'DB_NAME', 'testWordpress_db' );

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
define( 'AUTH_KEY',         '327lI9]CTE|6q.6s5<vco$B<;/b,:;E/HH{H{o(sm1^+u:iJ<UVmuKd.V{^~{kY>' );
define( 'SECURE_AUTH_KEY',  'T>v4G4QfUat%]2 Zv-SkBl**!zbxBv>m2jgE_)`Wd@(7_89tLx{U~;~m~_C8vN}a' );
define( 'LOGGED_IN_KEY',    '/HYZ],M2B=MiW:7&HE{AD|1xkZC5L;U4=!vC{jh_/&jzRz#4u882,_7tl3DLc:X2' );
define( 'NONCE_KEY',        '?}0ikVHI~e{U(d6/%g`}EK|KD8kd{QN38;BVJ2Q(0!cE91W?BostUz@WaxTr=A>?' );
define( 'AUTH_SALT',        'BCoENN9G]~$-5D,:!lFAj;Lx]IuZ$Iqss)uS4xiJm%~tA3^3|Km_tA7u=(wuOT+7' );
define( 'SECURE_AUTH_SALT', '!r^NkF*NlAN^dSPTR6#x=6ay$@!S8Q9+Z3#-dBIq^1$1b.L%KRo,idlqGz+FKY7I' );
define( 'LOGGED_IN_SALT',   '{;@7#o4mBQkVZT;C-cmC9>4q&`r2)5=Fa8/8VR2*|G~1fuSGeV}[=5NZsi[dZ5@H' );
define( 'NONCE_SALT',       '9x)&nmkWx,Viez<iR-H>S8!Ij}5TAK3T$F%cl#++5k)BwYzuO}g]Tzty]R$]/})F' );

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
