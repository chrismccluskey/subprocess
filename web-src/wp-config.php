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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')eZwaq@(DMK:;X7.a1)-h8F]nxy/etb0U9d<r?s~MXJ@0>ZUF~mTUWwz^BlZk&Y<');
define('SECURE_AUTH_KEY',  '-t&9}8/EbjT1TmoW8{T}O(k >!tiHv1,pY-mR{0yEFw#FkqAtD5.&5tGGngc)uoa');
define('LOGGED_IN_KEY',    'YY{.&Lny2XifC?&qqp&u@0wUxR1utv)%1Sry#y3NuXUW{%#>E=[Y4{yja:a#<_Vd');
define('NONCE_KEY',        '-]I(AF%5<ovwy,vR:=tKo&&Xo+33)pNCmn$yvNEW!rb7(mAS9LS+z:,F{i*{$vA?');
define('AUTH_SALT',        '~+&>Iq0CCo$nnWYo2T_Y8@e.%Z2PGr78O9I=nY^Y$z4nszmU,g1`hmwc3QPhWfi-');
define('SECURE_AUTH_SALT', 'q2 4,N{oIrrc^>R[@Iu?:Wkpc?[vQqg|qQ1h3<TmP:LR;GH-qVkr05a]gaf^#VMy');
define('LOGGED_IN_SALT',   'nTBzmDev,kv3FGYH4n`zsT*+XUGytEIe~-g^*KuThjkEG/tmA$#vq,DX2q L6lHy');
define('NONCE_SALT',       ',?9q(N4LlIR&%L1%W<(*{}_VjQ9gFqC_mw{vC7~G@cD@1DBTvS0OVmGemud]|OoY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
