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
define( 'DB_NAME', 'curioustimes' );

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
define( 'AUTH_KEY',         'BC6$9t+oI.M:&c`Ik8iC^c;YLe@]5j AGRT]cKVy2j@F:V^pLVj 3I9~d<@{UY.a' );
define( 'SECURE_AUTH_KEY',  '9J~ygvq#:@LvB*$Xp>@7k$u9;V3_;s*>x)~uB,6y7V=[`rO 3V5i$%U9@E?FN`hB' );
define( 'LOGGED_IN_KEY',    '.v.L6df~-HRn47E9aANiErZP!HA~,&~0.4v%%.?X%98Cj/3?B=3!hxTLBgjPEC@v' );
define( 'NONCE_KEY',        '/Xmg*uCEFkv;~h)O#S^yrr<|{r([SMbqu}V/Gv.j3*GzvEz(Uw`@UnGJ07OxU!-+' );
define( 'AUTH_SALT',        'ci@dh?zq%]:dHSNWgGJOfrp7%kZCjFyn*GUacKQ5^PI|^{;[FPJ4OyG^m-INyA8i' );
define( 'SECURE_AUTH_SALT', '=mx9qm&::^w$wu^it(A):}4?WLrHW-Iu+?rC~8`<,*{&G]>nYI:`2:4Rg+yI5o0Y' );
define( 'LOGGED_IN_SALT',   '%LpE![AM h3F/lO&d@}5iI4j9}G_y0vAaLRjy 9+(h&rIgVm``][4k^G%[8&ZZ<W' );
define( 'NONCE_SALT',       'y0e-cLXV>;QUtlG9XTBj?lc*]=P}.L%UsmUm F*9qYm4z12Va+-]e/;7ba}_d--8' );

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
