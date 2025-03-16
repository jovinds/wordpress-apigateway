<?php

function sample_site_files(  ) {
    wp_enqueue_style('sample_site_styles', get_stylesheet_uri() );
}

add_action("wp_enqueue","sample_site_files");
