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
//define( 'DB_NAME', 'bandchaudhary_buddha' );
define( 'DB_NAME', 'buddha_db' );

/** MySQL database username */
//define( 'DB_USER', 'bandchaudhary_buddha' );
define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', 'buddha@1234' );
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';9Bcg7u(_wn(ZEo&66JULqwSjO(wb*a*XJsg~CXAOo)z@U6(<<Y{@m7R0_I`zxC)' );
define( 'SECURE_AUTH_KEY',  '27;gLFGU6K4_Q`_Q5$4ZOLR(_kOllP2u4LhCM =(S/+;R&>LV@f!SL.[ks8raD-1' );
define( 'LOGGED_IN_KEY',    '`}M:*sQJ5M=^xB<y:#=4omIfUZ,$7!8-UI(;.CNs=6e:j<=UH|^oeqp/?f}_M$v1' );
define( 'NONCE_KEY',        '6a,GK6Spga}}@9m4*c3ATazKAKI_,#(3G&$5>}Atez5!ZXIP|y--le)uOEKB&S)D' );
define( 'AUTH_SALT',        'dY>2)BzY5b7()eMb85Zz6G9,!^#O*gMi^>!G<GUS>z~O@.`k*8xjPPm4H.PbGMZS' );
define( 'SECURE_AUTH_SALT', ':(}+{38dx?fT{x MPiY;KC93e,+}$M3DW8jg5Y;wTU4|wH}bI-HZ,cr{=J~RxgSg' );
define( 'LOGGED_IN_SALT',   'H$uJ%C?Fg?1b9xT!q1{V};mm(+10^!n,>SS5&7s/k;w`)v|qDQ,6 q))0e< IAF5' );
define( 'NONCE_SALT',       'NF[o[4fGn]q<eM$#ik^Y`$5kz=0>/CoeF6#q5J4~z}lwON]V>b$E08McoMTf3cfH' );

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
