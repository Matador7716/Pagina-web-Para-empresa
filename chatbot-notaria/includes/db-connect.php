<?php
if (!defined('ABSPATH')) exit;

/**
 * Get the database connection.
 * We use the global $wpdb object for WordPress compatibility.
 */
function get_notaria_db_connection() {
    global $wpdb;
    return $wpdb;
}

/**
 * Helper function to get a config value from our custom table.
 */
function get_notaria_config($key) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'notaria_config';
    return $wpdb->get_var($wpdb->prepare("SELECT setting_value FROM $table_name WHERE setting_key = %s", $key));
}

/**
 * Helper function to set a config value.
 */
function set_notaria_config($key, $value) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'notaria_config';
    $wpdb->replace($table_name, array(
        'setting_key' => $key,
        'setting_value' => $value
    ));
}
