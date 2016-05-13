<?php get_header(); ?>

<div class="container">
	
<div class="col-md-12">
	<div class="jumbotron">
  <h1>Blank Responsive Bootstrap Wordpress Theme 2.4!</h1>
  <p>Welcome to the latest BRBWT 2.4, created by Tommy Leyland at <a href="http://freelance.tstwebdesign.co.uk">Freelance Web Designer Manchester</a>. Take a look around the core files and feel free to contact me for a chat via the comments found here: <a href="http://freelance.tstwebdesign.co.uk/blank-responsive-bootstrap-wordpress-theme-free/">http://freelance.tstwebdesign.co.uk/blank-responsive-bootstrap-wordpress-theme-free/</a></p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>
	
<div class="col-md-8">

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

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

<div class="col-md-4">
	
<?php get_sidebar(); ?>
	
</div>

</div>

<?php get_footer(); ?>
