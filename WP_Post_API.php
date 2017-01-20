<?php
header( 'Content-type: application/json' );
 
/*
  Template Name: WP Post API
*/
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1, // all
    'orderby' => 'title',
    'order' => 'ASC'
  );
   
  $query = new WP_Query( $args );
   
  $post_json = array();
   
  while( $query->have_posts() ) : $query->the_post();
   
    // Add a post_json entry
    $post_json[] = array(
      'ID' => get_the_ID(),
      'title' => get_the_title(),
      'theContent' => get_the_content(),
      'author' => get_the_author(),
      'thumbnail' => get_the_post_thumbnail_url(),
      'slug' => get_the_permalink()
    );
   
  endwhile;
   
  wp_reset_query();
  echo json_encode( $post_json );