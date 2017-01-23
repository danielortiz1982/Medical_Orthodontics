<?php  /* Template Name: Video Tamplate */ ?>
<?php $args = array('post_type' => 'video', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
<?php get_header(); ?>
<main class="site-content">
  <div class="contentBox">    
    <div class="row">
      <div class="col-md-7">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="<?php echo get_the_ID(); ?>">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div class="row">
            <div class="col-md-3"><div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div></div>
            <div class="col-md-9"><div class="post-content"><?php the_content(); ?></div></div>
          </div>
        </div>
        <hr />
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="col-md-5"><div class="right"><div class="side-bar"><?php dynamic_sidebar('Medical-Orthodontics-Widget'); ?></div></div></div>
    </div>
  </div>
</main>
<!--end of site-content-->
<?php get_footer(); ?>