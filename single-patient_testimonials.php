<?php get_header(); ?>

<main class="site-content" id="patient-testimonials">
	<div class="contentBox">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php post_class(); ?>">
			<h1 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
			<div><?php echo get_post_meta($post->ID, 'patient_quote_input', true) ?></div>
			<div><?php echo get_post_meta($post->ID, 'patient_name_input', true) ?></div>
			<div><?php echo get_post_meta($post->ID, 'testimonal_state_select', true) ?></div>
			<h2>patient's orthodontic and dental issues:</h2>
			<div class="cases-content"><?php echo get_the_term_list( $post->ID, 'cases', '<ul class="cases"><li>', '</li><li>', '</li></ul>' ); ?></div>
		</div>
			<?php endwhile ?>
		<?php endif ?>
	</div>
</main>
<?php get_footer(); ?>