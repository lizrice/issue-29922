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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Password1');

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
define('AUTH_KEY',         'HMyI@P%p!j5GZ@)$fYumBHy&7CN*T(9TPEy>$u&l3$j{Z4WCJo@1U>vT,c$4<Ue.');
define('SECURE_AUTH_KEY',  '*8yld!K5i].{0V)U]_{h29Bd]x5RdddS6e`QD<MCe62|6):wUD[>,Zd]IIG>9+qG');
define('LOGGED_IN_KEY',    'wcojn[sb$rnJ#{ rA{(JsH;WxBo>^X4=|m>gl)ELk=s5&Zs7[L8/K]sCXlL~HO&d');
define('NONCE_KEY',        'd>8(&T48YN1{hGPx}fG#-!:Y85(qAlP##q8P?P^.h/i71w=1/#$I0)D4lXnpW=GW');
define('AUTH_SALT',        'JM$aI2;TFrrn58b(nMq}H #p&AYHGX{WPQJwt o=j5]nMZlwB)TtMnslkO]P{]-2');
define('SECURE_AUTH_SALT', 'ksh4),**$q_.G3[QpX4cXR-4;tv> 6mrv$ph5VP*ORT&k+y}P540 %O?Cw<SD7>Q');
define('LOGGED_IN_SALT',   '8%8va=nBfOrhD$Co~N2O^Q.k/GUgWw:[B$(sgrL8nB&@]S[B$UVA#M!*I$>3/=K7');
define('NONCE_SALT',       'C8nM+$.wh@ok{f/ *zMR9]NEP?8/e#[g2[c.8+.-B6|+z#Zc%irfa;JRL{mON{)+');

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
