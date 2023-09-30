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
define( 'DB_NAME', 'websitedb' );

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
define( 'AUTH_KEY',         'L-__(ORd$mv=Z1f|8K-Th{zNNd7~x.wMe.? ZV?N(5P}./sB1:~JmkE?A2l*Z`a ' );
define( 'SECURE_AUTH_KEY',  'wyys^1cs3O?r(/D,yZllQ3lbuQ8guRS?jy9`<F4Smm0;B;Oq,e7_d[tuRQZlM8Ny' );
define( 'LOGGED_IN_KEY',    '}aW+Vfj}C-8nn&`%?^ax&^k!,.t4<&fBzI=AUXJP_Z4&TB<~X>oM/#Q_@U_Rn|VN' );
define( 'NONCE_KEY',        'm0:rCgtBEx4v[M76gH6YCK26l?2g7<GDf7 yaLOTMHUSWk>X~^#Obs}0^%}#v0N4' );
define( 'AUTH_SALT',        '>&x%IT$q|Px&wJlv3(YaV>A/@BoZ3%s{am+pC*[cr%A`mMCw1j^S>hf-Qaec5:c!' );
define( 'SECURE_AUTH_SALT', 'vmY*QsXuY!Rww:WW)4aE/>b1d&j9hnr<v!vkL8o&QTjXq<O$LoP<vTI7,./0D6_(' );
define( 'LOGGED_IN_SALT',   '0HQ2?%GF$IXA1ex*fe#R{I]1bFN(F(K-Y#L/&+jTCDxkxXpM^+jdyKB~DVy2K36>' );
define( 'NONCE_SALT',       '@bnyI#XU9@%Y7!~*pQ@}6x_F|]X4S@WcnKFQ(J.T$/(e`0cgDYb*sg)7bJRnKuyS' );

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
