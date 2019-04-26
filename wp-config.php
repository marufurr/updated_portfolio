<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T)BR+oi!uT4uV4?UHRLl)ek,Q)^3?51I{&NIRZfN5Ngl@wWWI%y>vaYF;Rx$<lf:' );
define( 'SECURE_AUTH_KEY',  ']Qz1+7wSl8,+3Y&&AR;3hiwt&bRt&#jBkUC,Xk6DGQ@nZ!zu#HP-[`E.tYr!c,A#' );
define( 'LOGGED_IN_KEY',    'Oqw3ZO/9v9u03-gZQ29bL:eg6|jEl_>9vD~*)STjh}xV2ZDm$Q51}iUo#rl+TXl=' );
define( 'NONCE_KEY',        'vj[ic>|@cbcY/&${k8/n w>2w~EgtsLeIdMSWGomf*br_M_`cAIhi+RZ}=TlE7d#' );
define( 'AUTH_SALT',        'eyN<5T1@;9z`b2VIW/8($c_(|4iGN/5[U:[#C;@.eE)hk,..?<]w4$>MT|{$0>-^' );
define( 'SECURE_AUTH_SALT', '*btjm@Jg9r4pxD~vJMMJRk-xU$lrNP)maq;{-[.pNYqHf/XBRHQt}r.;TZ_vvc$g' );
define( 'LOGGED_IN_SALT',   'iEeyso(jJe|0^Kp,yy2BPbL{3G9kaJZ:;5=?|Hl`@~u|aj97Tu12C[y15#zxoliq' );
define( 'NONCE_SALT',       '@ZDbW2RTf[/-a,m?NQ[|T1h`dsP-=mYaZ=JsCUkD1jr:^r)rQ-6vkOxhB1Qu<*~2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mr75_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
