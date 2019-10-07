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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-exam' );

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
define( 'AUTH_KEY',         '-[}s=P[385^4ghIc[jTXNtStl/wIIy5,+O~z`ZHPCVD_j.|vAd0M}rWwMK~Ak(=y' );
define( 'SECURE_AUTH_KEY',  'KYPg}d,SKJ!Mjj07ISMYx}qf29Uf#YZ]g^Kt`Q_;B7?nBFTnG*,l:t5296# I1{N' );
define( 'LOGGED_IN_KEY',    'u]ZE{p>8;;ns~f^Q9Z[ZOE1=kG^Vs>h;4j @g<<1K)jYs?Uf-X7-6&$}GK>Vx]Jc' );
define( 'NONCE_KEY',        'V){>}/!*1|[Hw]1`F@EkXUoEBxN_Y(5GdqC+8!5BBH-,AIn5IK|O3FG_fGDpWPRl' );
define( 'AUTH_SALT',        'mVf(xS84,F4n2hN`)O)4OAOCNA!Ua8|`mYd($-wuA=JzgSz33?<$DAqj)V>T7W&T' );
define( 'SECURE_AUTH_SALT', '& jZ_SI<-`(zKY1p?NSzrt@f8`!ecX_OoP^sr%CRTF+Zb!%#gF{|2QNXWuRZdF#W' );
define( 'LOGGED_IN_SALT',   'z<:_2,qG?<=A1`D4<~MX+ B/!)uEvls>Q.|_o(At>=!8ps2R!6I)#oHp&o1!_)k~' );
define( 'NONCE_SALT',       '=FIhsYd@Y_@DRZ:}GMTYq)A97nwTH9v9?W`x?R/MIa3dKa/;}<0/ Ijt1s`=35.4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
