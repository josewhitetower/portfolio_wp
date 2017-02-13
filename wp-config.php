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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1C&I:[LH9@RR11AI& qnYo:2 vQK*E.f?YFseN@% Aft?8v;^=$=9AVON0FfdDSP');
define('SECURE_AUTH_KEY',  'B41ca?Nh0<j_DsS^v6JOUp)#GdT!M9+!Po4A^5&*a,sqj<YzJ{1oTlKr(E3{!fPd');
define('LOGGED_IN_KEY',    'ex{y$HPMw+/,<+7~@EW=RI`FMikx_V<%;WCM~(%x7hFH:v%wB6=}15acq{3_<;oT');
define('NONCE_KEY',        'oIc:zFeq*^FyH@O{y9Ym@+=9-:Rrz!xBJ)N_#{@u?cP6&:yzh!e%JE`sE2%Xt`}4');
define('AUTH_SALT',        'eaM~/bCseksByj!46._4P/cxfbWS~Io_%J`j.JC{e]P0gE}?9xs^dS0MRo(Tr/37');
define('SECURE_AUTH_SALT', '>g_I5Funiz?z. bYaU6YC7{JTcX!IVDS3&I~OvR*$((oH|1h2ejE>+a{da!q!RU8');
define('LOGGED_IN_SALT',   'M&]xjU:njL;s<CqVYogf0U4p{J=v-1M,Mb-Ot<w~xmpN|c^4T2}~+/Nj3Z&R|]xT');
define('NONCE_SALT',       'DRxWWDR1%zg:o+[UC2bgd=0$CEl|HIX{BZA85}6)_{b([y?k&{?e%Z{Dv @&i-kq');

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
