<?php
/**
 * @package Bitnami_Production_Console_Banner
 * @version 1.0
 */
/*
Plugin Name: Bitnami Production Console Helper
Plugin URI: https://github.com/bitnami-labs/wp-cloud-mgmt-console-plugin
Description: This plugin adds a link in the WordPress Admin Interface to the Bitnami Production Console
Author: Bitnami
Version: 1.0
Author URI: https://bitnami.com/
*/

// This echoes the message, we'll place it later
function bitnami_console() {
	echo "<p id='bitnami-production'>Go to the <a href='https://bitnami.com'>Bitnami Production Console</a> for Advanced Operations</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'bitnami_console' );

// We need some CSS to position the paragraph
function bitnami_console_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#bitnami-production {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'bitnami_console_css' );

?>
