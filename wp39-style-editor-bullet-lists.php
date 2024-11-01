<?php
/*
Plugin Name: WP 3.9 Style Visual Editor Bulleted List
Description: Restores the Bulleted List and Numbered Lists in the Visual editor to the way Wordpress 3.9 was
Version: 1.0
Author: WPLobtar
Author URI: https://profiles.wordpress.org/wplobtar
*/
if (is_admin())
{
	add_filter('tiny_mce_plugins','disableTinyMCENewListStyle',999,1); 
}
function disableTinyMCENewListStyle($plugins)
{
	$listKey = array_search('lists',$plugins);
	if ($listKey !== false) 
	{
		unset($plugins[$listKey]);
	}
	return $plugins;
}

?>