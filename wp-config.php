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
define( 'DB_NAME', 'shirenedb' );

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
define( 'AUTH_KEY',         '7tM})(N3-uXXV?UE}CNbDjRsAmYt:kn@2+!J:b4j#I3>79QgdFo&Xi{lD6mcI^a_' );
define( 'SECURE_AUTH_KEY',  '=JXawqu,7 F2<v+aT9xcFh!Su^/(>l_Yq&tt8uc+-XY,k*:I:J>L]SZaVK`y&X5K' );
define( 'LOGGED_IN_KEY',    '(wAgOZ`2x`GQ8F>V&V<vSxfnr7iU&(5=Ba<&z#@K%a@3CYko_?n4`%V8X,*5VJ}C' );
define( 'NONCE_KEY',        '%#N|j nyHFi>2JNR4VZi.h:VDs<zg!%- 0=0m;?)_&g(h8s)G>P|XbI)*pccimkI' );
define( 'AUTH_SALT',        'Ng%h4-LAbKd(muy6?`]=;YlvV>i!U9$t%hGH1mA%KEH|fa&wg`iB|{!ECx`vJD7E' );
define( 'SECURE_AUTH_SALT', '5/Zx3}E?MRF{sOzDVVGL/s@k0ZdX]QiA$;!|x#>C$wM.2g^HuEm+{2<LNZoj${c0' );
define( 'LOGGED_IN_SALT',   'hMKX?PWIzK)[e1/F$}WnY)&`k)Eh*N?b<TT8=L--<Gc;+e=$RNJ_x_S_>)nKp2NR' );
define( 'NONCE_SALT',       '?r2P;^gp(D1S>4?|pcqD{BQEUAylA;V/`a6>Mt7n;!a1HK*JgvzMBBj5Gg=TBY{J' );

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
