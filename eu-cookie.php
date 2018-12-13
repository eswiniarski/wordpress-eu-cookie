<?php
/**
 * Plugin Name: EU Cookie
 * Description: EU cookie info plugin
 * Version: 1.1
 * Author: Emil Świniarski
 */

if (false === defined('ABSPATH')) {
    exit;
};

$eu_cookie_dir_url = plugin_dir_url(__FILE__);
$eu_cookie_dir_path = plugin_dir_path(__FILE__);

if (false === is_admin()) {
    add_action('wp_enqueue_scripts', 'eu_cookie_register_assets', 100);
    add_action('wp_footer', 'eu_cookie_load_message_html', 100);
} else {
    add_action('admin_menu', 'eu_cookie_menu');
    add_filter('plugin_action_links_'. plugin_basename(__FILE__), 'eu_cookie_settings_link');

    add_action('admin_init', function() {
        register_setting('eu-cookie-settings', 'eu_cookie_bg_color');
        register_setting('eu-cookie-settings', 'eu_cookie_message');
    });
}

function eu_cookie_register_assets() {
    wp_register_style('eu-cookie', $GLOBALS['eu_cookie_dir_url'] . 'css/eu-cookie.css');
    wp_enqueue_style('eu-cookie');

    wp_register_script('eu-cookie', $GLOBALS['eu_cookie_dir_url'] . 'js/eu-cookie.js', [], false, true);
    wp_enqueue_script('eu-cookie');
}

function eu_cookie_load_message_html() {
    ob_start();
    include($GLOBALS['eu_cookie_dir_path'] . 'templates/message-box.php');
    $content = ob_get_contents();
    ob_end_clean();

    echo $content;
}

function eu_cookie_menu() {
	add_options_page(
		'EU Cookie',
		'EU Cookie',
		'manage_options',
		'eu-cookie.php',
		'eu_cookie_page'
	);
}

function eu_cookie_settings_link($links) {
    $settings_link = '<a href="options-general.php?page=eu-cookie.php">Settings</a>';

    array_push($links, $settings_link);
    return $links;
}

function eu_cookie_page() {
    require_once $GLOBALS['eu_cookie_dir_path'] . 'templates/admin.php';
}
