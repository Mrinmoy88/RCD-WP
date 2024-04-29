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
define( 'DB_NAME', 'u505426395_rcd_ngo' );

/** Database username */
define( 'DB_USER', 'u505426395_rcd_ngo' );

/** Database password */
define( 'DB_PASSWORD', '6C3Ui[pyUr$' );

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
define( 'AUTH_KEY',         'j/-Ay<#.!vW&d6y.G37HikI gmc4$pKXB,]wy HVxu62`L7|(t5+/GI+Q92wxsEH' );
define( 'SECURE_AUTH_KEY',  'k+_zqm(t[:R|p;4ydQ::0`m;>zb4[w6orwNx0UfVKpafKq2P3<=Gv%_5gz:{OQqH' );
define( 'LOGGED_IN_KEY',    'xFK>Ov`I~AP8*@%svtHMm.xgd1^~;y&HuvSxyZ[0T{rCcNDJuhsaTK08y*Cnlvj{' );
define( 'NONCE_KEY',        'esK@78yI,O)/[ !BvU5kMw..$_0F1Z%++36ON-[t{(KTMiLD,>Pu:[WvLc0_j[Nb' );
define( 'AUTH_SALT',        '%xG}1hULC<`pgVr3RtgrtN0G(oblV^l*5KM(JW%nM6_:Dc[[ukGT[,`B,)}BWy9;' );
define( 'SECURE_AUTH_SALT', 'U6~oInr;!f%Jl=BI-^]TSa!N1qHcJKX>Qm`k#gSuvLmLwr(mep.`5YL}9dlIYR01' );
define( 'LOGGED_IN_SALT',   'f*bPaWIQ=}Tfxp*ta5m=;#sEhWv~@8]tDk-P3-vXjsCkwBr&3(,E|WC2v5YwiAb5' );
define( 'NONCE_SALT',       'baq*rJ#wi;?3;FpC^i*cC^IT/t}yi0(-00C)d+<vTiq474{]Hwx22<hP?oA$=>1=' );

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
