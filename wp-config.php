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
define( 'DB_NAME', 'grid' );

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
define( 'AUTH_KEY',         'b/eAqlRtx]2)/hcZ;~Fn+:r&_5|C2>1w&0EP3=c!!R9dj)6XHB,Q{Vf1rh%5-*!*' );
define( 'SECURE_AUTH_KEY',  '?za9oUtI&YFP-#uCJW=&f%L*9!jS#R*|Go:`Cb}$dC5O~>Jgt^OHoJ[=MyG[Q}&<' );
define( 'LOGGED_IN_KEY',    '9+VT:{=%>nK[GBgFX~DR.)HY>@J}zOFR0H/aMQ 5OB M|FdVW=4/b%wkS`2zH%pQ' );
define( 'NONCE_KEY',        'NdWk5t+(c}U{e|Jv>3ochpEM ki/Tb_3&Mj${$+&(DJ{O_sW#*!/s+P6m#;MXIm:' );
define( 'AUTH_SALT',        ' {Vy;}iKTx&Ky~4UPa`LB}2A,DhP3]mRF<HKz?Hj@M$]TG8.(Z==1D?A/]3/~2|!' );
define( 'SECURE_AUTH_SALT', 'sEZ0DE:k=<)}RP[8AL|TobYoXdhz*1x%-L/*yM:RDC9Y|ts^;%0z@&KiAyImSGE3' );
define( 'LOGGED_IN_SALT',   'Px}n`^ Lx05ZA~+t@y7gLxh)~!xAPvL uD<8O<5Ozzr C<.4WguVao:Qs2G/~o@0' );
define( 'NONCE_SALT',       'XS(uaZhN!5E%M+Sy=R5:DTJ.ki{LfT( kE0eWnb6OCHr1^tYQ0`c&;(}lWrjMe<T' );

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
