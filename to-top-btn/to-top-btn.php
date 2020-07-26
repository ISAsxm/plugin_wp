<?php
/*
Plugin Name: To top btn
Plugin URI: http://www.plugintotopbtn.fr/isa
Description: Scroll to top button plugin, require FontAwesome to display icon
Version: 1.0
Require at least: 5.2
Requires PHP: 7.0
Author: Isa
Author URI: http://www.plugintotopbtn.fr/isa
License: GPL2
License URI: https://www-gnu.org/licenses/gpl-2.0.html/
Text Domain: my-basics-plugin
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit; //exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'get_script' );
function get_script()
{
   wp_enqueue_script( 'app', plugins_url('js/app.js',__FILE__ ), array( 'jquery' ), 1.0,  true );
   wp_enqueue_style( 'style', plugins_url('css/style.css',__FILE__ ));
}
 
add_action('wp_footer', 'go_top');
 
function go_top()
{
   echo '<i id="to-top-btn"></i>';
}
