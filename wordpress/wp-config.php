<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'adrian11');

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
define('AUTH_KEY',         '4zjAw[+H37WB/GsCV;FFK?p2]CAI5xx!W{v_wSg}+E<D;ADLhb-{Yhk:3TyCq(}p');
define('SECURE_AUTH_KEY',  '7Q*?rEWGDB{_@rHk^xrmsZ$eOO3Q2D}}x.z|^Q~g4GH|&ZvZe9/DKms@>`U.Ps|u');
define('LOGGED_IN_KEY',    'd!:-C@fuicu-<!?`<h7u1;/S$;(/)8U(Ufy..M(es`k,J/g2{;`UWn?A&o7!|y!H');
define('NONCE_KEY',        'o+{sg#Dlrn6` x?o`WN q#zQk-Jo6uW2+$ x=z`x#-<Ocyp47![Y6G;!Y{7qYDv9');
define('AUTH_SALT',        'wuUmPVa|=?F~$F+:tsg4Q`Sv,L+;RqJp4Tj[vAm|vT)Xt`h|Ms;A:Al(,ra_WA!O');
define('SECURE_AUTH_SALT', 'B6zV*{5H#^}tUfA3.<cKn{j4;4zq#MtrH++?ki4|SR>*zN.}Fa{_K<^k:1k$rDi ');
define('LOGGED_IN_SALT',   'q%kB:qkxsK!2uT*NZtK,Z*oV(+@Sc-QFFvscTajlqC0+kR;4v/b~-EIn+l[3J< l');
define('NONCE_SALT',       'EiET1G>wR&@jAUj&G;btL]bQ[LGDWgh=t:<K-VjbCSb543X0,<D-MwU^z)+a->7!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
