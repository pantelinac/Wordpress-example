<?php

function colage_post_types(){
    //Campus Post Type
    register_post_type('campus',array(
        'supports'=> array('title','editor','excerpt'),
        'rewrite'=> array('slug'=>'campuses'),
        'has_archive'=> true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Campus',
            'add_new_item'=>'Add New Campus',
            'edit_item'=>'Edit Campus',
            'all_items'=>'All Campuses',
            'singular_name'=>'Campus'
        ),
        'menu_icon'=> 'dashicons-location-alt'
    ));

    //Event Post Type
    register_post_type('event',array(
        'supports'=> array('title','editor','excerpt'),
        'rewrite'=> array('slug'=>'events'),
        'has_archive'=> true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Events',
            'add_new_item'=>'Add New Event',
            'edit_item'=>'Edit Event',
            'all_items'=>'All Events',
            'singular_name'=>'Event'
            ),
        'menu_icon'=> 'dashicons-calendar-alt'
    ));

    //Program Post Type
    register_post_type('program',array(
        'supports'=> array('title'),
        'rewrite'=> array('slug'=>'programs'),
        'has_archive'=> true,
        'public'=> true,
        'labels' => array(
            'name'=> 'Programs',
            'add_new_item'=>'Add New Program',
            'edit_item'=>'Edit Program',
            'all_items'=>'All Programs',
            'singular_name'=>'Program'
        ),
        'menu_icon'=> 'dashicons-awards'
    ));

    //Professor Post Type
    register_post_type('professor',array(
        'show_in_rest' => true,
        'supports'=> array('title','editor', 'thumbnail'),
        'public'=> true,
        'labels' => array(
            'name'=> 'Professor',
            'add_new_item'=>'Add New Professor',
            'edit_item'=>'Edit Professor',
            'all_items'=>'All Professor',
            'singular_name'=>'Professor'
        ),
        'menu_icon'=> 'dashicons-welcome-learn-more'
    ));

    }

add_action('init', 'colage_post_types');