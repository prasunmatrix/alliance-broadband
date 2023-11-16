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
define( 'DB_NAME', 'test_db_alliancebroadband' );

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
define( 'AUTH_KEY',         '#GRsF>s%[El(V:EKUn,-e&bm[=V $/rH&#*h,CQqR:jn1MZ01 )G&+]j?/qK510|' );
define( 'SECURE_AUTH_KEY',  'RmP:ot{juHIrhhC6RQot)WjCvs.-=GP153Cl<s0O3n^<nBe(PmRJqY=l;Y=x@x&g' );
define( 'LOGGED_IN_KEY',    'KDov/K5,gW/kPS=}D(?@Vv-]<#O n[WG>i3E/hYTXZcsO>sP~9>/q/^B~}pD>.:]' );
define( 'NONCE_KEY',        '&,S0_D=MfAhvv!]e/.W|y2+7l}_~OGg,#M+xKsu`QuOmjTHqLR].Y6w?.]HpcZc(' );
define( 'AUTH_SALT',        'oDr/`v2 ?=e}m~P2uUrJB`t@PQJ:Id.J#}WvU2h5U)C{=^+0LYPpAhQX$`auO3s@' );
define( 'SECURE_AUTH_SALT', 'pKT}9LV8.FWBffXIoTgJHkt#o*QbF?/QkuEpY.Z3i%oohl:qZ Bp)69)DJ?A*(dw' );
define( 'LOGGED_IN_SALT',   '&$[DYqWOjDZxB{B~2dLN%pGDz|c7JoVLyD@%ON<v6b8A=ac64_Ot4z78jq63/B)b' );
define( 'NONCE_SALT',       '2]RNK<bbt*tJtJ.tVmbUJ&O^T-?_3QC<YU/y_{7:iOd!1UfNRQ*EpNPZ<ug}gDJ.' );

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
define( 'WP_DEBUG', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
