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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         'N%ssj8L. @Lp_-8{#hbKP [{I15GLs)++2y78&EcfE}Pw9tyHm5Sk VIfwdYg,.!' );
define( 'SECURE_AUTH_KEY',  '@v*$tM}3Hnex*5EzS*gM9So<T:Z4r-XwW8 j<Q>yE(CtzD^Q758.M&~n-(z8`jk4' );
define( 'LOGGED_IN_KEY',    ':0 +Ka{36d<2{?lZJk?+k!^R|=*s@As^y`7o9yR`8MBWvco4{ m./w@z(1-;:1f5' );
define( 'NONCE_KEY',        'jU-=-v]&&-przk3`oAnZhqrOpk{C2<{%WnIi_i3@>W?*S$D:W|[O|Z^MJ2N d7+]' );
define( 'AUTH_SALT',        '-qSzqb|)]r~)wr=eIS1z6dOpq>FH(CC>~=,@B@j|@90>5U?7t$eSLDc_7n9fLH?Y' );
define( 'SECURE_AUTH_SALT', 'JTRJoqL%MnU?Z[rcs>owwyTifNAen0k/a$1Fj|}77_8l#|<IKtv]LJl*$yTA7>`2' );
define( 'LOGGED_IN_SALT',   '+savpmYt0~c~e}A/}(a2<o]F95Kb{32%23IhUG4>!H=J|J=!6_:|,,,!V+GHahE2' );
define( 'NONCE_SALT',       'G^Km;NOR-/n2h=.*v4.9qrMz]Y2LFJWGO^AF,rY$JtnmyVIR-W3%1$/2C9F22T6t' );

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
