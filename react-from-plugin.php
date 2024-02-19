<?php

/**
 * Plugin Name: React Form Plugin
 * Description: A WordPress plugin with a React form to capture and display user data.
 * Version: 1.0
 * Author: Your Name
 */

defined('ABSPATH') or die('Unauthorized access!');

function react_form_plugin_menu()
{
  add_menu_page('React Form Plugin', 'React Form', 'manage_options', 'react-form-plugin', 'react_form_plugin_page', 'dashicons-feedback', 6);
}

add_action('admin_menu', 'react_form_plugin_menu');

function react_form_plugin_page()
{
?>
<div id="react-form-plugin-root"></div>
<?php
}

// Enqueue scripts and styles
function enqueue_react_form_plugin_scripts()
{
  wp_enqueue_script('react-form-plugin-js', plugins_url('/build/index.js', __FILE__), array(), '1.0', true);
}

add_action('admin_enqueue_scripts', 'enqueue_react_form_plugin_scripts');