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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.9rw#}BkKCK!AK03(?g.AsY~i<Ii*,#tI&&<PKRT|]x/=F9jLf<c>y|ud%i-80!)' );
define( 'SECURE_AUTH_KEY',  'A?K_SOam=6XPH@V%3NS=[M8mmC^{9m8;s_L2dAvem@lh,$>`ath+]n<9EpeBq(lj' );
define( 'LOGGED_IN_KEY',    '/O-/q48Uhc|/j&%9}$bi`a5+~F[8y&!1i`}k>H@jlSnmlUi/zjBERSo-z!7%:@a>' );
define( 'NONCE_KEY',        'b/}QBj/uj44JLAg)yY-v)t<uWBT$Q?(_e4-Jx+>C;ZZ/Rr]*JnMZAT}8T7^TKd|!' );
define( 'AUTH_SALT',        '`xJc(FxJ2Jmq2P-,,w6`oin=k;}P=g$uxAN+I={tK]RW;/igs&)Z@<X;9FE.<+3k' );
define( 'SECURE_AUTH_SALT', '59Y?S4@HIMrva;9#S_Q=RZF<hoXHV&j~,!h4`CguTB?]b$b/+ZQK:x=TF~3fw/1#' );
define( 'LOGGED_IN_SALT',   'iTW2tV.)l^>4q2rCDp8O<ZDir@jmm][UaLc|JJR@lSGnAj6EPebK|qFWPfD848FS' );
define( 'NONCE_SALT',       '|Y.<jI-68K*E9^3d$=@a`V:[`y:#2gc#:NP9FD>QvAq|aa^u ,P}FN%XdNT@@{4a' );

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
