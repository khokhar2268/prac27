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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prac27' );

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
define( 'AUTH_KEY',         'H|Y:sT|xSzrr$yuZCdE7la8T,a@/Ach (pg/quBmlATA->Ae6p7we*;h$_$pdbL)' );
define( 'SECURE_AUTH_KEY',  'r|~F]ew/}REI}X82X0..78fM23Xf=]&FFCtg/B-c&`+>2teYUb7hADZxCO $Qha~' );
define( 'LOGGED_IN_KEY',    'x18qoN<}xc~>rWkC6qVYg;i85[8b-L`3QALb(dxEDIN?$#dBKloz$E_f}CQFKva4' );
define( 'NONCE_KEY',        '^G1tUVuN)-x?he]9R:W4h:k[ZWa<$8V7Ijw(?_+S+i} vKLe2Zj:1&26)sE7<l5r' );
define( 'AUTH_SALT',        '[d4G%ixJO(t7Gfs1l`P6mGwGR0w6uI#GnkNe&85Y-3!mb}tm O3.UqyH@dA#Jbru' );
define( 'SECURE_AUTH_SALT', ',y*0[?iD5M>MPO:VoF$,t6o(<tu!i2dF106[0UV([rfND@_l.[)v5G*7nv|81^0}' );
define( 'LOGGED_IN_SALT',   '.*um~nJqG|U[/klo.#LnBU) yGmnownkLSe|`|9JlucC=>=HW8r|[;n|N&M2ggS~' );
define( 'NONCE_SALT',       'I$XZU^kzb9T%uJO1.;)]z*[NYxp1I~l*DpvXF[EXzLM_[[k2%fDHx;jYC<tc{N)~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_prac27';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
