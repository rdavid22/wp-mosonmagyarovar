<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mosonmagyarovar' );

/** MySQL database username */
define( 'DB_USER', 'testuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345ABC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LMj49[GZ*KEIsa,dC=%1YhD+Hp8Tu;z|c:<gK+Q.gI^;tfJ)H7/:4 B8Rtug5.<M' );
define( 'SECURE_AUTH_KEY',  '_14eg?%*gH>I>2h*Y,>z.=a.U=2g[).2dv*7KzE?QZ>1@wcZk51Eh87n-qNtD%8l' );
define( 'LOGGED_IN_KEY',    'FiB[a/a)P*AAFX}zC`D}FRR/|a{j%RbKQQwmDD?,,3Rzqv00xsVxdTg}jCyfi.r=' );
define( 'NONCE_KEY',        '464Bowx!Bw-$$D8{MJ,[tF:YX1>wyVD9Gf3qb#nY+.zN7|A,63$9&07:&?4,1rl/' );
define( 'AUTH_SALT',        '0c&+?-.e=DzUIuM745S^)R7$l-]/^qHxBt(D$J+ro&kvU:pR>Z#2{u+)lRFtP?1X' );
define( 'SECURE_AUTH_SALT', 'MczlPc1]765bZI-i5pg1<q3,Eluv{%-H}FT.,^&Jzw%tI)r3]_<o~Qxi3QRSItZc' );
define( 'LOGGED_IN_SALT',   ':h`7_cLU,@iY,=ke3n 3!Id+{V.~Bk-4?d F2q6ELfUj!!1meBkg=}CjTQfHT{H9' );
define( 'NONCE_SALT',       'apt}k@SRLP4N*?^Hx[#|Or;&CjXF^OP(q;%sgy/Ix#&68V~lb+?k.LnrBJ}r?;*L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
