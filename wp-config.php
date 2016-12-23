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
define('DB_NAME', 'myweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'iVo].!mP}3oL?qyIEE,aF cnc6h4t/.7L`woi&4^,s<aYWpYp- ?_#yv,Ce0+ <C');
define('SECURE_AUTH_KEY',  'NMY4ay&QgX=[$JdJm?CC9|<}90Lv[w+}jf/Va6X5 c:uAQ|VE@KzY^!i> V5}X,i');
define('LOGGED_IN_KEY',    '/<W@J)HQxB>O_jqEPQDq,@^e_/4N <r^G)BZ0D73=ad|U0tpbjjFaMk]UHUrt-~-');
define('NONCE_KEY',        '1h)+.cb|&Xv_fTQ%[qgQ#|jAOXxi~MM 0 0}PCRU>u`d*3JmKU*AiY X<$y~/M[!');
define('AUTH_SALT',        '$=~mImY;<cQd|sH~XL{5v%l2g5$~k58n[ZfCa&5M]c|oJ Z21qfkYayv<MGJEfR*');
define('SECURE_AUTH_SALT', '@.cx{ej;K/-JM}D/7ei{/7YqSZI:^+!2k9{P&4l2fxBFEUVAytI.F.D9xkv}D``^');
define('LOGGED_IN_SALT',   '@tN5xn;G2N=%es<6k8gvWq|vZ|:p!dGnZ]A?D$OvDw:,hlpo_Ig`rThEYQEKkWuR');
define('NONCE_SALT',       'm!AMC0 )~Pja[o<UKT&j$d:]yt6g$l6k/6ga^jI_EB>xS<:&#;bx8X/v@e]d/#74');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
