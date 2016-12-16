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
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'alf47#hU');

/** MySQL hostname */
define('DB_HOST', 'opsworks.ck6gncccnbav.ap-southeast-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'V6>3Tea_J#}5C17?+ocF5L.L:~ddCnW?[2#O|`^7suQwb0H{ru#BHWWY xLjw~w~');
define('SECURE_AUTH_KEY',  '/<zf{*>bK~qhfH9W^>)8lQY,cAv~:hOGmlNdo]AcSj`F9xo^ef`~hjM3P6h)#DSH');
define('LOGGED_IN_KEY',    'cdGF9MJM|][=Cxp qQ-6}cd1,`(9H,1K2Q/0**.m6M3_V4VG+4b^,`}`JWb% *l$');
define('NONCE_KEY',        'pzCR%IjFZt@j%@]m{~,i8f!!p$3/K{*oBV{oO^7{TJ=GeEJW{t [V#V<#?)4eFN=');
define('AUTH_SALT',        'N9g1(6FQ&S-gewy$J[#4`MIloT>Ph5RnS.!?e73N He2YGZ]d,7+2L_ecI/;,QSf');
define('SECURE_AUTH_SALT', '#0P#{R EBVF0J6b+ [8TV/3Zq|Y>>]#;fyV[p)Z+&=elK>%BP~gLp?h9kBHF:RNO');
define('LOGGED_IN_SALT',   '`GH+MSl1ObY@@3e{[;q`s1)|[tW1Q4r8L1<%tI{Uf8Sy]e9lfP+NZ3;En*Tu8Xo}');
define('NONCE_SALT',       'OtuJJ8~6rf#&XflqjGU=W^>W%<%E=EDmS**Sh)I&.r9W=o1$,9LBVS4Hd@_5{Vw&');

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