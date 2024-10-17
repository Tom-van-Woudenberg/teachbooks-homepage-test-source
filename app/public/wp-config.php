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
define( 'AUTH_KEY',          'mgW?`>6O:a!Tje3E4swXFFIq{C$+wbp{M_ieHg7G>Uv{|aU+v+}f!lX@6GAY=X<4' );
define( 'SECURE_AUTH_KEY',   'GV^*DYUTF`lwSU> EKer92jV^C1E6j 6dEA2&7B+,6_0C1 Xaq0`jV2^%|F>BlMP' );
define( 'LOGGED_IN_KEY',     '*wn:r<~t@owK/`4,mRU9&0`L*[56114*6Msz27GCj_?7mLrZohCgf[E?jcEpt13p' );
define( 'NONCE_KEY',         '-&1I( pVv_pz9J&6R~:x3j,n+V[Ud1OezDM/V=D{w|8*zr[w:++GX?);6j:$xqfT' );
define( 'AUTH_SALT',         'P6V<NLdg$Onv%P%<fuFUJphfh~yX#Qsjw![+#< 0fDO%NupIATJ2j+S&te$PB6;.' );
define( 'SECURE_AUTH_SALT',  '62^BJ-=V0h5Tp.U&9emZrND`9#n(|~QooOFsy5+iq&5px|/<nfi/+,!0 1Q+E-Zo' );
define( 'LOGGED_IN_SALT',    '-yhtQl_;1}U8w,67*)/X0nqI/@sR@KZ?<b]QZAq Rt$#-W[aX^lpx&,Wypp4~-k/' );
define( 'NONCE_SALT',        'hJcc[R!U+f~VmZ~$tYEyoZmQOSuO).5Jl`;#VP+ND-uR8&da`wqdu9C^RS80A^2=' );
define( 'WP_CACHE_KEY_SALT', 'x7Q>ew[:AoX?9,B`eaX!<15Tz7`tsU]{8(__fjN4?ACC$M,PT`b|loXtl:|gL1Gc' );


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
