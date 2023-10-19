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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aikantik' );

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
define( 'AUTH_KEY',         '*B!y(~aDZkqiFni**MF)ni4Sy*[U>gS6WC;O1W52CDb<H`<wGX(8;L$#N4V0R_#O' );
define( 'SECURE_AUTH_KEY',  'iH#Z[w=m)Mq@;sa#d0oj,AJ1SkD^/MXj:Dpyk7[f]<Ri%<AB0RPu4V)d&o`R,4~&' );
define( 'LOGGED_IN_KEY',    '.u<ZHH,msy?%m;^`wqd70y}D!8P&{Y7z=.3kV>3$Yad9d^p<o@kt&4Lmbm2!vi[@' );
define( 'NONCE_KEY',        '~oyrMuLEm[It,t%)q7N}/FAFZ^bz;_R@VQrDe=Ru%TZ9XpbW&r+Q@Iq4Qvx=5/I|' );
define( 'AUTH_SALT',        'Y~Hh)GO7Wd ZE)OOTB|!ik,7eVtLR&zDeB5|J<(fGfL]!~`CN$>W=RU.{<{b2wC1' );
define( 'SECURE_AUTH_SALT', 'mZ?a*jV?vZvrFuZr6H~:L}4jO.Xb rxr+(_-X2f]rK^,BQRi$%]*:yxgU^k&,h31' );
define( 'LOGGED_IN_SALT',   '@N{Gxagh&^51=_C[J;]H&L0hU^>LxtxctfF71yMg#yPu_K:S~W|PJ&%X$[65gG2l' );
define( 'NONCE_SALT',       '4@`HhP^,a;(S(C.)YZ_H<@?g=TFJ~)Yd;kbYfGdlsRJnw(9Uh~GD-6lWCP!@Y;3`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ak_';

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
