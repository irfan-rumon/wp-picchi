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
define( 'DB_NAME', 'picchi-wp' );

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
define( 'AUTH_KEY',         '+HP!Nl:MB~+vX9r(rK$K6<|gtOd0>?nCJ&z!NZ[Vqy%@2gTpqlKvfpDVDJ@QMHr)' );
define( 'SECURE_AUTH_KEY',  ']GZ!:#<?53xDnOv y?j`B8<PJUU*1-):cI=Z-si}wr.}jgWT;U~te^-%.kd/5LXG' );
define( 'LOGGED_IN_KEY',    'T|uZ8[;K7os;HN2dW!I|WCPp$>7+2M0P,YKzb>IASs=~:tPEx_.,q~T(d`IA$Q!+' );
define( 'NONCE_KEY',        '5Y= %22gg8<Ng.@$#,5qRK<HH;zajPoO9p QP=%5~C w[E~dp{P2,`%R2oWd*6^k' );
define( 'AUTH_SALT',        'PoBgBwS.FLh_7jj-pEY$r1pWHJQ$VW.lEeo#}U Qx0d$t UKEkEYW4C:8|4-Q$H/' );
define( 'SECURE_AUTH_SALT', '0~--~v3LMKKC&C!a=Ko.(0G*f;l7qORk}`=v_@Qu?/v,VF2ZIpi<Q#{EsQI1.D>S' );
define( 'LOGGED_IN_SALT',   '|zj{wt2>/1;-m_N8<[rLTcw]XeRrc|(w*XOU[nuGcP=>OS7Jb>lqybpyacOFcmx9' );
define( 'NONCE_SALT',       '[R5y?^&+KxiAm8+O(mNs/Ec@#I4}~4p`O5Uu)um]%0!b7f0P$;D,r/*7uWepesb/' );

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
