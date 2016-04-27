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
define('DB_NAME', 'miatas');

/** MySQL database username */
define('DB_USER', 'filmnerd');

/** MySQL database password */
define('DB_PASSWORD', 'Ar1ana91!');

/** MySQL hostname */
define('DB_HOST', 'miata.cz8lkh3wypjd.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '#8NKqrevi<P_e{-<ijSH-Eo3L*H<u|qn]oewV0ys w%F;6+e^Hp4.GC=>Kb|YTiz');
define('SECURE_AUTH_KEY',  'Y#`dtJg9M@o+#PQ+p%l<{g-htSxL(QhoPx1=@v`-4N%+FE~C.ga/Zp 3V(wGae-H');
define('LOGGED_IN_KEY',    'n%eKZ|$.TQ3Bj{!]M,!0(0,,A08mB+dxh6U+(<3L#wyOOO4LY$TzNb54/?+;m;,{');
define('NONCE_KEY',        'u@-:S90|.z;2*rr)6XriJ(NbX8_5R8~<XyX50tyOCbl{!w@~#;cT3MTHmaTt+-!#');
define('AUTH_SALT',        '>}dib@z;i-Ch7a`em~At>Y{x}akfWXbgq;N@}?+-n^1:8dJ`zN0mnWD+K@tfX7Bi');
define('SECURE_AUTH_SALT', 'uC!9bmm+L|v%Q3f^If3_+:POFJ~+V[%#Rjo3Pfcf)[%1F[81$X/..:MI^z2HK|} ');
define('LOGGED_IN_SALT',   'O(HKnedYDKwRpg50]=hQOuv&j`[N+n}WIZylo+yRBVLQt5C TeoFLzEil+]J:WV)');
define('NONCE_SALT',       'idEVwoB`,gZ:SAZQgXg?1diGXX}@&/9(E?a$LF+,qvl=FP^DI0QM2}rjWiulL>1Y');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
