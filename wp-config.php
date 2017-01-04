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
define('DB_NAME', 'Chunky');

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
define('AUTH_KEY',         'gxi&jU]UA9%C@7g-CDsR7@0xD?^ucL~,`7HG|o&@I4(P4$2A=41 C3KZ;2fw6b%&');
define('SECURE_AUTH_KEY',  '6^,yoQ<(3ce0H;D3M:K_Mkg}8(7V]l+xI&_}3BoKTE|iLEwm,_/uasB,T:QrLl*i');
define('LOGGED_IN_KEY',    'JotiwbDwV5b]U4]2}r--7 o>rZrs~9X?rho?Vv</}7xq}[2PTJj,+74#%?8Bxa V');
define('NONCE_KEY',        'mt{(C*58&SI9].CY7K-)%BUXRj~*mtgvH?Nm:l2aeR/w:dto(8]NVrC*tz{6(,ib');
define('AUTH_SALT',        'Q<f!ZpMS~Jv@y[j j<8W*K:~l3FS9Nh^8x0q1v15r>Fvm1e;Y&4#vQUAn=63`fWN');
define('SECURE_AUTH_SALT', '2Xr|3>^Lhd4686AfXU{MOb/(uI+OvBm4Hh:#^c-cNpGoq#RMYAH)l3Z>nMa:QO7p');
define('LOGGED_IN_SALT',   'KI~.8C2yu^W_cvXgv0GA,F^NyKJ;k0Y#}#JHmlgCe#MZY$gDIb8kd_rbWgx~r?~n');
define('NONCE_SALT',       '60(3Aib>ioM-7HgUv]XSWSq:iE`,ut|cxaG{H[)`63&sOO9U,)>&A?}AN,n*SOFp');

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
