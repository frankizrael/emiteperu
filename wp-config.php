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
define( 'DB_NAME', 'dc_emiteperu' );

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
define( 'AUTH_KEY',         '<@Y1ESS<a;!fc-Y|IizJ7x):Y!FBNPph!v&L%Atr?C* |t1y@a%l/]WY$9/|Zct!' );
define( 'SECURE_AUTH_KEY',  'Xs|-lmJ=R,V_JO_03 i<z2}aLq$otH0xQoEFQpLnQVbE_ynB~M }`jW,o3x5gx#W' );
define( 'LOGGED_IN_KEY',    'czi9kaN=DCHU#!&jCU31Wf0d@S,e,QdLSRI37I`Aaq><:Ml[Gv JA[(v<SaWs!w9' );
define( 'NONCE_KEY',        'OhafSH!W_]*^cfWrYeC#%Y:/:o!V-qy@3gHq[*0!=XsL#&+AN:(ZLl-b/{%nNFSI' );
define( 'AUTH_SALT',        ';FxmRE0IV(t!Yhr55MU^/BCqB|x;twYa93p$TIn$=!Rip+B&}G&HIfs)/]aDk8?L' );
define( 'SECURE_AUTH_SALT', 'yB%onoLh=dU*AGO<gqY{/KU2^Dxzt #nnGp.1hPMo6mCXyZ}QZ9XzS8APuJUM}E_' );
define( 'LOGGED_IN_SALT',   'WI1<%+p*|+D#)]au$X#@/JDRZJr>)R@6X$O_Q%cE*+sCbW7H SV%1(fkMRW-HY!{' );
define( 'NONCE_SALT',       '^8hsk(n+m4d&8_Q0n;qUUC<O(cZ|`ty =grWD<>HN#sFa@EA<,:jJxKbXl+4ymM1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ep_';

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
