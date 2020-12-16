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
define( 'DB_NAME', 'cinerey' );

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
define( 'AUTH_KEY',         'M@)jm:iqeHvxnPyx-@s-& =hdf&j2[E|?{=cJNOEyrY?a*tH2krl;Nq|,o^8lK!:' );
define( 'SECURE_AUTH_KEY',  'Z?C_eOd|]/4;>q-&FeLFF8h3L<Iew#a0=V#-483H{585,=xpo~95TvbQYfKvrp!^' );
define( 'LOGGED_IN_KEY',    'ImtC+|9Qfk&^*[Bp8;]&D?uZOC>QY6}RrKcvbHzx!Olt{7f34EpO#6fuq?y9PQYS' );
define( 'NONCE_KEY',        'y,-0d7!LIzc,7~Qkj03_$sW,cm>AL0vZR{^-w<obFf;6yM,C^dMNOH;MM)TcH|0V' );
define( 'AUTH_SALT',        'TA/N?-x%#&pM[b&on0Q~46Cb/$pNj,5+`VsPo1UJ~jWr(nSwOvqD+K/;WXV0},Gs' );
define( 'SECURE_AUTH_SALT', 'WgO-TU9:vjQj|_d-+@_AF -OK/1^XC63O tWEVf?sJ8<yY@x6#Rp}g)kL&SXrx&^' );
define( 'LOGGED_IN_SALT',   'HqA7dIx>0Vtv^p>g>3(!faM-XyeTp?6y*~, qkb(LfIU1Mng2I8(+J*AZfb;/_) ' );
define( 'NONCE_SALT',       '`+^/&%R?0V!>~8fC[w)Pg@I{.I9<}]Qclc{(,0.E~^k5!FyPI[}12&3iWhdWhf !' );

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
