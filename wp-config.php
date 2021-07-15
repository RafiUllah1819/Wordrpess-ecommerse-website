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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daraz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%9auXxS[mxx,3kDoAb(IZQ6zB[~DR/M<j57s!Gdg199LE*9ToM;%DSe0Tm ;++mj' );
define( 'SECURE_AUTH_KEY',  '&cIdHs$R<== S~zCjtB%K|6Z[0pgs,L(z(k~ oy4+.ae;T6X^:X&|tg:SAMg;&2m' );
define( 'LOGGED_IN_KEY',    'dce.j,%R__(E]ybZx;G)$^qB]$~;n)Y/>J?d@Z;rh0WY>S#hELW#Ie8=ZMDgJ#`1' );
define( 'NONCE_KEY',        'mcSkC)HCh<R#7j}^+BZCSYNkX&4KlLB#14BOcDg]TU]NKQ?$](J^ztzqO1VXQ5zu' );
define( 'AUTH_SALT',        ']&m(JQG!j~&pqcx;Q M5V0/D3_o3oKin<V^]hACwWWewEO2ryQ#_H/B[%;pAwRzm' );
define( 'SECURE_AUTH_SALT', '{zm?MrmW2Se_2<Y$,c]Q(d*}-n;J)$GSsAYl/C5DL2A6O&M69E9tlo]_<ji*js/D' );
define( 'LOGGED_IN_SALT',   '44ikg@Zy-Xqbl}5C*J*C&!YWG#[*4|<azr[KQ]CUc}S_V-*1le0mV302NG%K3>->' );
define( 'NONCE_SALT',       'WXy[&LzzA7bpKu%UCp}2Yz7T>|Vqh?eq$}(Q=.LLJCn{g:3oeHCC1k<#FY=E<Twr' );

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
