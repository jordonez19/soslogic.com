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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '0q e0UWz.1P/e FG;b{ab6ADY~RyBpM-2lIa/LVP^??bE5XsWg$}g;.I@tP~8:%;' );
define( 'SECURE_AUTH_KEY',   'PI<wW2OZ>n-2H{TosZDQ`6k(jlqJGgx%xvbwb~ib2Oqf>Q^#Qz:mH9,3IOi~/xti' );
define( 'LOGGED_IN_KEY',     'fOMEa:cc!djLtGx3khj$llmC}FLF2A!bkVv9q%3(7kD4c.hn-$*.%yj0 yqD7J>[' );
define( 'NONCE_KEY',         'u/][F<5}N~vfGzX9+4>,$%Bi_H(jbbBvDi0},<-)|I/p_SVyWdpyi,U2Sh33S].!' );
define( 'AUTH_SALT',         'BOZWl6Vj0{vth;z};sMcEq]CgCX:-;KT!Z%]>5#Sr?!;<#N`8t5L3k7vO=|8V%u_' );
define( 'SECURE_AUTH_SALT',  'tJ2Ye[/NTp_jpy!mD[zCTZoefy!a@ope3FGtn?u_%aI@q0)oL2jfe`oKa-Q[Kus$' );
define( 'LOGGED_IN_SALT',    '.blHv@S2}Yi.6i-fqz[{4?v07^te!O9XZ0O7,UH[71^L6kdO) &^t[9aYxinGpoI' );
define( 'NONCE_SALT',        'EH~qE$AvVuA!EfBKO}lF9XimWIEL`>,W+^(3doTy[=MaJ)E4Ok=6`oWfDzFCmrJ_' );
define( 'WP_CACHE_KEY_SALT', 'P]Nk#9U}%a|9Fu?d0$63$RsQ|WD-_L-(<-b??;oWr{rpc_L5oW@>J8d5|r]u&F1[' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
