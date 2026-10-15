<?php
/**
 * The base configuration for WordPress
 *
 * This file reads environment variables dynamically to secure infrastructure credentials.
 */

// 1. Database Configuration
define( 'DB_HOST',     getenv('WORDPRESS_DB_HOST') ?: '127.0.0.1' );
define( 'DB_NAME',     getenv('WORDPRESS_DB_NAME') ?: 'woocommerce_dev' );
define( 'DB_USER',     getenv('WORDPRESS_DB_USER') ?: 'root' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: '' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// 2. Authentication Unique Keys and Salts
// These are read from environment variables or fallback to secure defaults
define( 'AUTH_KEY',        getenv('AUTH_KEY')        ?: 'put-your-unique-phrase-here-1' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'put-your-unique-phrase-here-2' );
define( 'LOGGED_IN_KEY',   getenv('LOGGED_IN_KEY')   ?: 'put-your-unique-phrase-here-3' );
define( 'NONCE_KEY',       getenv('NONCE_KEY')       ?: 'put-your-unique-phrase-here-4' );
define( 'AUTH_SALT',       getenv('AUTH_SALT')       ?: 'put-your-unique-phrase-here-5' );
define( 'SECURE_AUTH_SALT',getenv('SECURE_AUTH_SALT')?: 'put-your-unique-phrase-here-6' );
define( 'LOGGED_IN_SALT',  getenv('LOGGED_IN_SALT')  ?: 'put-your-unique-phrase-here-7' );
define( 'NONCE_SALT',      getenv('NONCE_SALT')      ?: 'put-your-unique-phrase-here-8' );

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

