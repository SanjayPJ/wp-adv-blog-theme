<?php

// setup

// includes

include( get_template_directory(). '/includes/front/enqueue.php');

// hooks

add_action( 'wp_enqueue_scripts', 'ju_enqueue' );

// shortcodes