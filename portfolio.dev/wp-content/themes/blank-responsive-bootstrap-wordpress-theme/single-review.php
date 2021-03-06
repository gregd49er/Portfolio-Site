<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->


			

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post excerpt -->
			<h3>
				<?php the_excerpt(); ?>
			</h3>
			<!-- /post excerpt -->

<div class="articlepage">
			<div class="col-md-3">
			<div class="moviesidebar">
			<h3><?php the_field('review_title'); ?></h3><br>
			<h4>Director: <?php the_field('review_director'); ?><br><br>
				Starring: <?php the_field('review_starring'); ?><br><br>
				Released on: <?php the_field('review_released'); ?>
			</h4>
			</div>
			</div>

			<div class="col-md-9">
			<?php the_content(); // Dynamic Content ?>

		<?php 

		// get raw date
		$date = get_field('date_published', false, false);


		// make date object
		$date = new DateTime($date);

		?>

			<p>This article was originally published on <?php echo $date->format('M d, Y'); ?> .</p>

			<p>See the orignal post of this article <a href="<?php the_field('link_published'); ?>">here</a></p>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

			</div>

			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>


		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

</div>



<div class="footersection">
<?php get_footer(); ?>
</div>