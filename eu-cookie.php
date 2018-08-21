<?php
/**
 * Plugin Name: EU Cookie
 * Description: EU cookie info plugin
 * Version: 1.0
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
}

function eu_cookie_register_assets() {
    wp_register_style('eu-cookie', $GLOBALS['eu_cookie_dir_url'] . 'css/eu-cookie.css');
    wp_enqueue_style('eu-cookie');

    wp_register_script('eu-cookie', $GLOBALS['eu_cookie_dir_url'] . 'js/eu-cookie.js');
    wp_enqueue_script('eu-cookie');
}

function eu_cookie_load_message_html() {
    ob_start();
    include($GLOBALS['eu_cookie_dir_path'] . 'template/default.php');
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

function eu_cookie_page() {
    echo 'EU Cookie settings';
}
