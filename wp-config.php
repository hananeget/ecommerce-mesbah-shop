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
define( 'DB_NAME', 'base' );

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
define( 'AUTH_KEY',         '<~A6O}U,/`Y.#>?p#x5ukk-;J,Kf31YTLjr=elHkA[nrAEGk({Gg$]W8H+I,|#/S' );
define( 'SECURE_AUTH_KEY',  'CEG*0A7eMI,- UIHo6 [sDU#`WO@1r,4E]EB)glXnR]n^wWW%JDLHlI5&#2@h&^?' );
define( 'LOGGED_IN_KEY',    '4n]bg@r)RUP`Z%*nWJnW+6uR#PYXXh<(?ch%=mvbc3_PACXv9]([U770=1@TQY=x' );
define( 'NONCE_KEY',        'de?1?+{S-reYzSEDEb6^r9JtWv1lZU%kIP,[RD IfGj&@0R}o2]9 vva}|G9{in}' );
define( 'AUTH_SALT',        '{PHocRKu]:)gg?l65uJ<U(|Wmdv,N(Z6xZ2oLij9*E &#hDhTbB$A7X,BW9_#df4' );
define( 'SECURE_AUTH_SALT', 'Z+dWR7Wf`/`5!HM7t}psyn6F`GnX&f{_N*EQY T(@g(iA9?FX{mW,4N75XeQ5rDi' );
define( 'LOGGED_IN_SALT',   'G,z hthFB[~/`h61I(Rygc=B{x)sd]gmhZ8ZF1Rji{a)jRY~QNZ g0)CAcF0</VM' );
define( 'NONCE_SALT',       'YyxrW#8c`;d-7nS{*=1o}f!,F ,h1G[.;+-Vj8=BPdg2-1eL3!id#p4_Sq[L`trA' );

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
