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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$iR!99lu0`Z?Ioq(M KzaD:9A!tnf-I]6&Q0[$=WZL<t6mCN1iF&htvlWL8M)W}g' );
define( 'SECURE_AUTH_KEY',  ')6Cb]qo41bG6~y&R)!A &@iu^?-CIv7/z/a76N_e>XLP?j?*9W@}-<B|J[U?nOT?' );
define( 'LOGGED_IN_KEY',    'D+4c}c#*AZg;o~0h@-r].TI=S]2rRm_NQLH,LW1h?`}_a~/>oq5f uQLNL_BRCvT' );
define( 'NONCE_KEY',        '|Cq3K2=j;{JJ$S_XjLiN/@#vC*xSbF;dwK`XY^@-F`<.lN @a>hK/Lnxw-GPItX]' );
define( 'AUTH_SALT',        'R(J[Aq HkwR@eM!`)h}b]=lef*b)#L-lp=ajen<o*U5)B$?WGm?@^G5[?kHc9)kD' );
define( 'SECURE_AUTH_SALT', 'OjwD`@b~eD7JHnuUloHN^Y~rv/iyWl%#b$wB3j<dVmODt^@`L>B%~Jnp7wHf02ky' );
define( 'LOGGED_IN_SALT',   'j$.IIVQ)6h0QrvV6mc{UF=xlcW8#0KE4rHLIp!v&p(C0C64:Z65]jFO%7%jzg_Lw' );
define( 'NONCE_SALT',       '~O5Yj9,TgVS8woRC@pQf9wu*P_1@~MV:KVZ[.ZZz?S0vdLF,PcR!m{&z7u8uXmW*' );

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
