<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ginokvrh_wp667' );

/** Database username */
define( 'DB_USER', 'ginokvrh_wp667' );

/** Database password */
define( 'DB_PASSWORD', '27DEp2([DI@7[S!V' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '77jnszmgnlzej4n9egurzvstvt4dm8dvpmvpy5jzf2p6aoqcqezlbh8wfxrcwnt8' );
define( 'SECURE_AUTH_KEY',  'lgaoib8cp399zdvcmdrjravtzghxdgdzv6iwi63ker5i8o8j9jchrj4vf6ahxsin' );
define( 'LOGGED_IN_KEY',    'xlwjlna8hlhaqvhrnn2jjuukzdhe2agm0v6qxy13ffqure0xth91niqbd2fymc18' );
define( 'NONCE_KEY',        'jj1mehp8cxomxpcbf03yt4asonmxmjh00xtxfnyhwehcy8nwwfaagukynkhyan2y' );
define( 'AUTH_SALT',        'xeewgtxybexcea9c77uodjmdcodukpcerh3t7turu6muxqcb2pagzhqwcozcwtq3' );
define( 'SECURE_AUTH_SALT', 'colrvli2da0rishcazu23kaq7gvub8aqx0xkdqddt9loyge2tosdq1ng6lixidtj' );
define( 'LOGGED_IN_SALT',   'ttedy577ekszlsbzdcgutrqaxnr2ychdkb1bfqe9exrwrkvcluo9sb9ls7e9lcrd' );
define( 'NONCE_SALT',       'a54hginp37zvdlpdp0tf8bmdypldceoxfhdgxljwc0wevj0enrmlt9lgo83f0alu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsf_';

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
