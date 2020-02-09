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
define( 'DB_NAME', 'grondin' );

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
define( 'AUTH_KEY',         'v2TYf7|$#R:=8`6rT[:a9y]pj;0W^ Fz7@p1aQs(>$QhWl&,Oa-X{6fXg8@.%`oz' );
define( 'SECURE_AUTH_KEY',  'kjPg`KnJgN2t%bEt8Q.|14 `MQC^Y(9gOS`Wr,N308m4aJ*i7)ZDO}3n`2pQnGU(' );
define( 'LOGGED_IN_KEY',    ' j#N?Dki9|:.`LN~xd@oSi^$z=kj+h;h/`%xjw{nabTQ7BIq @m.8F=*].r;sEO;' );
define( 'NONCE_KEY',        '~2;%f l~bF7?rI&{1u5wlR4DUOU%g{4>krUSZ7-m}LLimc?D^trP,q=<#LhOUVeX' );
define( 'AUTH_SALT',        'IXcj{3KXL8CKvH5lf/t%o#]~#J|~505_]r#Y1:5oq+d?ac}LIbeD1l^f<.H_aR]>' );
define( 'SECURE_AUTH_SALT', 'ZMgp=?|{@3g$l8a%j(IKZvY0hiUD%r^Jwk2gMDu.g/rC55cR] jrzH@:u<Z2}Z:P' );
define( 'LOGGED_IN_SALT',   'bZX(gV`g*PN87!~ x@}+eu-H}mG#4@q~eJ(b;AWrw*aZcn8jMTmW*&`B;b%8;UPS' );
define( 'NONCE_SALT',       '`XI[U;F5]`s 0}~oi8?;./kbZe0UQf1RIfN(2T6LM+f>$dZqAYZ~Cuaj7|@N/mTx' );

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
