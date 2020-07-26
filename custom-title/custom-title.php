<?php
/* 
Plugin Name: Custom Title
Plugin URI: http://www.custom-title.fr
Description: Permet d'ajouter un titre personnalisé.
Version: 1.0
Require at least: 5.2
Requires PHP: 7.0
Author: Isa
Author URI: http://www.custom-title.fr/isa
License: GPL2
License URI: https://www-gnu.org/licenses/gpl-2.0.html/
Text Domain: my-basics-plugin
Domain Path: /languages
*/

if (!defined('ABSPATH')) { exit; //exit if accessed directly
}

add_filter('document_title_parts', 'add_custom_title');

function add_custom_title($title)
{
    $title['title'] = 'Custom Title - '.$title['title'];
    return $title;
}
