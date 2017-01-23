<?php /* Template Name: Sidebar Template */ ?>
<?php get_header(); ?>
<main class="site-content">
  <div class="contentBox">
  	<div class="row">
  		<div class="col-md-7">
	  		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
			    <div class="<?php post_class(); ?>">
			      <h1 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			      <div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			      <div class="the-content"><?php the_content(); ?></div>
			  	</div>
			  <?php endwhile ?>
			<?php endif ?>
	  	</div>
	  	<div class="col-md-5"><div class="right"><div class="side-bar"><?php dynamic_sidebar('Medical-Orthodontics-Widget'); ?></div></div></div>
  	</div>
  </div>
</main>
<!--end of site-content-->
<?php get_footer(); ?>