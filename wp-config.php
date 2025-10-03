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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         '1n[/8T_&h_,`xJW/zH%baBc_OGdPkS[8$C+@N!9FEh4dLq8k3[FWuhk`>D={jJh)' );
define( 'SECURE_AUTH_KEY',  'egR^iUsflC=WxazVJCKFz;zW<0|R`q^ws=~K>kwds^B8XcD;U~<K~0+`-d> e+m[' );
define( 'LOGGED_IN_KEY',    'fQS2`<2.L>cp?9./4M#jq;XT={/12bJ&9v3rqxOP>Tqo-:+jz*;u^DU5ePZ`8hl)' );
define( 'NONCE_KEY',        '{I^Y1M{$-w6(X6owQ_K)%@}pox}J|AW;5q;UYo4k#;QvU6O5`Wubo&W|f,SKsWS6' );
define( 'AUTH_SALT',        '#!`jju/[-`Y2N^s&mgZC$|I{%^HEE}j&Fdgnn 1Ch5L9MErloFg=eHMAy}]D-+I9' );
define( 'SECURE_AUTH_SALT', 'ylC]8Mf9Ei7sv/L*OP_#k8 X,c!d7g4)y?qee5FK}?L>$DjAJ}<FsD2cmP<$,=84' );
define( 'LOGGED_IN_SALT',   ':~Fkj38e3`!;Dxh4~Q<h6X)E><~Xi&diVrH^MQNbNTfsU6xu$D7)m,RQ_hkJf5~S' );
define( 'NONCE_SALT',       '7L%uX>^]ZqX[I79YDbnr_S${dz9AFUM0Oz!?G?d@h4?20mdNb0 f(==&Btf-DI+i' );

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
