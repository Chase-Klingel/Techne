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

 define('WP_HOME', 'http://localhost:8888/wordpress');
 define('WP_SITEURL', 'http://localhost:8888/wordpress');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'techne_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         'el/Zsc`0KM-?59K*!_TgoM*r4F|Qk-w|vFpn%C[LV~6Fq!Tq%1d299UX}};izKNy');
 define('SECURE_AUTH_KEY',  'Se}o)}4pxcbi-(Odiv:,#5N3&+0(@@h2[|s$:l,+HI MEKz*^00NgnD_SP1/E,(+');
 define('LOGGED_IN_KEY',    '%3c0@+]&jkt[~:3jnSp;.|+.A+lpP|/|Vwg.S[e}&.)~J.)Bk?0kRGGw[$ v%RdB');
 define('NONCE_KEY',        'yy+nVO>shOlgX{{wFG])rpd_+IEI5$/@ZTu^4:JXFJCckk><w/le#p*fT?X<_~o,');
 define('AUTH_SALT',        'l/a+!nmU30N:$[PZB_3-WpO8e{zf$AjH/`~o69I}GC 2K8(aP=(S+HW%(@/eT9U%');
 define('SECURE_AUTH_SALT', '||B/hp#qKbm^Tb:s@$N@LjP-J[|&y^$2N77>xS!5qnsL2a$iX^+I(t}JvB&Y|{Y;');
 define('LOGGED_IN_SALT',   '$2!/VD,4}WbI`;7p@%w*C`AFX%?|}* @2,7)^ajFHrw%gA.|aE8;qk@~x:|<p{_A');
 define('NONCE_SALT',       's.kzQ+]:*i@dF`)~p+%Zl&-kNPCZoPcq]HTbxet)6ctGP~oA0hsc-{:c/YfJ5o?`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'x7gh05';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** automatic plugin updates **/
add_filter( 'auto_update_plugin', '__return_true' );
