<?php get_header(); ?>

<main class="site-content" id="doctors">
	<div class="contentBox">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		<div class="<?php post_class(); ?>">
			<h1 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="post-thumbnail"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a></div>
			<div class="the-content"><?php the_content(); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_full_name_input', true) ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_addr_input', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_city_input', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_state_select', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_zip_input', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_phone_input', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_email_input', true); ?></div>
			<div><?php echo get_post_meta($post->ID, 'doc_map_input', true); ?></div>
			<h1>PAYMENT AND INSURANCE</h1>
			<h2>Payments Accepted:</h2>
			<div class="payment-content"><?php echo get_the_term_list( $post->ID, 'payment', '<ul class="payments"><li>', '</li><li>', '</li></ul>' ); ?></div>
			<h2>Insurance Accepted:</h2>
			<div class="insurance-content"><?php echo get_the_term_list( $post->ID, 'insurance', '<ul class="insurances"><li>', '</li><li>', '</li></ul>' ); ?></div>
			<h2>Associations:</h2>
			<div class="association-content"><?php echo get_the_term_list( $post->ID, 'associations', '<ul class="associations"><li>', '</li><li>', '</li></ul>' ); ?></div>
			<h2>Specialties:</h2>
			<div class="specialties-content"><?php echo get_the_term_list( $post->ID, 'specialties', '<ul class="specialties"><li>', '</li><li>', '</li></ul>' ); ?></div>
		</div>
			<?php endwhile ?>
		<?php endif ?>
	</div>
</main>

<?php get_footer(); ?>