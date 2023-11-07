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
define( 'DB_NAME', 'property' );

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
define( 'AUTH_KEY',         '_sM3:V}E2NC~2M}MPy#6max(ICX Q$t0Vg2S4E*p~NEhAN)^K%2fr]M[4L{s]I`@' );
define( 'SECURE_AUTH_KEY',  'Z0.O[Tg~`dfCDbt7^yc@J8F5GMV&.I+Nb7 71)~r}S=x[s2yfA~H$pFdR&$#EWpD' );
define( 'LOGGED_IN_KEY',    'z#+:T/sVwIT%)-$#.LKl3cx#T9WX;2]+D5.IYu9=7wEb?LEp3/ GsVJJo.I}m!,*' );
define( 'NONCE_KEY',        'b]dc$=3 O{a$QA.@HE!V;^6B2cdoEDY5I5cqhut@t36Bzyyfm*b|q{a;k[RdA;1,' );
define( 'AUTH_SALT',        '?p5lD[DX@dRgXYf]J>TSK%jms&Mk{`OZiZ?M*9kH8Z+%r8]0pSn)XD_d0xZ3d..B' );
define( 'SECURE_AUTH_SALT', ' qR+&v/*>]/0Z./YBhtqb2]]5SzZEyfkVQ`3~4-fjj625nYlVkxmWHY;k~:(Oz-H' );
define( 'LOGGED_IN_SALT',   'EMetxzX8g*~<KK@5HQK/n`3o;5Q@ yp.4!mw^DNuUw}<{?W0Gv_c$Q<5SVObY.|2' );
define( 'NONCE_SALT',       ';`8]3}0F%I4A]TS[QYS/DXo#`w>yk2:;:$Tmz>1+xt<]Rm0kaQ5L`!Aa<Y/b7Fkd' );

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
