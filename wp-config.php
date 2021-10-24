<?php
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

// define( 'WP_HOME', 'http://localhost/interior-alchemy' );
// define( 'WP_SITEURL', 'http://localhost/interior-alchemy' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'interior-alchemy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'PUwVi6SE-#vX}Gpy`y)<#G[SKppq:~7Kiz_].0/AYd{qSer%B>6h69h?C0=abeD.' );
define( 'SECURE_AUTH_KEY',  '[/pGp?88.`yyfO*T3O*<2~]$c_ur_%.V<B5#!q4KOmG`Mo32vsZ6LWD8unsc:F1A' );
define( 'LOGGED_IN_KEY',    '>:P SytkwFzoJ)Kfo&qBP>l c6__%|?6p#;xOo:VV}msd2b8gt<++HpG;|7oo92Q' );
define( 'NONCE_KEY',        '{Q1#nF2644k{Vfn!ravd,d1q-Sw<=>h%WcdDSTY]<SS3.skY8s1r2|I+|DjWv/mR' );
define( 'AUTH_SALT',        '+O]aHXet`(Y$~3,[Bq|H9B[Y3@JA#~2%<WXXl @~<QFNp!p-Tv ~1U*WrD%]l+V3' );
define( 'SECURE_AUTH_SALT', '@fy5HyRspta~=5h?yAjtZV*z]zvL}W)=@ntb|`V@ )3gIMUEf18Z>[:yHK%pkF)^' );
define( 'LOGGED_IN_SALT',   'j)CN~R#qcl {zsj$t?&l#X7ec)j1[/xU eLrz ;Ia$!vuF#KhMseht^>+<!4WE]a' );
define( 'NONCE_SALT',       'M{?,4-O[sW]@XACQ5}*8/3Gp-l/?dsn$qgtG{B[o?p/Z!Y8T]U%i|o;PzhN$X,Ce' );

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
