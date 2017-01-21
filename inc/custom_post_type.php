<?php

add_action('init', 'Homepage_Slider');
function Homepage_Slider(){

    register_post_type( 'home_slider',
            array(
                'labels' => array(
                    'name' => 'Home Slideshow',
                    'singular_name' => 'Home Slideshow',
                    'add_new' => 'Add New Slides',
                    'add_new_item' => 'Add New Slide',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Slideshow',
                    'new_item' => 'New Slideshow',
                    'view' => 'View Slideshow',
                    'view_item' => 'View Slideshow',
                    'search_items' => 'Search Homepage Slides',
                    'not_found' => 'No Slideshow found',
                    'not_found_in_trash' => 'No Home Slideshow found in Trash',    
                ),
                'public' => true,
                'menu_position' => 5,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-images-alt2',
                'has_archive' => true
            )
        );

}
// end of Homepage_Slider


add_action('init', 'Patient_Testimonials');
function Patient_Testimonials(){

    register_post_type( 'patient_testimonials',
            array(
                'labels' => array(
                    'name' => 'Testimonials',
                    'singular_name' => 'Testimonial',
                    'add_new' => 'Add New Testimonial',
                    'add_new_item' => 'Add New Testimonial',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Testimonial',
                    'new_item' => 'New Testimonial',
                    'view' => 'View Testimonial',
                    'view_item' => 'View Testimonial',
                    'search_items' => 'Search Testimonial',
                    'not_found' => 'No Testimonial found',
                    'not_found_in_trash' => 'No Testimonial found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-groups',
                'has_archive' => true
            )
        );

}
// end of Patient_Testimonials

add_action('init', 'Before_and_After');
function Before_and_After(){

    register_post_type( 'before_and_after',
            array(
                'labels' => array(
                    'name' => 'Before & After',
                    'singular_name' => 'Before & After',
                    'add_new' => 'New Before & After',
                    'add_new_item' => 'Add New Before & After',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Before & After',
                    'new_item' => 'New Before & After',
                    'view' => 'View Before & After',
                    'view_item' => 'View Before & After',
                    'search_items' => 'Search Before & After',
                    'not_found' => 'No Before & After found',
                    'not_found_in_trash' => 'No Before & After found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-camera',
                'has_archive' => true
            )
        );

}
// end of Before_and_After

add_action('init', 'Doctors');
function Doctors(){

    register_post_type( 'doctors',
            array(
                'labels' => array(
                    'name' => 'Doctors',
                    'singular_name' => 'Doctor',
                    'add_new' => 'Add New Doctor',
                    'add_new_item' => 'Add New Doctor',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Doctor',
                    'new_item' => 'New Doctor',
                    'view' => 'View Doctor',
                    'view_item' => 'View Doctor',
                    'search_items' => 'Search Doctors',
                    'not_found' => 'No Doctors found',
                    'not_found_in_trash' => 'No Doctors found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( 'member' ),
                'menu_icon' => 'dashicons-businessman',
                'has_archive' => true
            )
        );

}
// end of Doctors

add_action('init', 'Video');
function Video(){

    register_post_type( 'video',
            array(
                'labels' => array(
                    'name' => 'Videos',
                    'singular_name' => 'Video',
                    'add_new' => 'Add New Video',
                    'add_new_item' => 'Add New Video',
                    'edit' => 'Edit',
                    'edit_item' => 'Edit Video',
                    'new_item' => 'New Video',
                    'view' => 'View Video',
                    'view_item' => 'View Video',
                    'search_items' => 'Search Video',
                    'not_found' => 'No Video found',
                    'not_found_in_trash' => 'No Video found in Trash',    
                ),
                'public' => true,
                'menu_position' => 15,
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array( '' ),
                'menu_icon' => 'dashicons-format-video',
                'has_archive' => true
            )
        );

}
// end of Video
