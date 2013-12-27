<?php
/* 
Plugin Name: Tomtom
Plugin URI:  
Description: Petits hacks de Tomtom.
Version: 0.1
*/ 

function tomtom_install()
{
}

add_action('activate_tomtom/tomtom.php', 'tomtom_install');

function add_ratings($content) 
{
	if(function_exists('the_ratings') && !$_GET['page_id'])
	  $content .= the_ratings('div', 0, false);
	return $content;
}

add_action('the_content', 'add_ratings');

function include_tomtom_files()
{
print '<link rel="stylesheet" type="text/css" href="'.get_option('siteurl').'/wp-content/plugins/tomtom/css/style.css" />';
}

add_action('wp_head', 'include_tomtom_files');
add_action('login_form', 'include_tomtom_files');

?>