<?php
/* Template Name: WP Sample API */
header( 'Content-type: application/json' );
  $args = array(
    'post_type'      => 'sample',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC'
  );
  $query = new WP_Query( $args );
  $post_json = array();
  while( $query->have_posts() ) : $query->the_post();
    $post_json[] = array(
      'ID'               => get_the_ID(),
      'title'            => get_the_title(),
      'theContent'       => get_the_content(),
      'author'           => get_the_author(),
      'thumbnail'        => get_the_post_thumbnail_url(),
      'slug'             => get_the_permalink(),
      'sample_input'     => get_post_meta($post->ID, 'sample_input', true),
      'sample_select'    => get_post_meta($post->ID, 'sample_select', true),
      'sample_radio'     => get_post_meta($post->ID, 'sample_radio', true),
      'sample_textarea'  => get_post_meta($post->ID, 'sample_textarea', true),
    );
  endwhile;
  wp_reset_query();
  echo json_encode( $post_json );