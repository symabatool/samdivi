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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aCwqRcFD1q' );

/** MySQL database username */
define( 'DB_USER', 'aCwqRcFD1q' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bNYEEvA1Q7' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '^!E%.]%0!o*3icA=gploLQ]J(*Nqq5^Ez5]A1Ps,:Zp%-U3:W*]dC*[yxH.T}Lw_' );
define( 'SECURE_AUTH_KEY',  ')?{KSYQO9:ATl &Ala1{_n38QFEm&I=1dFUHc9p3$2COjh8rmu(}Hj6U>XuePSUO' );
define( 'LOGGED_IN_KEY',    'hy<4hDXn8)<#!!LL3Ld{4NCX^v^}=RI2vWP)3DNs4W-at4jd=mC^!0QMch/cDJkd' );
define( 'NONCE_KEY',        '=HGZS8AFr+&A#UwH[Rg}##@|=hn(rT]/,p~(ku?0o3IUUfvHZ=t7;&I*!0YZ.Z5v' );
define( 'AUTH_SALT',        'vLt#;T0TaSN`=sWTrW9BSXzTmOtG@r3Js)|C{yE3R6=0>>wUxlYVX|[Xm4O[g7Jk' );
define( 'SECURE_AUTH_SALT', 'JmS{ASX6O*ZwreVL8wNr{h0I+mciuFY]?0|&,&k2]DoWHn}ZLW)T$V|*)pvrgP;z' );
define( 'LOGGED_IN_SALT',   'P%}LMXamtnL,(R!Y@r$4rCi1&;=k?gAqeD=,]9}[7GQ0?8M(Ira2UPOiiS~0t,Zl' );
define( 'NONCE_SALT',       'n]Jx=glJLBbL~x,#g(cIl&h])=)VL=//L)xock:B_1Fd1sedSa4 #ShiixuXX7,>' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
