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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         ':I/Qb_f~=Gh3dA/m+4}`X0bOtC!v,W*zvuC/J(m,cRwgw#9?L[Q_e5~U 7:YK@7o' );
define( 'SECURE_AUTH_KEY',  '?q9fPC;|~~ks*4Y@}&M$EO6nE8u^:gT!b?eXN=|i+EIxs3,d,@@s0EE=eH$)@OGi' );
define( 'LOGGED_IN_KEY',    '_1gT&OwLp?ZT,-9Rh`&`j}_DLyh<^I5bGX2.EA/=5*m!W+UX2`(QfqnHbL|.FAWA' );
define( 'NONCE_KEY',        'VJ.jN.gLOyzVLMN?Gz|@B3wnNO[|^p+Hmc#;P;wRBwG_m*s-tPQ{_[Bzvu$RU9xm' );
define( 'AUTH_SALT',        'oQ}9N^:1`FksVVn?+5Ph.WL{[N#`tl^J.;PdO/W}`xjb`e$:~u>$?c ?{ 29kQM+' );
define( 'SECURE_AUTH_SALT', '.9w|90nQ)<ui.G`!{|8e}[SOHpz:&22wdd=38yYrt5gSE[~JE4(M(8QMVC2a.0$4' );
define( 'LOGGED_IN_SALT',   'Q8r|jk8~*=AFtY,,Q0 Nj{tiDR[lUvSvePI5SlTt1YCf|eJ]t$g&h8v(dCI#^@n7' );
define( 'NONCE_SALT',       '?cNN}eeZABSdoGy6Y;AF>~BvXF9(7)<MHN/6kn_+#6Yx0my32MPB]%Vx|-I|U>d}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 // enable debug
define( 'WP_DEBUG', true );

// log debug info
define( 'WP_DEBUG_LOG', true );

// display debug info
define( 'WP_DEBUG_DISPLAY', true );

// save queries
define('SAVEQUERIES', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
