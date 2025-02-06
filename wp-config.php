<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Restaurant' );

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
define( 'AUTH_KEY',         'a;vR:kt2Hhh+&UA&9BJbtQC[vQYW-uZ0Iww%_lw]](E.`LSC<0Y[k>8P/Uh<yvZ+' );
define( 'SECURE_AUTH_KEY',  's<=ispBz-^kZbFk_Poh*Iv`sIt{B%9~~BVUQ6tenaiz2wb@KI[VYdmGTL0x[QlwA' );
define( 'LOGGED_IN_KEY',    '/K5V.!z8)m%7OxC3fVkicewp1SH0=H4,C1>,r#t*)p7SOX qY#RC/0c_ =ph.Pf[' );
define( 'NONCE_KEY',        '0?f?Ju2cE_WSfNkmSspPu=%5C)`!L2!hI%*h}s4&7bUr0(}U,O[r#/.%.tgUmPP|' );
define( 'AUTH_SALT',        'zel!O-E0cZ,x:5N,D{?o{|oPCT&leXONsK@r%m0kwsJsR!(G#zq H}WSmaLO6~UL' );
define( 'SECURE_AUTH_SALT', 'h. ^BU<UJ?L!!Q5mkpA FwIpaef,ix6&Zk40ej(&5Hp[5<O-4ev<ILg5N%y<v=5!' );
define( 'LOGGED_IN_SALT',   '{i;7Dqp vhsD%-10}95} PB_ >}.r.=b)x#r|ruI7!t_={#DCX{tiZ.I.tnkQ~p[' );
define( 'NONCE_SALT',       'xpr&N[e?MvvO`H@[W_zV6VL9X;{vfH`I4-&nH(tYBcR$5XyjjE+_.jMcY$:LfJR(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
