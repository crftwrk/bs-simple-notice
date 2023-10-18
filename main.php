<?php
/*Plugin Name: bS Simple Notice
Plugin URI: https://bootscore.me/
Description: Plugin adds a simple alert to bootScore theme and does nothing more. It is a testing plugin for auto-updates.  
Version: 1.5.0
Tested up to: 6.3.2
Requires at least: 5.0
Requires PHP: 7.4
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;



/**
 * Require the GitHub_Plugin_Updater class.
 *
 * Each of your plugins will require GitHub_Plugin_Updater to be loaded under a different namespace.
 * Ideally use an autoloader, but for the sake of functionality we are using require_once here.
 */
require_once plugin_dir_path( __FILE__ ) . 'class-github-plugin-updater.php';
use MyPlugin\GitHub_Plugin_Updater;
( new GitHub_Plugin_Updater( plugin_basename( __FILE__ ), '1.5.0', 'https://api.github.com/repos/crftwrk/bs-simple-notice' ) )->init();


/*
 * Update checker
 */
/*
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/crftwrk/bs-simple-notice/',
	__FILE__,
	'bs-simple-notice'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');
*/



// Hook bs_after_primary content
function my_function() {
  echo '<div class=""><p class="alert alert-info">bS Simple Notice has been updated to v1.5.0</p></div>';
}
add_action('bs_after_primary', 'my_function', 5);


