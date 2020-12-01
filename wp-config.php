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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'UniversalSecurityServices' );

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
define( 'AUTH_KEY',         '>rU~54QACv/p7xbF~GT-A#WD_7^IRU4*0AGmlq3WbtHdK/D]9d#:.J(ZHZh^1j!#' );
define( 'SECURE_AUTH_KEY',  '8$j`]H9e$s:g)VGe7@kM}M7~Bt0RE;*Yeyb@Kb +PsWhSK[*?YN5<~pP4?#Vmi|,' );
define( 'LOGGED_IN_KEY',    'B[.GbvV.d<U#@*g0v7D&aky9W5_*cT~BSZ~Q6s+@OrB8&0|&zmjb#8~RD9_C<Cz8' );
define( 'NONCE_KEY',        '>l/{WTm5pPneLj2l}x+e$2H/Z$ *d2ezfZ)p,L`#dEa2l:51+us!>}NB|hehKqk5' );
define( 'AUTH_SALT',        'EdbmVx?GYnZG?D7%<+hi`fWr^f<:?@p_^i$Iv1MzXHtP?e,1{;{#w|qIB?Xiv y/' );
define( 'SECURE_AUTH_SALT', 'Pqn(H, Hb/gfIUHYlA9[Q&{~jcGU76M#hp`nHhFc5KR8K[$K9K8pS)^K}ScPSBFd' );
define( 'LOGGED_IN_SALT',   ';Xy~?ZVg*P8t$uoy%*m-Z7v;+*{cg[lZ=lh7j#`-4c#J-PqyBf,KHi{OuO.;r5~;' );
define( 'NONCE_SALT',       'wa06@bA_d)=p1A6|&Kz4yd)?L/kUATKcY|WuOg&re<INZ{>3q&Sr q[Hzz(s[f)@' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
