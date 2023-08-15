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

define('WP_HOME','http://localhost/wp');
define('WP_SITEURL','http://localhost/wp');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'q,#//jO}8Sc}n&+%%gVq>d4c]0>D85kdesMc^,e+TlT4R;dz>^9D~_8qJol#edM)' );
define( 'SECURE_AUTH_KEY',  'pLE=[e<*h{:mzbD5dqBouyqj5Z8jzHcd-nH!sgJ-+TTno_NZQTOIC?|i(%O1r^z9' );
define( 'LOGGED_IN_KEY',    '$xJg2g qCJ/;3xHPjxpo9+!x}dI{):C.bH[7r`6kR25%8h$@rHm$s)M]xL7[YI:`' );
define( 'NONCE_KEY',        '0VCA&L|!/~gu4.;y+AV(qi+}Ggs><HR) |SWE9GeI!79W0!U-_bnv3JK,XL[[YVT' );
define( 'AUTH_SALT',        ';m6:2h>DEf#d#6BH8gC{mJ=FE 6XFSk??+th$<K=Lo6%-p!(OP7D|PI~x%:U^|_B' );
define( 'SECURE_AUTH_SALT', '.fXctPKgxXuJ-YX09]-To}I6H-s;G.KI<O>(?i.{Baq7:hVpG9RPWjVm.rp!P4GR' );
define( 'LOGGED_IN_SALT',   'p4UQx/4{;SG*`X1EK)_l4iL_c9Vk]1JPO.mnYJH;+n^amH?[^#*o?fROq|`$lL93' );
define( 'NONCE_SALT',       'Uu2H_[=bGfde>D|pGQ/vG.(K+FM%#zK4@7gHVq/d,lPhF70^Eo))$G3U8VwgS::_' );

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
