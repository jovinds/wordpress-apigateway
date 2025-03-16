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
define( 'AUTH_KEY',          't> &<UCBAEh4nV(`TQ>y7tDWIS0}!76if#m,~M8L{Eq2 @4kpa-hHz|`4?V+$hii' );
define( 'SECURE_AUTH_KEY',   ',g$0/;PbjXAkc|k6T)H[$R%tzyqTNyRgcg$TVZ4VC@| 1e<zy|m^)%n#_:Gjwt*,' );
define( 'LOGGED_IN_KEY',     'Vk_AG%ztSvpG[H}ss,Rp$LM4TQX!<RZ-xa9R;RZBVvA]A:BnZC>_b,fC ;Hofh7j' );
define( 'NONCE_KEY',         'rSDFYv}aBhHnBoH+eQe+Q%Rc{!|)s2Q}J,mQLa$u0uC<Zi.25Ar%jwy<7GK`kZ|[' );
define( 'AUTH_SALT',         '_R6U!Nktd&K+;8&N>gf{ l_#y6G$rAk%JOoz)NwaL{]X5zzi+`2t|!q,r# nt`{ ' );
define( 'SECURE_AUTH_SALT',  '*6T7m7.W!I2Iu$[g`5qK YADPgLw 1x8w]6t>2qI3V^?.JWUDDOMF._mx(&i*it]' );
define( 'LOGGED_IN_SALT',    'T2OTg.ba06{HthV4mC,i8ri4;Eva>J,yR `:0h#-Og`V;,+@k-_lEQa)08N!E!|C' );
define( 'NONCE_SALT',        ';1<fx;Q-X 8hs6!eEXDAe4CYrfKTzcEzlHT=ziU@Um}gBX,<Xg{~ %(fmcH18ey&' );
define( 'WP_CACHE_KEY_SALT', '`z0RD/H.]^OjV1W!7R/pQ>TibV3kJFTwbrdM(7UNa1s0{%qk]4HM8XJ+#L>.+80S' );


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
