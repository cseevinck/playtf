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
define( 'DB_NAME', 'playtf_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')s-C}Oy[ rHv?9$sCeIiC~;arg;sT^AU_2?[LkQhiA0YQ m-%-yw ZygB8,UhB7{' );
define( 'SECURE_AUTH_KEY',  '>`r!v~.-Z-(SiyKL#=OAb-7Yu>u?24dKA~@g*v8iy)$C#>,_r;n>p#3r@(Zx<{~Z' );
define( 'LOGGED_IN_KEY',    'ailPo9uqZD}<9L151 =2G/VhuDT(CNCct}v;iv&wk#(59h/SRU|dY!;jhEjI/k8/' );
define( 'NONCE_KEY',        'x#De#`{:fVVb=&+*4H)+}=:6xs?_$5M{ Q&2)mp bwaNG6+u%fsf!wyY=O@{06zc' );
define( 'AUTH_SALT',        'J)1wLeu(tRGC/Z/U;}?UuNyr,xxC/_s$0<](ElTH&8v8;[z~VJK>wH_J]W|Q}Vvv' );
define( 'SECURE_AUTH_SALT', '6Tr.La dKyf!5TNV7+rtGjJ)_2Zz}T5)iWcp7ShYG55fJ{^|B/>U5:1=FN|khY$c' );
define( 'LOGGED_IN_SALT',   '@PT^yiox;)z{7;y}cCaJOdxmj~[YzcJ_]no)(a9}|8.hvk;H,HEI(vrh3!>x=}^C' );
define( 'NONCE_SALT',       'FetdpxK+W-}Tj?{Q6p?n5fI0q1E]$x<+tdl^|?lE(%kI=hQ/}cS)D&@swDk46Gfi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
