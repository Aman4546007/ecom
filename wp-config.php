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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'papersite' );

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
define( 'AUTH_KEY',         ',v+Pa1|iel4bP`J{p>= lLKpg_i=#Id3.PH44BgodUW_29CGhn1(kHTH?VkUBTX3' );
define( 'SECURE_AUTH_KEY',  'mp2G.D6:uS/V>:di}Z%Z,C3#e2k[1<AcYj[nx8]+A3n{-}xeC@v<>Fh:+U02N@`R' );
define( 'LOGGED_IN_KEY',    '.GahC2,~Z^GMxy4A(R#Bh[Q]E/$LP%mD&]l3|8{.uaO}RDHNlE@o;<GtY2nZyTu#' );
define( 'NONCE_KEY',        '}0:(7K mN(9M6D1|1&c:XRE2e#6Hw/>;XJzRlFa$ke5Sl{m0+iUCW~9tG]>GX]BE' );
define( 'AUTH_SALT',        'TCz2QmDJ2p &,]B@o0XG#Rh*}.b:_mB8:z~+7%}FofJVUzL(nuyA.6q:j5z+-5uh' );
define( 'SECURE_AUTH_SALT', '6 P[,p2z%L(0vf~B*5~8-y[>mD04)BIwn5GG^={igG(l|U0JNh~_F1E pW6qyd4%' );
define( 'LOGGED_IN_SALT',   'rk:qRD-DIk>l.SSdr,ujMKkMl*4iu~!*R2$fwlZrHrDR^pVU$:+e9u<rumSc.zV6' );
define( 'NONCE_SALT',       '+^g2XXZZRD{$Z{Z*7,$5v3SzGS2LkTx*UC||t!+~cwGg,l.`L%IA|X)Sejc+^DQs' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
