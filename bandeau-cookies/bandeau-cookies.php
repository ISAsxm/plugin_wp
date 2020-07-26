<?php
/*
Plugin Name: Bandeau cookies
Plugin URI: http://www.bandeau-cookies.fr/isa
Description: Plugin permettant l'ajout d'un bandeau indiquant que le site utilise des cookies.
Version: 1.0
Require at least: 5.2
Requires PHP: 7.0
Author: Isa
Author URI: http://www.bandeau-cookies.fr/isa
License: GPL2
License URI: https://www-gnu.org/licenses/gpl-2.0.html/
Text Domain: my-basics-plugin
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit; //exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'get_scripts' );
function get_scripts()
{
   wp_enqueue_script( 'app', plugins_url('js/app.js',__FILE__ ), array( 'jquery' ), 1.0,  true );
   wp_enqueue_style( 'style', plugins_url('css/style.css',__FILE__ ));
}

add_action( 'wp_enqueue_scripts', 'cookies_floating_bar' );

function cookies_floating_bar()
{
   echo '<div id="cookies-bar" class="cookies-floating-bar">Nous utilisons des cookies afin d\'améliorer votre navigation sur le site.<button id="cookies-btn" class="cookies-floating-btn">Ok</button></div>';
}