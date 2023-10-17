<?php
/*Plugin Name: bS Simple Notice
Plugin URI: https://bootscore.me/
Description: Plugin adds a simple alert to bootScore theme and does nothing more. It is a testing plugin for auto-updates.  
Version: 1.2.0
Tested up to: 6.3.2
Requires at least: 5.0
Requires PHP: 7.4
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
GitHub Plugin URI: https://github.com/crftwrk/bs-simple-notice
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


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
  echo '<div class=""><p class="alert alert-info">bS Simple Notice has been updated to v1.2.0</p></div>';
}
add_action('bs_after_primary', 'my_function', 5);


