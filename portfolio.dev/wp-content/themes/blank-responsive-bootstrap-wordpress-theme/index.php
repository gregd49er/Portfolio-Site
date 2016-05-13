<?php get_header(); ?>



	<div class="row">

		<div class="col-md-3">

		<img src="http://portfolio.dev/wp-content/uploads/2016/05/articles.png" alt="articles" class="img-responsive">

		</div>

		<div class="col-md-9">
		
			<main role="main">
			<!-- section -->
			<section>
			<div class="row">

			<?php
			$args = array( 'post_type' => 'article', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args );
			?>

			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="col-sm-4">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('small'); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>

			<!-- /post thumbnail -->

			<!-- post title -->
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post excerpt -->
			<h3>
			<?php the_excerpt(); ?></a>
			</h3>
			<!-- post excerpt -->

			<!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<!-- /post details -->
			


			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

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

			</div>

			</section>
			<!-- /section -->
			</main>

		</div>
		
	</div>




<div class="row">
	<div class="homegallery">
	<div class="col-md-9">
			<main role="main">
			<!-- section -->
			<section>
			
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  			<!-- Indicators -->
  			<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
   			<li data-target="#myCarousel" data-slide-to="2"></li>
    		<li data-target="#myCarousel" data-slide-to="3"></li>
  			</ol>

  			<!-- Wrapper for slides -->
  			<div class="carousel-inner" role="listbox">
    			<div class="item active">
      			<img src="http://portfolio.dev/wp-content/uploads/2016/05/Pg.1-04.25.16.jpg" alt="ICE Deportation">
    			</div>

    			<div class="item">
      			<img src="http://portfolio.dev/wp-content/uploads/2016/05/Pg.1-03.08.16.jpg" alt="Music Special Issue">
    			</div>

    			<div class="item">
      			<img src="http://portfolio.dev/wp-content/uploads/2016/05/Pg.1-04.11.16.jpg" alt="No Strike">
    			</div>

    			<div class="item">
      			<img src="http://portfolio.dev/wp-content/uploads/2016/05/Pg.1-03.16.16.jpg" alt="Student Protests">
    			</div>
  			</div>

  			<!-- Left and right controls -->
  			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  			</a>
			</div>

			</section>
			<!-- /section -->
			</main>
		</div>


		<div class="col-md-3">

		<img src="http://portfolio.dev/wp-content/uploads/2016/05/frontpage.png" alt="front pages" class="img-responsive">

		</div>
	</div>	
	</div>
</div>	

	


<?php get_footer(); ?>
