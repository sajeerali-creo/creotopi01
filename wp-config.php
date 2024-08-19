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
define( 'DB_NAME', 'creotopi_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V ;HsQyly,Nlm8^o|jfv~<l#tXumrE_DzHIb9|t(&:GqVw!f/[Lbd&IT>A</a.F0' );
define( 'SECURE_AUTH_KEY',  'l>iP0,Hqn#*FLn;k;Tx[nDf`Z&Zce:uNu,e{OD7T]!$$z|!21~Kw]@ru0l2^+x-<' );
define( 'LOGGED_IN_KEY',    '-dVrOlG=p CL(>)1X($y-C,)[{w|X+YIYU1g4liUqE(bm0Zf99b5^{La;-$+$Z1<' );
define( 'NONCE_KEY',        'Dw9;syV*c?*&a5~$-QByKfj/I`)<U8dJN% -!f%{;;Ky9*K3g|<I+_$vU.:DVN%x' );
define( 'AUTH_SALT',        'jXc@k6+(<Z^U~Mtc]INy-U3NTg,}%`(@O*u%R^v4-;D8g8bj.vuqV6W#^[a< K>I' );
define( 'SECURE_AUTH_SALT', '^4~,0pMdjnE*OAaEAQI.f{~;LJ5hEFqj7I3([}=zW6t>v+a+WI7rXCz7V9+|&PSS' );
define( 'LOGGED_IN_SALT',   'zSIWCUW=[&T;@qL<+T;`x.B3e9>I:iQ{:mzYX%;jKDX>|#5P><@Hi^|,DS:2o64D' );
define( 'NONCE_SALT',       '+d,BdXSQd52-T$Iz$}1NvbtXP0qO1RgqW4JD=NTp!@9TMI[Vk!`=|+rEV^Wp -Wy' );

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
