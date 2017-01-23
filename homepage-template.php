<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>
<?php $args = array('post_type' => 'home_slider', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC'); $the_query = new WP_Query( $args ); ?>
<main class="site-content" id="home">
  <div class="contentBox">
	<div class="row">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		      <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">
		        <img src="<?php echo  the_post_thumbnail(); ?>">
		        <div class="carousel-caption"><h2><?php the_content(); ?></h2></div>
		      </div>
		      <?php endwhile; endif; ?>
		    </div>
		  </div><!-- End Carousel -->
		</div>
		<hr />
		<div class="row homepage-content">
			<div class="col-md-7">
				<div class="row">
					<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
				    <div class="<?php post_class(); ?>">
				      <h2 class="the-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				      <div class="the-content"><?php the_content(); ?></div>
				    </div>
					  	<?php endwhile ?>
						<?php endif ?>
					</div>
				</div>

				<div class="col-md-5">
					<div class="right"><div class="side-bar"><?php dynamic_sidebar('Medical-Orthodontics-Widget'); ?></div></div>
				</div>

			</div>
  </div>
</main>
<!--end of site-content-->
<?php get_footer(); ?>