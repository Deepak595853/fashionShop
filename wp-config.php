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
define( 'DB_NAME', 'Deally_Cropt' );

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
define( 'AUTH_KEY',         '7<+Sdm~bsY8V2L,JP.3Lr*vkD8647!W%4&DtZ}Z4>!dol<`lb#zLZ%*?w[@[Fx@W' );
define( 'SECURE_AUTH_KEY',  '^CaviO~~cFxK(-@u> X)r H)^EHmASfL`*o;+~E4Mhl;:FF)&)PExJ+:10.vb:Wh' );
define( 'LOGGED_IN_KEY',    '$_%it_F9R#$f;ltRv@g6d4[?V~CPoooJi?~=VjEO@&NK:I*k9+h{rw$nYdU,<v4Q' );
define( 'NONCE_KEY',        ')/w[]0C@1|[3|PkGP hm2Keat!krIU-3jA%MY7c =GFW]F2odO%Lo48ik9oSSoPp' );
define( 'AUTH_SALT',        'hX5 2HyTcw#U`?p%gXoz`T`Av3w4S|<YG!iL.h]Ql2mf3Gn<pg9p;1>^uvPgT(&r' );
define( 'SECURE_AUTH_SALT', 'cyXi`ix2$!IV`U 0o:X^EA<O|}g4,lN9MfdeI3VEFi[GXmEuHkYd<kM/MIq2v>w5' );
define( 'LOGGED_IN_SALT',   'y pJG^q1tblc94*gT)p;6wKa8Aj_!m1B@+G4<Vml/|FvsN>,o!tRyg$vJD^.;}B0' );
define( 'NONCE_SALT',       '8Js@t(!z[>[C)oH5Z8Zyms5j^P;-u9~Of& M2l &DEl$;_t<p&i~#~1 uZ#9=Auf' );

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
