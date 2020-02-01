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
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         '/*0bOcH;]/dz0ZgFkcscr/0s9smy*eH![DGbtFf&[0jw|:uhwooGU4|6XEOQ~jTq' );
define( 'SECURE_AUTH_KEY',  't.Fbn5!UaR61:!mE icmaMksm+hr$d8kFy<& RfWQHXAR7>FPHhBvQ[LaXFm DE%' );
define( 'LOGGED_IN_KEY',    '`wG@9)6Z5{lw#(K<K!4vN6K:w(n4Yc*!ykG<^R,2HH;]M)r1eKcmFj2d?PS{j#lW' );
define( 'NONCE_KEY',        'I]sLQ})8&-rnCRgQ=yy0hUx+SCQRkcRNz*SrdvBxsn8AFLe-;=4`/IQCB]=#DM~V' );
define( 'AUTH_SALT',        'e&PYbFO&rIPKqW;lDAW_{!&PvtU;ym4&7&sC.St|pgJQ;4xFrh2fkq2LaNKe)D6w' );
define( 'SECURE_AUTH_SALT', 'viD,`gbGDHe?p4 B^RW_S$9_Nb#w+]!vCN|$Ab&>p}!.NG>#V:9{gduB9NpeKpY?' );
define( 'LOGGED_IN_SALT',   ')-kBN4lge^2y4~@6&R~`nZ0{~beHNunGyC-Ur-6,Ay|-=&mn464#q[d$xa(3g1{_' );
define( 'NONCE_SALT',       '!;*w(;j)p!qhjkbFsKa=B-$1 W<z}-{7j3k(HWJ%(m,UNak?/j=ut{tC>vBnQ,AQ' );

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
