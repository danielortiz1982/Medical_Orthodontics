<?php get_header(); ?>

<main class="site-content">
	<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php post_class(); ?>">
			<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
		</div>
	<?php endwhile ?>
	<?php endif ?>
</main>

<?php get_footer(); ?>