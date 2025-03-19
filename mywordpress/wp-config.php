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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '#W 1i{;mFd-.N>#n:YOQ,N9-xzmG4j5+PXxMgJAQ3PEIJ3B)zD_pzjI?T5@q2dxh' );
define( 'SECURE_AUTH_KEY',  'GN*I_B3.prOD:}|X!7u8sOcq&b/gALX@b3:coHa[GI|UvHPI%fs.2SCO6_OD3&84' );
define( 'LOGGED_IN_KEY',    '!]~rjmKK(FRNs.]dDJ23[l +JyNGVrm!O70&1?1K]!nXwI9&Vz;rR3,7`XmU9#$d' );
define( 'NONCE_KEY',        '|QaO7]$>s+kciKUB}m*nE dF2:}i(0,pV*N,)<.)W4i+.HAwfW|UUgRzhT=!q4Wt' );
define( 'AUTH_SALT',        'YQ^{TKmPUA.l.hv(F,/qHqKU(A@&[n V8oDvuSI+ N/~D^Q>uUjGJ+O=8{h<;qhc' );
define( 'SECURE_AUTH_SALT', 'akCe?8OK-FF8E5PQjg@5dNG8>[4Wq ~=V0/i0)W$,|9QmXsy* }E<&V*fn+#otLU' );
define( 'LOGGED_IN_SALT',   '+On.7T{xPp+_$CKz(e4J3;[o.KU)RADA<MsTecx5=Q%q8m6?igZ?vFpB)hUe(MIT' );
define( 'NONCE_SALT',       't?*(Sq^yx%!r91k@lkOpz2bsQj.&bn^:{[tR )KiP8dC[tVj.?gm;XFU`0#1ulU2' );

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
