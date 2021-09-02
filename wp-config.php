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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ADc Y8RWq:v@!hVtHKLwo#p0w3U}|-j<W8AH7PEOb]M5Q|r/PKJD,eCOqiQF5  T' );
define( 'SECURE_AUTH_KEY',  'q1H:HZ`|dD&B-uZc&T.WR?m:GmEzKFq@D{|Exnpl7(jjN^SYOT@U p| 3y:-MYx*' );
define( 'LOGGED_IN_KEY',    '5UCtlL4J=< DHT8i1i6AQu^IhtXoeD_})@XOJ22ig2<0ovD=M]KoP.g=1G:sVtAY' );
define( 'NONCE_KEY',        '%]Jg;|$i@dI8X2Tqn|zDW9p`kFbY?_keo_n:*9(]_Klj2(ab~1X>m_a,D3-oIgCW' );
define( 'AUTH_SALT',        '3q$I!MW#7NpoTJ&kWc2r{0]QR+Z94@@ob!Z^&kR]^($s0th#$j6cTwvH$Rk<4RWl' );
define( 'SECURE_AUTH_SALT', 'E/xpWEj(;c+K9I^~Rp7Yv=uN-.e*9fo!W}D48Yu[ eOwgc/c14}GBK4b&5qTeuxW' );
define( 'LOGGED_IN_SALT',   'nrhlsS }oK>65k2*L]@Tz+s/ep8Bh>rkUV/0]:O#W;m6S]S),1e_,$yb_D.TdYz.' );
define( 'NONCE_SALT',       ' ;R_q_MVVu-i=</1;qgO8V`{mWQ:9$CGRrb@k`Gs0baAEgbI@H]^.?[U9|dK#,gd' );

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
