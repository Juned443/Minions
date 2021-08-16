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
define( 'DB_NAME', 'minions_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1#Ju@4A$' );

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
define( 'AUTH_KEY',         '8g5d&];eNT(~V&l.  zS?~ |$B=i)/FyuT3Sizc7tjQUPN.Ln>;qIqCTb%B>I6wn' );
define( 'SECURE_AUTH_KEY',  '*-<-*+nL^K|9.x)^kycHkgM *mZj`_JK5C8EM7<,CDdC]f)M!%-2Z977?P`D0QG5' );
define( 'LOGGED_IN_KEY',    '21GrKi(d-?U7/$UKi[cNJ+}mq?&MBtOO$Q!;CRWA>,Z+2#{Dmj`T/YU>%$URdh/l' );
define( 'NONCE_KEY',        'SGCdqn9u.F2C?=rsVA<cA$_lSivL=p:r:h:G^GNuN0jH?6@4V&2^8rJ_=S~@06q4' );
define( 'AUTH_SALT',        'LO:f*mF_th4K4y4orQJUjAS!Wu&uj*Fi*]3k:XWV|4.x`4K0*Q~<WX.y6uVJnkGC' );
define( 'SECURE_AUTH_SALT', 'NcR.r#p8wQ)%qFAOk:{4~@`Q+u]~dCe*-Hcb@(DtLUPZ|?xm=V||>Ta./Q3PGj}O' );
define( 'LOGGED_IN_SALT',   '|x=aw?%MrzHl^X4,|+4d*<9J3`Gh,Il?<)Nm_R4)q5=UhFO:,0t5sVvq4_(8@N?>' );
define( 'NONCE_SALT',       '+|(iuXhcFdNNou:*wAe$XJ+J7u?P+HgJj@wCohIFR Sg{^X)|(DDHu9z5$s[-i5}' );

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
