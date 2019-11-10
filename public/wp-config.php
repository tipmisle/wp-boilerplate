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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         'oZf.TKr}9#VIIc}[ZC=8SlO?bZ;Gww`oH}`h!r}An?m0Tz<SYIb4IFR^cq @f|X;' );
define( 'SECURE_AUTH_KEY',  '`+-x9Hh($5neD:iNf+-JY6vnJVQ@|1|e~`Rsk6Bx=JLZF&[i)~M/[N1b&^f]^Sx)' );
define( 'LOGGED_IN_KEY',    'F4<8D2>e/6573ayZ{P4v[;xyz`{$]>?#FV_-*e[Zf]YD^T~.^e(TzN_&o(w;H#`)' );
define( 'NONCE_KEY',        'L14e*oB=`k>`ISg:*ha1P,()mE!luimN|m#ne%Vgz1|$LA9yIf-5Xo=f:SuWytII' );
define( 'AUTH_SALT',        'KU[+*R2P~-.813:X}}9_,@:/r2vwar>YFBb:RpxR{mfE^Q*z7:NPetV$F}&q[>)w' );
define( 'SECURE_AUTH_SALT', '[ /u)~.+2ONN9sonMo8o^rGfbAD$[54IF)b=4_V,KPP`v8q{<`&r&Q.biB$hOu%*' );
define( 'LOGGED_IN_SALT',   't|e}fX8Lnp1?=],@^AOQ%X^vp=.B(hn]%U1*^jfoj%*I9JO/Eus6*m47aHusO2o+' );
define( 'NONCE_SALT',       'uxBX@sD^M{:SmSW;aG`jUP<3pv.-`?h]DdNZ8hAb9>57M?Ey99M> Y*Xtq?OX(<6' );

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
