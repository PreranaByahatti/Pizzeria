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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         '{t}b-Xu8=PF=<[(9Cn:)X<tCz5~dUuwVjSRi#?C=s_g*!KFwq%7wT$~UjTrC{(z~' );
define( 'SECURE_AUTH_KEY',  'AV5~C`{>Ag-8&|>H,MZV>i;KdQa7}IZt,s^u(!~e}ZD!o=cXOv[iUQ8jiI4AR`=e' );
define( 'LOGGED_IN_KEY',    '.EG2!:1o-9n_ c&G~Si9(v_L,BaFw,$izMG.&pw|4?vG|c31N^eE0g-3?)N/Q`Pu' );
define( 'NONCE_KEY',        '.;cP4w$o(MBNsIu }0z9%~f*iZ4weX9TEU=C@I*<vA1yV8VBWh8az>Cw~Y*d2),a' );
define( 'AUTH_SALT',        'n-6,LY|OGY f@AehUT(*i%Qc);Zbj.mxOV[pxOO+]Or6AoCUA|#jykB`u$FfH<|[' );
define( 'SECURE_AUTH_SALT', 'l@s;VTeuZRWQY[0CcWJd=sTlAL-,)XRQ2,N.k|AL~C;vm/Y}T-_%4vs3n%V+%.J7' );
define( 'LOGGED_IN_SALT',   ';Lf%#kt.MF(;0-}=pm[3ax)M:JN&am@0!9G}moefbo#~g}GHD(=ioJ[MM>==Wlzn' );
define( 'NONCE_SALT',       '0d^w8l?qY5CQ_vaXF,.-n@:DC,9`wFj&b=c{37Z@zp[]lZE._@7c2;>ptmIpA0?Z' );

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
