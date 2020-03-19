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
define( 'AUTH_KEY',         's0BNnp%{RHMG^i#%M6Mu]hqU9OjJaL!fJ$*bPTWpVlvQGZ}aMN3Jr2N/2Yb0CBl%' );
define( 'SECURE_AUTH_KEY',  '9ik%P*v86BeE-yfUOD8|m7+g<Ic*6Fblp^m?I2)Z@z&[16Nwh8C:RFU^OYJn~+j@' );
define( 'LOGGED_IN_KEY',    'acH8%h~KG,|1F&:z(r;RCc7qrIT%-gHQ.5?/)gG><zo*L{$rmvoE;Q#br%xh->&d' );
define( 'NONCE_KEY',        'OpO!&x&V$6gZ)uk6X{@s-|ourmW^=nyN2IH}CR,^tZ[c~WwJ9=9zd!1s.|&r#2b$' );
define( 'AUTH_SALT',        'A32xl<b8d&-ZuPv)}J/AG:&k>zc>7ehh+)39e|5*u>?a3&}OiS9mv`<gm?$1;lD0' );
define( 'SECURE_AUTH_SALT', '`rLyvWVD64:3-V2bBbRpkslI56GzjndNyVMEZFe3Q^D:Z wIF{2IE$q-$a*tW[?e' );
define( 'LOGGED_IN_SALT',   'lGVhH;/Kq]u.MAWl[mx#Q4(I!ZX)e,fCV]1wKTrPlCM#KL%Gi dt6G-;A:B*JW?,' );
define( 'NONCE_SALT',       'ErpH<,remf~`E(HtPm_d?S_p[hQ_j]D8SwK6OO:>9q;TQW?AS+&d=DCdQENfe0qz' );

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

define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
