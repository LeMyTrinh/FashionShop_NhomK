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
define( 'DB_NAME', 'project_nhomk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mG|A2 (E1+p81&H i<wuC6v+5O).#Mi!q3<.UrRAUIxHGn+VrNnB=o##7T@DAbTl' );
define( 'SECURE_AUTH_KEY',  '12Gl9(AIbo6G?iP.@rm`WEA3}|WXQ$xO,PEc <S bm7T!453wuYs TPX?V/=mMSI' );
define( 'LOGGED_IN_KEY',    'z(WidV8!lCan[>`#4l$mVTsT5.Ov0J#iPNbWu|Xw:%fZ8As BEWZ]{wa/90YgIe*' );
define( 'NONCE_KEY',        'J|)$[bf3%J`*j[rF]G(%DMmhn,?wzI_;H-nXb)dJih9jVj4T(vHjn_bR<t&-BBce' );
define( 'AUTH_SALT',        '(zZn&r^bWo_Xfji]!?1U@zv>&}lbcM3cw6@3b>nGO=N=*oKFDIvou:6uFAIXIp j' );
define( 'SECURE_AUTH_SALT', 'n0}&g<`H(%3fhbYyK#abN7leTo$8*{{%[HQPV`3$7vN>d8&_vC;5eQQ+e+?AB)&:' );
define( 'LOGGED_IN_SALT',   '**,)gBI~N[VWC9N/mo.gu(le,OTrQ*tFB%,jt+qt=X}hSsVH;a`4C6NR2F<B}YKW' );
define( 'NONCE_SALT',       'Qw5bpO)k~`dD:M3eWs,dd&UA_l?+ vW*(eVhZdA 9rSl/:kb;xFM52c18U^mAHFP' );

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
