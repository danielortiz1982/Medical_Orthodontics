<?php get_header(); ?>
<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
<section class="bv-row">
	<div class="main-content">
			<div class="feature-img">
				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
			</div>
		<div class="bv-container">
			<h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="bv-row">
				<div class="bv-9">
					<div class="the-content"><?php the_content(); ?></div>
				</div>

				<div class="bv-3">
					<div class="side-bar">
						<?php dynamic_sidebar( 'bv-widget' ); ?>
					</div>
				</div>
			</div>
			<?php endwhile ?>
			<?php endif ?>
		</div>
	</div>

</section>
<?php get_footer(); ?>