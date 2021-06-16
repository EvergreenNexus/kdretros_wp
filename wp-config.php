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
define( 'DB_NAME', 'kdretro_woo' );

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
define( 'AUTH_KEY',         '>Qf$D=rI_>4yvvkEc@n}k-[,i~nSE5|u0^O1J2EQ9vPwu!dg=&jm`U/;ho`wE ny' );
define( 'SECURE_AUTH_KEY',  'cPj5De+S|cgZRbnW/<E<VMo5W.7mN;w@XQi4n^jq6uTcuFP/{VL}eF=dQiZ#Dn%l' );
define( 'LOGGED_IN_KEY',    ' =Qm^ #)^N{KVaS5Nu&jN,H&|##BSbBRvc nAhO`z>mgPqFW.;[nV}iU<)tEe%Tb' );
define( 'NONCE_KEY',        'da02L;Q>G$BnHnpKxIvw?jK0+s%f39bbB[6pS?!E/6$sGfYA+h}`wt)B0FMu6r^y' );
define( 'AUTH_SALT',        '~JEY`yp-svX: SYSU?V=#yLX;,#!5XuV[]:K?fdhda}m_JNxM)%-p(!jyJ-h,Zk%' );
define( 'SECURE_AUTH_SALT', '^l~IcY]IrxDxD}svn99e.z?/9vU3?6[Vm8o8oxn6L,|t6k|~`j L1]%&Y+hCc?/:' );
define( 'LOGGED_IN_SALT',   'hR.Bx;p~J0a->tQWBO9B)|7PC2j1+ !:(SRF5t,L{ckM8D/YB:M=wSy>B,r]B1,/' );
define( 'NONCE_SALT',       '#$Miiv$gr c>[C|-q&$kO^w8UNh2rP3FJ3fb==MM]Vo?Lyy$uP{+[A#4x/9#oufI' );

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
