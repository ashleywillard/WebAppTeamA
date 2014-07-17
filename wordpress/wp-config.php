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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

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
define('AUTH_KEY',         'n+6o[NCJoP6}@NUWfNx5uSh27{k|W8<1(v+O!NEa}i>kEF<7[-Qrl0^*~DZ&uu*G');
define('SECURE_AUTH_KEY',  '3}9vBWju_pn935 Zi-yVXv@NyFg-zs^B1S+Iz3tTc3%@l&[Dtz(bfq -Ci^/j5nS');
define('LOGGED_IN_KEY',    '@y1-E0F/@r:qtUv<Z`m_W+xP[F<G}ax,wB KJel.e+P:EoIj,Q_oKG-WJ2}lGnYf');
define('NONCE_KEY',        '-8~@yTY(o`k!4ZRECqSYthO)8-ZpfS_.&1I8lf@UU>|9r?8_je@mQY8$KmYPwYH^');
define('AUTH_SALT',        ';;sK1+Q;dn|1(RE6g9PpgS_XdC&Ice`DH5xH:t,P@Qnmc4xF|F7WvY-r(Z] 3kM:');
define('SECURE_AUTH_SALT', 'XLN|~U@2WJ0.1oa3Yv3-gJ)A}>]{,`&I!Lm}oMY-@Twy#DLr`7`@i$4QPf]y1xig');
define('LOGGED_IN_SALT',   '!?jOi+#bDb+4XE?|I/LWJA7jM~mHvQG;^kLVNB;@C25H}xR+94/q@UEQyNObvG4;');
define('NONCE_SALT',       'resqxt7oeZt^H}c9r`6RHm3K!@,+>hGO4U2c#Z=+-q1xh^>Y,Wt8-kq-rh!(3OEy');

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
