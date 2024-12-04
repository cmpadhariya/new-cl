<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test-cp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' (,}r@z )!dwF~gD/XdAOq~B3w5*hj?-&nD4q=b(!#+qWjL>Sn4#Hl+(>6PS3K/z' );
define( 'SECURE_AUTH_KEY',  'ph>4$?G2FPhJaZ6E&RV^Fp/JTt[)jB eJirl,ln-7C4_X&^O~g]:}g?wgt5~<^MF' );
define( 'LOGGED_IN_KEY',    ')|{?8UewY5GZ7q<V`#0b$<_H9WJ<=e}(f@9i;b4M)rPalbS8y/*y*fwy;: )T^f6' );
define( 'NONCE_KEY',        'BDsk/`S!Y-Wq^Jt&b%D)xU-3-gWYFb oq^3=W*Bo=O^N7091IyjUUh5c:m R310|' );
define( 'AUTH_SALT',        'XTP&<![w.; *@h9|XB3zjEO;;_nJ6=k|D^Qc6EVmq)o6$])Ufr4JZuO,R5I0ouO$' );
define( 'SECURE_AUTH_SALT', 'Ax7nkE#k7vwV*A0}i3K*;{AxW4|-`M,rTZ.Us&BZnq~dZqNvfnh+I&-,#ZUQ*lbL' );
define( 'LOGGED_IN_SALT',   '<-0heu@quo>OIW2-2W|p)$:c?(>F{7mzfnFK,y.G|5?^BBvK=|$#Wi/XU:?TChu%' );
define( 'NONCE_SALT',       'isNMd>^e,)>]pse4/q5.9-TT?j07-DU)2sth,8OTfe!gR5qg+7Kr35QsK`iKWHd,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
