<?php 

/*-----------------------------------------------------------------------------------*/
/* Start Hyperion Theme Functions - Please do not edit this file.                    */
/*-----------------------------------------------------------------------------------*/

// Set path to theme specific functions
$functions_path = TEMPLATEPATH . '/functions/';
automatic_feed_links();

require_once ($functions_path . 'theme-options.php'); 		// Options panel
require_once ($functions_path . 'theme-comments.php'); 		// Custom comments
require_once ($functions_path . 'theme-shortcodes.php');    // Theme shortcodes
require_once ($functions_path . 'theme-widgets.php'); 		// Widgets
require_once ($functions_path . 'widget-func.php'); 		// Widget specific functions
require_once ($functions_path . 'sidebar-init.php'); 		// Register sidebars

register_nav_menu( 'primary', 'Primary Menu' );

?>