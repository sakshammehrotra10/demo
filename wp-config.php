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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u568194433_hcIW9' );

/** Database username */
define( 'DB_USER', 'u568194433_olNCk' );

/** Database password */
define( 'DB_PASSWORD', 'dsnl2eLXBX' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Mwbw8FfeS?fJs5&M&!sCxzu,8?nVbi(,0b]GOwn$bH1/>SqEz%0<?[VN[%h#]cfI' );
define( 'SECURE_AUTH_KEY',   'V2BbVFS=O@rpCBf0Jm2^03uSBJ_Sa(G0N43Brxt5`VpQ#Z+$z,noVrAJ2d7@Oz,S' );
define( 'LOGGED_IN_KEY',     '&bKLBSc__I]V3)4bXHE)Tm$MMejPbvq*{QU0 N1,ZhB5iVZURGQDrfM:p:b^d)Wm' );
define( 'NONCE_KEY',         ';WWHkz/WROM26a# Rqj?:|-.][7X:6Jy?@;wUQ0d,td31TO;G?HW-iUz; Oj43~Q' );
define( 'AUTH_SALT',         'Q/-}L3l#^xzvC#.jIOE9y-{4%Ea%O [%}{LDl>pxzdIsj/*2za_4/y48[Op$[U!K' );
define( 'SECURE_AUTH_SALT',  'yvDX(nvR[Jo/Z&|SO2IR2O%;@/fk:k|/}9FFg*dK?eP|hQW:!XjuYzm7}}YLWsBq' );
define( 'LOGGED_IN_SALT',    'J}h&]yImJ8X#R<jYP4Nu&?[g.(=yUT_&Clb=,r/YC1e1goHt~k_ekYI[dA(T[a61' );
define( 'NONCE_SALT',        '8bE[eq?&&43fV&[!,6:>W#{uC+x,J!AiG4|zQy:.k, .#Q&~bZc5w2{[2],1>&Fs' );
define( 'WP_CACHE_KEY_SALT', 'iI]Prp!kY|<3N@t{n0X_L:{LBUZI@a:do@!:+CC/UQv+F0)+g2.i{zNpA<]Y&At-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3af10c908be32177129eee45e42c4c0b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
