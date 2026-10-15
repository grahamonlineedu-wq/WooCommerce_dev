<?php
/**
 * The base configuration for WordPress
 *
 * This file reads environment variables dynamically to secure infrastructure credentials.
 */

// 1. Database Configuration
define( 'DB_HOST',     getenv('WORDPRESS_DB_HOST') ?: '127.0.0.1' );
define( 'DB_NAME',     getenv('WORDPRESS_DB_NAME') ?: 'wooCommerce_dev' );
define( 'DB_USER',     getenv('WORDPRESS_DB_USER') ?: 'root' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: '' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// 2. Authentication Unique Keys and Salts
// These are read from environment variables or fallback to secure defaults
define( 'AUTH_KEY',        getenv('AUTH_KEY')        ?: '279ca416dd8eb8c42c48c8800e5eb8b01f81c353e5a8b1d9d685d7a5bc23083c' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'bb63e3901d15c662f2f87c67dfac1eed7e65e4d9a1a89050b3790ac8f58bfff1' );
define( 'LOGGED_IN_KEY',   getenv('LOGGED_IN_KEY')   ?: '5d4b57bd5ee55dc503d394a9ab19528f1da08b06e63fb26ccd0ff1c0339b36f5' );
define( 'NONCE_KEY',       getenv('NONCE_KEY')       ?: '415446c21b21266d977a88d1651ece23513fe4e4f606d1cb439ae1845ffac981' );
define( 'AUTH_SALT',       getenv('AUTH_SALT')       ?: 'b6868d464e56fc7a3f43fa27fb396756d031f85c82285d64cdb9fb384af3869a' );
define( 'SECURE_AUTH_SALT',getenv('SECURE_AUTH_SALT')?: '2fede22e065731dd5978d20f524d0a42cf2728ea12a79037a2ebc367d69977e3' );
define( 'LOGGED_IN_SALT',  getenv('LOGGED_IN_SALT')  ?: '296fd3904e11dbb7aa0773a649c9271862d66eefcd6442b5fec60ebdc3ef37ce' );
define( 'NONCE_SALT',      getenv('NONCE_SALT')      ?: 'fdc346ed127a880985eb9c089bafd47ab1ae049b8dbca6050c0aa1b2541ac44d' );

// 3. Database Table Prefix
$table_prefix = 'wp_';

// 4. Performance Tuning & Scaling
define( 'WP_MEMORY_LIMIT', getenv('WP_MEMORY_LIMIT') ?: '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );

// 5. Dynamic Routing Variables
if ( getenv('WP_HOME') ) {
    define( 'WP_HOME', getenv('WP_HOME') );
}
if ( getenv('WP_SITEURL') ) {
    define( 'WP_SITEURL', getenv('WP_SITEURL') );
}

// 6. Security and Debug Toggles
define( 'WP_ENV', getenv('WP_ENV') ?: 'development' );

if ( WP_ENV === 'development' ) {
    define( 'WP_DEBUG',         true );
    define( 'WP_DEBUG_LOG',     true );
    define( 'WP_DEBUG_DISPLAY', true );
    @ini_set( 'display_errors', 1 );
} else {
    define( 'WP_DEBUG',         false );
    define( 'WP_DEBUG_LOG',     false );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', 0 );
}

// 7. Absolute path to the WordPress directory and inclued files
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';

