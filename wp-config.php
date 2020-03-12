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
define( 'DB_NAME', 'wp_lecture' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tttttt' );

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
define( 'AUTH_KEY',         'J|2Oe3/GQm:u>uG<pcI$D 6XWX&7_eF_8!qNCoB1i8K=4U^6<p|Fv<(r(]t#H]D~' );
define( 'SECURE_AUTH_KEY',  '_tK++-AM;L0|.TY!wP+9y(F6#Wg3>UuL{RDI>H`~z|i~+wS@CpBH`|o{?* {quZ<' );
define( 'LOGGED_IN_KEY',    'tXlU$~K/F(*G9q 76A=|VX-t;DGQ!zt;OymDU[DP<$<%~DeN9>FoqnPavYaF}u40' );
define( 'NONCE_KEY',        ' EAI+Pe[<xtt(M`>Y#v/SePkY,odE}Zj. z~%J+;g8O9Nzv@jNF&?=tKV54R:IA[' );
define( 'AUTH_SALT',        'Xznn=6G)O|TL`v#|/+[_GGA|JZM mH.vy,,|6nC)F+joH0f0y*6u)9Q8Ie]_63K/' );
define( 'SECURE_AUTH_SALT', 'gYm&&nHpM7.2Abu0%n>VW/Yq0~)(#[>-xvcU`_du$*J%GC9ckU&-5aLA?`:Q/n~c' );
define( 'LOGGED_IN_SALT',   '<w =*~yfdR_+mYIwY!@iRNA<Mmv$.p|ft`NC81Js^iI-KN$*OiE{qH!m9#P]N@.o' );
define( 'NONCE_SALT',       'tmL[E(/p5W&XGeUq-+LpM^b6EM]I!AkATUnCK3Nk.T>V[:ywak223i8<OvAFh72X' );

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
