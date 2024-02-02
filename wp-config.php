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
define( 'DB_NAME', 'ciunsa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!rID7BiaG%_FfB(IN=,m$`?pW]]GuTT%z4]].])xQ79JFJRpr`pC]{?i3Ci/Uqj@' );
define( 'SECURE_AUTH_KEY',  'iIQlI7=dJQ?3NBF>NBf:.,oDP GR#rI28Q{Nl|Npo<=KCOQ^^L)CT>aAq/_?`z>}' );
define( 'LOGGED_IN_KEY',    'x`t[8,u6NQ1k3*xb]7QD]/J4tss=V%Y^DyhZi@?boPr!Y(kZv)kcVVd.E>9X#e#}' );
define( 'NONCE_KEY',        'MfU;])HEvfT uEBwXW:rfpp:TN=.~rjr.X0P8$m??$`sne&1zSOd#Z=:WkZq03a0' );
define( 'AUTH_SALT',        'g![]K2IHHyZGhl54*OE>u%pVU:+]B8{N?E]Z R#t!]8px]3uQ~CBeQd1U0@9P.J%' );
define( 'SECURE_AUTH_SALT', '2z/=}`|qOJT(7&Q$z$}Qu1rvh4qk1NBQB=/O ((En=J/6+HdX?#10: tl3T7>kGG' );
define( 'LOGGED_IN_SALT',   '.E;y!tf2-9:{=p1UUOG=<6j*nZ:`XPU4m42R6VC:)5j43Olc:C/Tmr6b5tf@.E&7' );
define( 'NONCE_SALT',       'OP)x#~o.1}XA(&?-^^SV9d?fydSw_@sJ9Oo*>uT2`RC`{4Cb0}kJ9m%UVieUkW%m' );

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
