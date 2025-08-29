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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '.~]p||lA>Ny o|Q)<8>xkW]D8g;i^ox2 Wm%+ >3j?!ET| SO2{~ ~n nFB-F6Ex' );
define( 'SECURE_AUTH_KEY',  '2|kQ~9JS5/AnIk4]7z)t;7ClmAi%O-d{@L:zSHseo1Yd[m?Sc|H2U--f~!YN7cGr' );
define( 'LOGGED_IN_KEY',    'um;dhvWNFNx_y?|q@u)op%`j{b4%=.)c;LDN>`p)e B`NhOtzlMqx50lu:wREA#{' );
define( 'NONCE_KEY',        'xe,w/o&I6)zW8EI/a->-.l.?~)=#?=}Y?xxdn~HNt/i-M=tdj|(vZ;[0_Cj+Wj7}' );
define( 'AUTH_SALT',        '.,VU=^]ci9Dn]V|bV/A;=;a1@[2!HoZ90|tmXq5*EpQ[/}7&6?`D>Lhx.oes8fE{' );
define( 'SECURE_AUTH_SALT', 'mw/&M/{vUbPC9)G{pF[X9$pX`vo-Nr(o?8)DmE91c:3[MZFyHo&[XA{$:k^-LfM,' );
define( 'LOGGED_IN_SALT',   'Q6Krh+tO~iVzwIc7r+BU0cLa<OewAkY6KoEU0U`szr,*gb~_7PrtYn g]<V,4C20' );
define( 'NONCE_SALT',       '4=Y$Z#>v+c4]1jiYzzXU?W~938s1V,|u67q[d(id!-pa+9jq2N5V,Q:d;<o(7cXA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
