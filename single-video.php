<?php get_header(); ?>

<main class="site-content" id="video">
	<div class="contentBox">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php post_class(); ?>">
			<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
			<div><?php echo get_post_meta($post->ID, 'video_meta_input', true) ?></div>
			<div class="cases-content"><?php echo get_the_term_list( $post->ID, 'cases', '<ul class="cases"><li>', '</li><li>', '</li></ul>' ); ?></div>
			<div class="video-category-content"><?php echo get_the_term_list( $post->ID, 'video_categories', '<ul class="video-categories"><li>', '</li><li>', '</li></ul>' ); ?></div>
		</div>
			<?php endwhile ?>
		<?php endif ?>
	</div>
</main>
<?php get_footer(); ?>