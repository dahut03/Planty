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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '`3)NLs FH54{]LrtgO4Jo/ 0&>!l-%x4k~h5?_yJ[GtbL|L 5^ }l` vm1zUTHJ{' );
define( 'SECURE_AUTH_KEY',  'MtX*=.gq>5Xr/aB4n/+m?sDKJgj#@(^j/}5bzdf,J` &#qBYY55mm@$M49X`@LkI' );
define( 'LOGGED_IN_KEY',    'Fa.|$w5:P9XPiY=vwhx }; UJK[6UUU3Gw8~q=b$dRQCC(DAs <5Xl:Qi|i_q!B=' );
define( 'NONCE_KEY',        'hr#KBCmp, 13x!OV6_.l]cA8j5.Rdaso,sSqSS /5,-8|[SHl<P{?[tCKfn~OAFD' );
define( 'AUTH_SALT',        '5Zt_E_UsVh)Bfuc4S:-eI(}P!k-aey3dHSL18 YFjhm}HUUe]8YIzwT5fqN7F%! ' );
define( 'SECURE_AUTH_SALT', '1Io8CjrS5t,q|eJhy*N1Jh.<U:Py}z]Zm&9jS*6ttG^GhJV{^=/l#jvhvjknz>7`' );
define( 'LOGGED_IN_SALT',   'YZFoIprtl2z[t6x~A;-ydL+w7;riN4}f.w{HdJQft4ie8q+7O}C,}3A|8aZ%;6X0' );
define( 'NONCE_SALT',       'ucNf@>DA6R(_?(#JUKGY`(g3<F;gorFus4xMP:0o/Mrs>Dl0&?|`^k|P<@|uGjj>' );

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
