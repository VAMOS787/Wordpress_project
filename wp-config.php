<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ETAP SPORT' );

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
define( 'AUTH_KEY',         '%?_Cm`-:P|S&ISQ?n6N9[y:,&S6Mr_&>#&~GPrzj|?P0kL0!e[+!mbYWx5, w3!y' );
define( 'SECURE_AUTH_KEY',  '+g6d]MeO>?je yJGeen6K]adREGr,f)Da90(2sx`x.m6!LHT , J}U:2zEA7!{cI' );
define( 'LOGGED_IN_KEY',    ';4I(_FezU|B),6U[^[&&yB]Vurd#L.K|x`(3yn%<gK5r:$GOu}?%0}v)NLv$yatk' );
define( 'NONCE_KEY',        '^?tpl;c)*6.:2&d,WQf!csX}hJ6=>b N;+n<NIVEEdP:]n$&l*Up7gG5o5v+HYtr' );
define( 'AUTH_SALT',        'b1[3Hp:kn1_78#9[z$;U+=st6;8Bx7ZKuY8{?+q!*wZpnY#.CH|?(y-3&bAF}6L9' );
define( 'SECURE_AUTH_SALT', 'M9F+KJ%ufq]_rB|rl|L=Dr~ZpDdx6X<WgEt(F0nPJpI-rx:h0PNA.wp:^LF9#-MU' );
define( 'LOGGED_IN_SALT',   'X}Dy-i9e{6|BHqoewVctzvG?Ev_9]JoL NFJ$U!h:.awH:)|seKaK@AL3N{%qvi>' );
define( 'NONCE_SALT',       '@&cUmXNZjYiS3HNB<df~C4e|3$cOWV5#:4af>H$5LjvF_Cs.WE:WO_eKbHHSbiNV' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
