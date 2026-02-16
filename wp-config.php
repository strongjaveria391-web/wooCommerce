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
define( 'DB_NAME', 'woo' );

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
define( 'AUTH_KEY',         'm)|5p^0$s|c4XP;dEyl8UL-;)=`:n$;~bw^0-q]9w/~e$I&0Y<Qt E-U{Mtx~~l=' );
define( 'SECURE_AUTH_KEY',  'lk/KPpY4f87df<=oTXEDkxlAoy8$C`$JX;=@*;O5eD9.r>5AlSwfSXjLfCmIC|d0' );
define( 'LOGGED_IN_KEY',    'kjnrYSYHv2}kD*,egJ{XVidUGGG9MVZ|x3Ju!2tQQVjM0o!M2f)m2M4-}ue7#Qc:' );
define( 'NONCE_KEY',        '{HNox*D3[Wph:JgV7cKm`$`{Wn&=x+@PZkNx0#r`UK^MkEt&A4/B?&vjt DMRhqW' );
define( 'AUTH_SALT',        '=4r*ES3?y(8yz,]!ddf]zZqR~Dk+.^y6;=M|)$A7w[u>]$Phj]P=.KiClv22A%3S' );
define( 'SECURE_AUTH_SALT', '4U:a =PgB#MBq1HP53Qs^E3YE]N#uiTYl])>6:Aj)?_>oInsCt$;*I4Q@b5wya5@' );
define( 'LOGGED_IN_SALT',   '8a 1xl<Ao^!BJ++`5#us&=?P-EO&6N(gZ)vob9F!_~w*5r!|Rj,BkHFv_*+IObHx' );
define( 'NONCE_SALT',       'kDQaTY|Nv!qz;374c^|pxFM[mZV2t`VOb2x1?dV1,Gzo{Bh0egiwb)lH:3#^A*PK' );

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
