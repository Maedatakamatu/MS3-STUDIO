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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e21XavnIvrH6zgaCOaeITY5ICpoSy55VLd9Zukh5ocFbglaq6899DpiI2MWX2cNoG84VyowcLySZ8gBu1e8I+A==');
define('SECURE_AUTH_KEY',  'SXZ4raa07MWxOrsvipRUmmN1bFXG+op2SXUyELVK11+IRKVCOgR175xtsKEAwMLg/VDLtSIgiJ0FczF1RGTsvw==');
define('LOGGED_IN_KEY',    'BzDlkdhzoX0XNTZ4RoxPXJ+7ph6T2U3SIzXkyrquJ4VWs7WcionhK99XFef8Dd0F0gLjobsrXfFd+VP6F1OdKw==');
define('NONCE_KEY',        'NIaw6JAr1CoUzuVAfWw+ikmtYyNmbkaC9OV0PFqcCpmWmn2XQ646+cpiXawI20MlHuEslQ+tvmyQe/+xji/LUw==');
define('AUTH_SALT',        'iIdk/Vc4CenwUakgENFUrVxrQwpOzK9C3slvYcEJDxzUNl4mlVGyS9TljrgqOiK4H75JTJeDGoTmNUAAPeba2w==');
define('SECURE_AUTH_SALT', 'lH/oyl0jEYDGsJLfy48OV4Mm4ecv5Vr/w0rZYojR2jwBQcNsi/DF8BjnRDxBn/XDSQ1fg1As6STH2kEKQzI5Cw==');
define('LOGGED_IN_SALT',   'JUqV9k2W9XBmnqTV+L7lsPPodM+BvjLJtakSwmIIdJ2w33LdkTEIBSIGrjld/9H0IrJCJlsC3zScigWF/DsM9A==');
define('NONCE_SALT',       'vW0CNWmDI4iWQwKbfL5j0gqsZ1jKYkF+AV4TTS++0iOrnINxPyc0uS6Mvi1smr+14i7nS/EGkjJ5tb0lk9LvYg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
