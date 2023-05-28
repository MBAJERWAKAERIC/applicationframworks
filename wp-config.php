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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'mre-soft' );

/** Database password */
define( 'DB_PASSWORD', 'mbajezinaleoncieEcho33@l9' );

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
define( 'AUTH_KEY',         'P*EBT~HE$+&a2|=Ax[y~?Ar`<O4wj*V0@S~uE_OeLWcey,B,ATs@>_WrqrNn>yv$' );
define( 'SECURE_AUTH_KEY',  ' CC_$UN9#Jy1zKu+XTcby 1E8kS6GHVauW1Z~Q2i=I4O.nx[NMo6>D(GN2VnS3.`' );
define( 'LOGGED_IN_KEY',    'uo0L38Bv`9;Y%(yN~{[0q[C,?F*2[xl`=_ER.+(-L{?*-X(fYxf=>{UTKMvJD%JC' );
define( 'NONCE_KEY',        't#ZlteHQ)Hr &j%$X;8clr2RUxtilc4PLFP#S)rs1nr+8J?{[Zd}praBLY`>2r&/' );
define( 'AUTH_SALT',        '~dK$I=zDG&Pbe8{`a[C(`~`J7H%KV9=Ls;J5$w.5ZuY%pn,-ND]U=*Fp?EX.*x0<' );
define( 'SECURE_AUTH_SALT', 'U?Q#+q#h)X2,9)=-fq o*]#&3W5+xc1!5(s3!V8@;z)tH?RYz:@2piI&;^s!?&uM' );
define( 'LOGGED_IN_SALT',   'N+?F)J5!t,]&mql6relNW^{=xv$o1jBM=;qZi[D0.__]F/xh->N4RL3{T&y}]z-S' );
define( 'NONCE_SALT',       'MRjDPj*^ +fJ!hDWQWBVeX2OD$66m=v`1p|NmaH!O_<-I/juGbBD#(e_RYv,-f;y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
