<?php

function stylesheets()
{


            wp_register_style('stylesheet', get_template_directory_uri() . '/css/all.css', array(), false, 'all');
            wp_enqueue_style('stylesheet');


}