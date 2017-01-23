<?php

add_action('after_setup_theme', 'Medical_Orthodontics_Setup');
function Medical_Orthodontics_Setup(){
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		));

	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		));

	add_theme_support('custom-background', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		));

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'bv_menu' ),
		'footer' => esc_html__( 'Footer', 'bv_menu' ),
		));
}
// end of Medical_Orthodontics_Setup

add_action('widgets_init', 'Medical_Orthodontics_Widgets_Init');
function Medical_Orthodontics_Widgets_Init(){

	register_sidebar( array(
		'name'          => esc_html__( 'Medical Orthodontics Widget', 'Medical Orthodontics Widget' ),
		'id'            => 'Medical-Orthodontics-Widget',
		'description'   => esc_html__( 'Medical Orthodontics Widget', 'Medical Orthodontics Widget' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		));
}
//end of Medical_Orthodontics_Widgets_Init

add_action('wp_enqueue_scripts', 'Medical_Orthodontics_Scripts');
function Medical_Orthodontics_Scripts(){

	wp_enqueue_style( 'Medical-Orthodontics-reset-css', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'Medical-Orthodontics-font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'Medical-Orthodontics-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'Medical-Orthodontics-style', get_stylesheet_uri() );
	wp_enqueue_script('Medical-Orthodontics-jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('Medical-Orthodontics-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('Medical-Orthodontics-angularjs', get_template_directory_uri() . '/js/angular.min.js');
	wp_enqueue_script('Medical-Orthodontics-mainjs', get_template_directory_uri() . '/js/main.js');
}
// end of Medical_Orthodontics_Scripts

function admin_style() {

wp_enqueue_style( 'Medical-Orthodontics-bootstrap-admin', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

require('inc/custom_post_type.php');
require('inc/custom_taxonomies.php');
require('inc/doctor_meta_boxes.php');
require('inc/before_after_meta_box.php');
require('inc/video_meta_boxes.php');
require('inc/testimonial_meta_boxes.php');
// end of inlcudes


