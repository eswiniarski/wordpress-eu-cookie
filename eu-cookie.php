<?php
/**
 * Plugin Name: EU Cookie
 * Description: EU cookie info plugin
 * Version: 1.0
 * Author: Emil Świniarski
 */

 define(EU_COOKIE_DIR_PATH, plugin_dir_path(__FILE__));
 define(EU_COOKIE_DIR_URL, plugin_dir_url( __FILE__ ));

 function registerSettingsFields() {

 }

 function loadSettings() {

 }

 function getExcludedSites() {

 }

 if (false === is_admin()) {
    add_action('wp_enqueue_scripts', 'registerAssets', 100);
    add_action('wp_footer', 'loadMessageHtml', 100);
 }

 function registerAssets() {
    wp_register_style('eu-cookie', EU_COOKIE_DIR_URL . 'css/eu-cookie.css');
    wp_enqueue_style('eu-cookie');

    wp_register_script('eu-cookie', EU_COOKIE_DIR_URL . 'js/eu-cookie.js');
    wp_enqueue_script('eu-cookie');
 }

function loadMessageHtml() {
    ob_start();
    include(EU_COOKIE_DIR_PATH . 'template/default.php');
    $content = ob_get_contents();
    ob_end_clean();

    echo $content;
}
