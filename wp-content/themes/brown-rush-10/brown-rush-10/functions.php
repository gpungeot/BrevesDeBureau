<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="ltop_left"><div class="ltop_right"></div></div>
			<div class="lmid_left"><div class="lmid_right"><div class="widget %2$s">',
        'after_widget' => '</div></div></div>
			<div class="lbot_left"><div class="lbot_right"></div></div>',
        'before_title' => '
			<h2>',
        'after_title' => '</h2>',
    ));
?>