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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xR~YfYtgHKm5y+sYlcf[-J|s>xe23}:|B<+SEc5e}F+Xzqy1ZKR|WO[9Pq.ZP-WT');
define('SECURE_AUTH_KEY',  ')NNUo+NA5v8wLsh>W27vyd)B_h~VG{=J&ReZ}L#d6TP2;^$Tw(A-(q<r8{xi[+tg');
define('LOGGED_IN_KEY',    '%NX9$V[?-]MNoi`CEm6h-ib7s:q$..l]xto6lWR-cZu!Q8S x^waU?:$:i6kn]Y9');
define('NONCE_KEY',        'GnwNi~PV_!3TRRO%.+M:V+)R~LBS/>e!,{}e[X-e6tA3b%<eKCdE=mBvKkbR|ro?');
define('AUTH_SALT',        'sPH5*%E PpVn~Wk6l$bg9Uzg|rK!o;7?!KevqcC@qjSXMXw}5voN:^eo)U#P-+M:');
define('SECURE_AUTH_SALT', ')xa./W(s]1?6@oq*nE_`rDoRAp[G?gN|ND|O|Y;O,{Hjo3cazj|8veQ;%]t4|cxn');
define('LOGGED_IN_SALT',   'Z)>J<C^KGCr|vxq*/@X7sIe0Ow>0(Y_m+0:+]}e?U=oZj.A[V.(NQ7,=:]anB%up');
define('NONCE_SALT',       '_/I#A:s?/;2Tw0|>fu$qKmI6y~VcCEq?E+w~D1(j][fC1D_ZhBR#vk]07|~DH|.1');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

