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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ronibd0_sccilgl' );

/** Database username */
define( 'DB_USER', 'ronibd0_sccilgl' );

/** Database password */
define( 'DB_PASSWORD', 'NW9JSp4@0' );

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
define( 'AUTH_KEY',         '[}@IR/hLxNWr6GMaE)p4d/}BI0:q%:?aau5k%uCsC%jx.f;g7Dhtt<R#{-k(WN/p' );
define( 'SECURE_AUTH_KEY',  'VmF*w90{JSa4O.$g3)u[nh&MKaug;lK){V5?Xg.- j^R+ c_#VRd%L[8QyXcURBM' );
define( 'LOGGED_IN_KEY',    '.<B5cWlv&6cMrYH)Q4c#^.o|kA=S/%FsIN-1ZvpGBbO>Tcn580mdM4C,#V`x4K;~' );
define( 'NONCE_KEY',        'ATo5;T(Z[]p,#{_/~5r:4hnM09S>0vH)a*))|uDE6N)@A;a&JOKz(2Dx4kMhs#h%' );
define( 'AUTH_SALT',        'PYK/!YO(@&%K%tmZ;3:t$465A$qWSr0}5TnRH/N66D;8M/w;G_tN6UkgL8l,b%Hb' );
define( 'SECURE_AUTH_SALT', '1hFirL~SZ}oov0Q5rYAhv@H=d6PB%cT()M(&yD`J5IZ2iuc>qujYu}J1qD3gNbvl' );
define( 'LOGGED_IN_SALT',   '}6R/W^;bEYZ{ks&R.-g]yPv;u-E-0B9r!$7yYvR[7uc|!.v?~}tn##9%WogCqV+f' );
define( 'NONCE_SALT',       'A0ypM58u3r@MUgR2XwD,Ij#OKgB?_j_`~;_j$7}Q:!&ly]wg:b=(LD[B*tb&+)yZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1k_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
