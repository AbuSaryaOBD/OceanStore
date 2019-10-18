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
define( 'DB_NAME', 'oceanstore' );

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
define( 'AUTH_KEY',         '(9LJ@[XML@j!DowuplsI,Ym$uI51bwe![$<Rl<*zro[ IM:K&8,is8z9#Y^pM2sp' );
define( 'SECURE_AUTH_KEY',  '[QYm|;S7{E&-yLVou}QC-,+W}wq+NVpDekE#5,BVU6||G)BhR}J;WoMqtUb0!:vO' );
define( 'LOGGED_IN_KEY',    'gbhQ~O)[as6*/r7S%=y1r=},T#MiAO;&/ )vkIma$5!u7HHW(Le%9U64ky&7h.c[' );
define( 'NONCE_KEY',        'n9 9wGMyP8s[|E3H3FY0XWzEL-BK_x%M@<AO1wIE(*H}.l5J%q2IWD_sdFw/wnJl' );
define( 'AUTH_SALT',        'Y@bxP~I0;$-Xdu/rg1lVe3{3:*[J2gACE@(1<4c1e?%Wq{8qQ;lo!Zic>1<#x0^K' );
define( 'SECURE_AUTH_SALT', 'gg.Mafe;u`8.eJMcBxjBt-j%dFThB=0bn7NM:E.JM]H)4Gu2i56~v3%_!r,lzZ1E' );
define( 'LOGGED_IN_SALT',   '?~L~WM+fFHHCy=&Yzc[=wSW~lGKY(IXp%1^bB&X}7_TrxOsP7NFSAp@G_b|~[Lk|' );
define( 'NONCE_SALT',       'dL?h 63,p_0Z(<f8cxOyT){B1bDhpn:Tb!L2azTf O+,0e/~,2l:o&K;[:v<2^,s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ocwp_';

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
