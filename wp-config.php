<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*PvzV F?80AV($TbqkZ]P;!BGVOYo)z. sw!b~>z7~BD?6a]KGndWZl}G}YY=-G}' );
define( 'SECURE_AUTH_KEY',  '9T(8UQOn/.{7sg?]mD-I9mBgoT^5jr&H01KvMxr!NMW4>,H6%/B*gF:u;- ^3.a>' );
define( 'LOGGED_IN_KEY',    '^|CRq.J%30kY$;el*/h%FliH.OtG2_8=t3TT56no&:m@deS.A]FFb{Zso0@T+$Q ' );
define( 'NONCE_KEY',        'Am}:pA!s[=qL}ywj81+=7pGs% WabeW0!.QB<)zix*@Q]_c{5/WP+v_[OGb1=0)q' );
define( 'AUTH_SALT',        'ux9TOD3Z9<Ej!vT2!T~)|n_vg?2-]lD0f=$?.>%WcFG:@bA!<`$G|EwWM}FxzI>J' );
define( 'SECURE_AUTH_SALT', 'H%L2Jr_M,sh,wE/PJ$)Rk@]F7^Y|K&C4 qWc]m().)U-#YdV<T{@pB>DrJ9]Hr{r' );
define( 'LOGGED_IN_SALT',   '}X$U~upK7)Clcl#FwQ4UE*u{sp?Y24hKTXSX=!)5y?5{VBQWTd6~{DUqIn?Pyk19' );
define( 'NONCE_SALT',       's2^Cz^vw:(Mrg.LH5FQ:-u7QwbLxz#0kP5!n`(B;m.Gt1NSIT/jIx]|//bEk(y#F' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
