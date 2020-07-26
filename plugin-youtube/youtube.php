<?php
/* 
Plugin Name: Plugin Youtube
Plugin URI: http://www.plugin-youtube.fr
Description: Permet l'ajout d'une vidéo youtube grâce à un short-code.
Version: 1.0
Require at least: 5.2
Requires PHP: 7.0
Author: Isa
Author URI: http://www.plugin-youtube.fr/isa
License: GPL2
License URI: https://www-gnu.org/licenses/gpl-2.0.html/
Text Domain: my-basics-plugin
Domain Path: /languages
*/

if (!defined('ABSPATH')) {
    exit; //exit if accessed directly
}

// ajoute sur le hook init la gestion de notre shortcode [video]
add_action('init','youtube_init_shortcode');

// ajoute le shortcode dans la liste des shortcodes à surveiller.
function youtube_init_shortcode()
{
    add_shortcode('video', 'youtube_do_shortcode');
}

// fonction qui va transformer le shortcode video en balise html
// function youtube_do_shortcode($attrs)
// {
//     $output = '';
//     if(!isset($attrs['source']) or empty($attrs['source'])) {
//         return $output;
//     }
//     $url = sprintf('https://www.youtube-nocookie.com/embed/%s?rel=0&amp;controls=0',$attrs['source']);
//     $output .= sprintf('<iframe width="100%%" height="315" src="%s" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>',$url);
//     return $output;
// }

// puis rentrer notre shortcode [video source=TizxLEYhhQM] dans les pages wp (la source est récupérée sur youtube : les caractères après le v= à la fin de l'url de youtube)



// 2ème version avec hauteur largeur control et daylimotion
// fonction qui va transformer le shortcode video en balise html avec choix multiple
function youtube_do_shortcode($attrs)
{
    $output = '';
    $player = '';
    if ( (!isset($attrs['source']) or empty($attrs['source'])) ) {
        return $output;
    }
    if (!isset($attrs['width'])) {
        $attrs['width'] = 100;
    }
    if (!isset($attrs['height'])) {
        $attrs['height'] = 315;
    }
    if (!isset($attrs['controls'])) {
        $attrs['controls'] = 0;
    }
    if (!isset($attrs['player']) ) {
        $player = "youtube";
    }
    else {
        $player = $attrs['player'];
    }
    if ($player == "youtube" ) {
        $url = 'https://www.youtube-nocookie.com/embed/'.$attrs['source'].'?rel=0&amp;controls='.$attrs['controls'];
    }
    else if ($player == "dailymotion" ) {
        $url = 'https://www.dailymotion.com/embed/video/'.$attrs['source'];
    }
    else {
        return $player;
    }
    // $url = sprintf('https://www.youtube-nocookie.com/embed/%s?rel=0&amp;controls='.$attrs['controls'].'',$attrs['source']);
    $output .= sprintf('<iframe width="'.$attrs['width'].'%%" height="'.$attrs['height'].'" src="%s" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>',$url);
    return $output;

}

// puis rentrer notre shortcode [video source=TizxLEYhhQM], [video source=TizxLEYhhQM width=30 height=150 controls=1] ou [video source=x5hne32 width=30 height=150 player=dailymotion] dans code court dans les pages wp (la source on la récupère sur youtube les caractères après le v= à la fin de l'url de youtube ou dailymotion après le video/)