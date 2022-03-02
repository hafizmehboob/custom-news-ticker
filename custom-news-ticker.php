<?php 
/*
* Plugin Name: Custom News Ticker
* Plugin URI: http://glowing-tips.com/
* Description: This is Custom News Ticker Plugin
* Author: Hafiz Abubakar
*/
include('includes/scripts.php');


function getNewsTicker(){

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,    
    );
    $query = new WP_Query($args);

    ?>
    <div id="wrap">
   <ul id="ticker1" class="demo">
    <?php   while ( $query->have_posts() ){ 
        $query->the_post(); 
    ?>
    <li><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></li>
    <?php } ?>
   </ul>
    </div>
    <?php
}
add_shortcode('show_news_ticker','getNewsTicker');

?>