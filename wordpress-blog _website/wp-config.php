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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
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
define( 'AUTH_KEY',         'U^v6M!6y_6SA{>+tQt:%+##{k,W6vml=9eR2^<$/.:yY+=nc<,}d)/EBI {mWY|0' );
define( 'SECURE_AUTH_KEY',  'dvRTB-*EZJ~fq)}0e6ZkZ&6>.jz.w59=Ot#iS;)0qLxD@_9#_wD?NNqlG}1MfO<`' );
define( 'LOGGED_IN_KEY',    ']XY)|M4b1?&YJW98<C`fRk`5=dh.8Qp2NC&gPO.Ek.^dNY{m$^yJaokEyE<:,CRf' );
define( 'NONCE_KEY',        'rC4R:~1T]J2c7U4pzA%F/&cL,`x=`tR )PC|e29coG2bESL$ #j{/cH:-bRZ%l6R' );
define( 'AUTH_SALT',        'F<WcGR$Bp-PmkqG&1:?mrmSV~}#po9#xPrsZcP*F2S`H{9GU4@<%s9!aQ&d>p--i' );
define( 'SECURE_AUTH_SALT', 'ZFXX9%E:mTDk|Pi!r-N.v8BjT.f+Z7`HMi`x967048YGpFo.)aFnWT7>< n#vRr;' );
define( 'LOGGED_IN_SALT',   'gXP{{/}aW*5v4kmS9D9*G$fXpJ/Hux8>#Yyu(|9k4S#YTY,Bo,+nUS.bMpJ$9.9`' );
define( 'NONCE_SALT',       'Q?g.JF_aEq+olo3kfZEbrL/JYY8UkMdBzlv/^6c>sEQ;#Pcm!)8,{NNwzB)d7GDJ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
