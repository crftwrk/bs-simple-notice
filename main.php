<?php
/*Plugin Name: bS Simple Notice
Plugin URI: https://bootscore.me/
Description: Plugin adds a simple alert to bootScore theme and does nothing more. It is a testing plugin for auto-updates.  
Version: 1.0.0
Tested up to: 6.3.2
Requires at least: 5.0
Requires PHP: 7.4
Author: bootScore
Author URI: https://bootscore.me
License: MIT License
*/


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


// Hook bs_after_primary content
function my_function() {
  echo '<div class=""><p class="alert alert-info">bS Simple Notice v1.0.0</p></div>';
}
add_action('bs_after_primary', 'my_function', 5);
