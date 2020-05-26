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
define( 'DB_NAME', 'stylesown_db' );

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
define( 'AUTH_KEY',         '>scIFY#dlBXi j9`9bL=-ltL:9gd2MV6h}Py=1B3YeR-V(]SLUo3`^w0Yedxj?&^' );
define( 'SECURE_AUTH_KEY',  'R12B{q<4J-cEz~)>4YH?;!|!6^)bhgql<T;ind.#Y)f5.a0#J.BjJ=gaLPYX(1j1' );
define( 'LOGGED_IN_KEY',    'TnBKN!Q10%[IDW*VJ~B?,tA_$&geJ6VprSXu9N.?n},]`DG9bf3]ync1uS`=cO4 ' );
define( 'NONCE_KEY',        'ACH OLGvAok~xPqeH4R{Oa!vF82yu|>de:3FetQCe^/mmGxRU$PkZBiMfDg#;@EM' );
define( 'AUTH_SALT',        '.|Whe , *+/v?4?n*e1fI6=JZFx`.5~yE{Hv4{oc25oQN>QK6u$8]<,0@(!^dOh.' );
define( 'SECURE_AUTH_SALT', '7jm3lEACYFQTukaJZ=w`Gisi9V{pZ{lwjv4),N8WcS.S)ZuILNvWr5itr}rVXl3>' );
define( 'LOGGED_IN_SALT',   'om)JyP9iOW&,3<BiT0<Ep;$h?O$=PrfE/2z}h3}|!g6y^Wrvh5&FOoBS]V]F?g)O' );
define( 'NONCE_SALT',       '??Xmctua_G$[OzJ^  J@x(i-Q OsZ58|PSlq>D.;Flqehk<B^jXa)Kl/847c5Gsu' );

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
