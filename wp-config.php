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
define('DB_NAME', 'mircooking');

/** MySQL database username */
define('DB_USER', 'mircooking');

/** MySQL database password */
define('DB_PASSWORD', 'm1rc00king');

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
define('AUTH_KEY',         'ub1wygEL65S.|S0N$Z@HDT=Kxm?$4(R{]`G?aq5f{G}GyeL6)]p3fQORl@%}&`P{');
define('SECURE_AUTH_KEY',  '8QasJ`OuQ31YVX.2FPgz,jA-6o`?;VLe.=a-W?[Iy*Yp-[nR(b-iYGFyQ&B<-CTX');
define('LOGGED_IN_KEY',    'CM4*2_F%t0oH%An{MTO,9n?UJi:G^8ucGM*bV~`KdKl0Uq_+A2%EBRU+.@Ihc]^6');
define('NONCE_KEY',        ':,!V2Cay^,V_L*P@t6:PQV.#-AmKK}bluA}c9+O|GJTF?2>acm{+Du(BLiYxbq?q');
define('AUTH_SALT',        'n;tzM?J5>1PJ0=|NN10fP)GH7EyJm#WcpQh}7 c)k}/GDf#RqF* B^$mKW:/@}@c');
define('SECURE_AUTH_SALT', '7(4CV:dMlVs*g{_zrA74:e@rArlR6G4=6,h`k?9{~o=*#Ie*4SG65K&)*@p]k(V^');
define('LOGGED_IN_SALT',   '~0?-<fUAU_l=/NI4-*5mxJu8uV3;rydT[`@1HtwkP{ [mYQEh/*B<7o#N;EwwU.d');
define('NONCE_SALT',       'PKVvwIF{1Oq[NO%X^Do9LsJq>-TD@qfuh(J28N;)_`%<(`d0LO r`p+<juog94.b');

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
