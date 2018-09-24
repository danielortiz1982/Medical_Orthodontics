<?php get_header(); ?>
<section class="bv-row">
	<div class="bv-container">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="feature-img">
			<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
		</div>
		<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<div class="the-content"><?php the_content(); ?></div>
		<?php endwhile ?>
		<?php endif ?>
	</div>
</section>
<?php get_footer(); ?>