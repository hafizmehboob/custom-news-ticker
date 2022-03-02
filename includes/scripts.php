<?php 
 
 function addScriptsStyles(){
    wp_enqueue_style('style',plugin_dir_url( __FILE__ ).'css/ticker.css');
    wp_enqueue_script('jquery-ticker',plugin_dir_url( __FILE__ ).'js/jquery.ticker.min.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-ticker-js',plugin_dir_url( __FILE__ ).'js/customNewsTicker.js', array(), '1.0.0', true);
 }
 add_action('wp_enqueue_scripts','addScriptsStyles');

?>