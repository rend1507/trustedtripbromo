<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'tbt' );

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
define( 'AUTH_KEY',         'vV{SAYi>4$bCDtKbWx!?PDJF-#mtK@fp{Xmx<ZFxMA#U$Ch(g=IR$Sw0>U8q{c&#' );
define( 'SECURE_AUTH_KEY',  'wO3]ErYuJ:BGph8n^?$<X5Z gW^uRb!hY{dZ>;4BV._]uR`Q_zN?sFTZ}@MP9JI ' );
define( 'LOGGED_IN_KEY',    'jzjsjsglFcpEq+YGyS4YJPTzm5),^7;4%8Wt1;kaO&3|R3Y1b}vp>cc<zP*OFGA+' );
define( 'NONCE_KEY',        ' K;)6mOvBdyp7a`#NsK_A_^[Dx}PC;ZP M5N}M~wwMSg]7*a)1)5Ca98U-NB?mCu' );
define( 'AUTH_SALT',        'GyXfF5BLQbTmP^LOLGu2YZ6S!;aIl XKV5EFtJX]lI(zJr*EW`<tq@YK~}O!&X.Q' );
define( 'SECURE_AUTH_SALT', '=U98@]z@`n!Go@C>9iD{|cz.:MfM0pZ?;gn@YWg$f]i}%W{iA<n5hR4QFWv(9;<1' );
define( 'LOGGED_IN_SALT',   'rcWr#Cr=aMNL2_th/C<FtS$8%{<23KDq^e}upE5@qp>U]QiNqF|0A]O*Rxq9h-@f' );
define( 'NONCE_SALT',       'T5XV|&xQ$F@N BY<b~QS7-0#:]F]fKY%_hHjP]kxo>9iH~/FGZ}UV3Hrs(7b<A2*' );

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
$table_prefix = 'wp_adm_';

define( 'WP_MEMORY_LIMIT', '256M' );
set_time_limit(0);

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
