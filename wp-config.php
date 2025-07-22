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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'UM3|4j<t5Fr.b%.J% =C@<`1Ve8|-b^XL^-I_<DS8JVVBJ,i rC;3dAZYc*4Gxy/' );
define( 'SECURE_AUTH_KEY',  'LNJbC5@O_~B4<TKt6P52!qI*RNa%|BAcZP[sfQFyalfqZi2?jK%B^n{RmM|ci&UY' );
define( 'LOGGED_IN_KEY',    '~pT9>{{[wC=w2GM{b3TjfvrGuVg^!3!TmE/(u9D=~=bg]EP-^;w,Fbjgv~Y=G*/4' );
define( 'NONCE_KEY',        '4ErjxOFJlGZ:76%UC%#}h_]Xh1R,C0Aw5!%;4QKD% B!m|hSs4PV2E.O+wdvWS{R' );
define( 'AUTH_SALT',        'N%}tQ3q=<<-W{.@B+{oZ#*g8N6AvC&`*baP>U8b!MPj1eLVaQ5#ua:CU!O)[4?pS' );
define( 'SECURE_AUTH_SALT', '9?EV%dX?sX{j7,4:Xmv2F;;ILS[K>bU)dUZv#o5Qw5J$I4[po|{vHq~#|2{:<)BS' );
define( 'LOGGED_IN_SALT',   'd~]hCIU$w.yvv.:r~$=gS.FrA`Bt)J&;;eyb(]lKK~nKdnq(z{bg!N7%R|jaF[XP' );
define( 'NONCE_SALT',       '{NcSnAu-I$~gWy-]:j )Y;iY5|mKpRS5lTQ9,j7VOdH[d-jX3q[,m3SBNp#/Ra0q' );

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
