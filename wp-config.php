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
define( 'DB_NAME', 'req' );

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
define( 'AUTH_KEY',         'y}{(Nj]?iDnftp6|k1!/&78/FX6%G; m*%tCds6%Ii]nVpbrrvH! eU(q3|NJSRs' );
define( 'SECURE_AUTH_KEY',  'FQV(M)#{)adg` oJ,/`*yX%^WTnIueptola@;q5V*(_BZX%+$=tOS%pVmS9U?9>t' );
define( 'LOGGED_IN_KEY',    '2Eu~?Q5qsMYsRh/zZQWD}b+L_*,sZo~j!=5iD}U 5IiqbP%o>hyBA`v|xj>h(i2)' );
define( 'NONCE_KEY',        'xYyUxl8DOg<09~b1dPU.2|bS@RTPb&7,3z8[%$!V/]G<F2#iQMG5+5*Y*59}H+e=' );
define( 'AUTH_SALT',        '#Ag[k.Thea AX#V|E1%LpBzJ%@l.jFFW1Y-Tky3=6dhGfvy[P_`Y0{`#6*xk!EvI' );
define( 'SECURE_AUTH_SALT', '3a/fRj><6#)Iw;SvM{gWnCR}mCxp[018?mVQD3CGio`SqSTZtoy&4KLu]Ot%q|n?' );
define( 'LOGGED_IN_SALT',   '75SBOrgi!h2SR}R6x>J}($k`aj08dDb3Y)8t^@ny~Kr6`XF!o)pI&+/)f5qxo8^c' );
define( 'NONCE_SALT',       'x3rTBqc:peq!vAHr<2ftAzBA#Iv9Ien0pfmC4D%qSOUO2/@(zKj,cV:cr)<GkS!s' );

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
