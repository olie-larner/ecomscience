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
define( 'DB_NAME', 'ecomscience' );

/** MySQL database username */
define( 'DB_USER', 'science' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EcomScience2020' );

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
define( 'AUTH_KEY',         'MQ;+*UJ:I%S*7`/VA%rH0WjgDf{Gh~<a|g=?PiZB[T&;Mz[&D08E*8^}j/<9:h8}' );
define( 'SECURE_AUTH_KEY',  '=8dbaPNGQ@N25mQE$)|(pB%M.-N;*7oqz-bs)!/&ap*SQ|Jlsu2mNePH5l4[t8@%' );
define( 'LOGGED_IN_KEY',    'evT<Eq|GVHUSf<F2on%`>R0]l%^-1e6v`u_Tk,8F|s=g(oo}pt%`dnNLA7v#Yf1z' );
define( 'NONCE_KEY',        '@x[SK1cl3_0*j}98.V$kI<*781NpiP97}g(aXlo*dR;qoX%Nc-D,pkVm.=p]L=]G' );
define( 'AUTH_SALT',        'rF.z@-%#Y6Qg61Z{N!zG6m9E]qe&Tiwdy:krhA1fhio`,7B(nT@MxRhR6 BYf`)j' );
define( 'SECURE_AUTH_SALT', 'nCg++!E8>p7@qwpEH}%{!B,hcSc(XoyfYG<^KahNf++3EGl_O)z+oZwjb.!7nOy-' );
define( 'LOGGED_IN_SALT',   '(X::bH$g)1tIIC=S5YfmFGv_uh0Fc}qe,D(}n IS[=;Y:ue]{St&:)VnH&)us3cf' );
define( 'NONCE_SALT',       '>!>i8#2q$a2nMpzQm]xuT#Cr0FAN#(^CZhz!x.^e.xcl6f&F>u&uwon,Jn-Vli!A' );

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
