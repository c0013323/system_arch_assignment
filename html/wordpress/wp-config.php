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
define( 'DB_NAME', 'wordpressdatabase' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define('AUTH_KEY',         'QRj29zv$lXTCm]h|54a8>!#%bd49kmq |+iatq+9HN&kJkUc(ERd3L,-EbP1ke/Y');
define('SECURE_AUTH_KEY',  '5%syxwr4+!i6vX`V,I4zSHBw}-{M(V-Cm EFELdng!pT:E+.-G}v8o5*}JA>pq&<');
define('LOGGED_IN_KEY',    'o`lZ0zLOEnD]KaZW>QKL|T;Y)e4%{.6sy:/GWe:k]D|{!e_Zwp!;E)w{2zzwLR~o');
define('NONCE_KEY',        'zY;XJ9Ag^j1%]*v-h|rEh3XoXe}t;+!N9=YEARnMrxNSD=^{s88}9!!o|!ZPa:j#');
define('AUTH_SALT',        'qq*gGqTnRn0uSmP[Pa+;8&Pq5jgn&cMSWyR~0VZ#4DtK8yomLr2UaJ..j8j?*00-');
define('SECURE_AUTH_SALT', '*~O]@emFmi||0G}mnY,AXo7{He||z;[rq 1-DqYox[$VFF]VQ2$q<B5%s>@hP9#?');
define('LOGGED_IN_SALT',   'P~5} HePW_3d[u@okU`t.dhj!*r=|K?IePw+WCCsy7f0T8.uBs<td?P&.k~TpAhT');
define('NONCE_SALT',       '}NabMf}0v8DBTsw[0l>X{P3{N.|c}>l;Vr*gLsX>+dJ!l7f/#G12h+yVv]Sl`*b_');

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
