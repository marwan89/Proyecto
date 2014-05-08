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
define('DB_NAME', 'proyectoDB');

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
define('AUTH_KEY',         ';qB-9~c9mdlJwY:8CNM).l|j[pdf-8Nza=cu&+e_#x%M)pZMI[~3bSVE;AU=q8j-');
define('SECURE_AUTH_KEY',  '1m|vl=CMdRKvm[%VNR|tSgz|k,Jra+b|s/W&c-.6p}(^G6?kF:gwdw0Q$Z/w[].{');
define('LOGGED_IN_KEY',    'VWp*FNpn--cUehE:.r4&F)oPh1Xf--`X bNoN{pYpMHdrWt-c;1c=q&Gdm(&`.7u');
define('NONCE_KEY',        '0}zl9+92pRmyBprop-@{3Do^Twi8$?{e~Smel#h+GJFy$+GAH/AuH-<o?BkksNCM');
define('AUTH_SALT',        '|tz%ey*<flKg?<oXiW|Z!x[:<&Y$(G9nuiO$k&#6| T!vDzCTJ9QihS=!xp5[dWI');
define('SECURE_AUTH_SALT', 'jz0TwHn$H,`n<nkskNUK+#APU:wW)M}DA=vH$ ))o]5p`f-lcEs7Sl)~eJf-D t8');
define('LOGGED_IN_SALT',   '=zO`Xq?<k&f=us!GSClY`j2B[kWKjW}{(-qNf=,X01|$_pZ#^i(]SpBSe&GqE~R#');
define('NONCE_SALT',       'T^hfzD[xkeOzj7d-DlChP=+)b(,9=q0-rJAea2)y+#K-@XISus011v,,z5~q+78/');

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
