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
define( 'DB_NAME', 'woocommerce_dev' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'tQ$B2wm#WF9XE-t1j]$Z^V6#JcQlGE}lqHcjTmW>ur g98|U4)%3`^,w#9C/nmkq' );
define( 'SECURE_AUTH_KEY',   'RH;bYEBxBeF|Cj:*-p`x[~}%TDkQ&-:$An[6$r2W)d<pg~I62(k<KJh3Cc5(deO6' );
define( 'LOGGED_IN_KEY',     'tB3r#Pb|4J=8[)5t?<wH.%YcvL2@zfI9w0p?txz,^]@O;Q] cg5W1|gSC#e}G)xD' );
define( 'NONCE_KEY',         '2zRzU)kAg_?%KjoMdgm$%Axqg!Lg}/>^!fsIqOE/X[P%6I4NwLSQEm9&|OD1R_+K' );
define( 'AUTH_SALT',         '~Y:*v?:!$8Hbtkf];!`lPr:?!D3)#)]{A)29e%D*Q`y*]~ark8+wI:et}?o!.0%2' );
define( 'SECURE_AUTH_SALT',  'T&;W;1JDp;7Q&~+Z:$w?[TiExOuX;?M[0+U2gB[j;J3Uy5LB!8;)W.b+,hv}*{%@' );
define( 'LOGGED_IN_SALT',    'CZc_WzC=^BNRubWo1P?o<UeY959,Qa_53DTrm0#*j7T}B}E*LxwQ|:]_Y+t}g%qQ' );
define( 'NONCE_SALT',        '>!:1/QO9siiJ~IfU+qxvZ|[*IK$Y2BR(w+A7|NX@no;a^7+R4AdD;}LLppM+9<Op' );
define( 'WP_CACHE_KEY_SALT', '*L6BGO/I)xP_Z)+dj5~}YcC[@_8f/d/14GR/]A(!,^W)<h)-P+`$TO)#~B%]wb/{' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
