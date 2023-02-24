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
define( 'DB_NAME', 'db_pos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.254:3309' );

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
define( 'AUTH_KEY',         '|FUg^$z:T_`{oo1xAW3C^:=$nK+d$C^~O.6~,v(Zs?8K*A5$9c-V_^gXeJ7Xa*j,' );
define( 'SECURE_AUTH_KEY',  'AVI?ZtXkK[BP$!bS*^KD=ceUGRZ^<(w@9#CC{rtw_IyYow#!d^ay`6sbl1j2=i=)' );
define( 'LOGGED_IN_KEY',    '?1t%[%m~zV.=P;o1jrZbmPpRg|zl{>LtCw` qDxiT-{QZZsEa(5$%.: M+d)ACRi' );
define( 'NONCE_KEY',        '^+.B[Lb*pNlJ2=^RF2x^E~s6HfRt|``evJm*cw(t(U#;)8HALR`[d[X.[2S:(ISX' );
define( 'AUTH_SALT',        'rPnEIBPIbREc0_1RNut^f(z]%r6nS}g@$e !Yr]1;itMIsX2+G!j0@OX(rf 3>Ol' );
define( 'SECURE_AUTH_SALT', '5=3;5fxI9mNOODk=So9?wvR7!PR^8Dpd<&^26M>%jnszJCIJY|N7g&Oh$Pr2aB47' );
define( 'LOGGED_IN_SALT',   '_>Z`#bHUvI/o;j1:IAo-5rx4mTpYCr4nuu4DvNZQ#[;1@<^Upg%e<E]4Vpco1{m>' );
define( 'NONCE_SALT',       '_+&U*a|*H~PTSm9:>sBjvxZ [fI?iT/Dlmap!vVvAiR&TyG.yp4o!Jj.-*S>wvEr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kai_';

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
