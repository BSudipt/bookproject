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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'books' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'H?j=,rrv%~FVDca`h$xKGK1s}FiftUwENUNK.{@2ymUeT;cFaLH7.ZBjwV6aqnp0' );
define( 'SECURE_AUTH_KEY',  '9jq=.R@,r7-zL=mvF~00_zqu+j0m_vr)zq, @`^aL@sK}Ns5D`n}*0^;&Ak9yyHA' );
define( 'LOGGED_IN_KEY',    '=lnS}t7Z56T!Puly(%P 7hATpWt)g3j/Z6()rZs37x!y.m/*$x]7Qcwfa5`kdXF)' );
define( 'NONCE_KEY',        'x]gA*H>[$D]g,]:5vcZaOz?[SX/U,DFxajGx8l:rnG8&`k6;$`6R&}Q>S(.Q98mh' );
define( 'AUTH_SALT',        'rm;3f*QOukEd]C%/}(rCy(ah89j-h$W*,AZ~7eDU:J0[0mg4!?Hu;s=G:8L8$Ocm' );
define( 'SECURE_AUTH_SALT', 'Y#;7Em$WT5|5pCI/kPrownK<BXgj;d]B3mfL,:$w8*@^!O`sb!3}AZM65Qo|GiB4' );
define( 'LOGGED_IN_SALT',   '{Rw8@-g;6DU^Uy?nH#8 _I)?d%BSI0@b^D,$vAU# 7k|~pf.S:]p@;#F@h+d74GI' );
define( 'NONCE_SALT',       '%[FCyxUVY`B|d3A-ogfUEc1A9R.o!/T-C-j}IBZzXiYk5@e45*tgw)SQlqF*Nj.w' );

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
