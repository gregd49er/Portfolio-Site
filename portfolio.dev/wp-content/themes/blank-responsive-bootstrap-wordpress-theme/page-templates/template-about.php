<?php /* Template Name: About Page Template */ get_header(); ?>

<div class="container">
	
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
			<span class="date"><p>Last updated on<?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?><p></span>


			
			<h3>
			<?php the_content(); // Dynamic Content ?>
			</h3>
	<div class="noteic">
		<div class="row">

			<div class="col-md-4">
			<h1>Editor-in-chief</h1>
			<h3>Daily 49er<br>The Hornet</h3>
			</div>

			<div class="col-md-6">
			<p>Managed a staff of around 50 people and a news organization that produced a daily newspaper, weekly news show, daily morning radio, online news site and social media. My focus was on expanding the multimedia production. At The Hornet, I was promoted to editor-in-chief within two months of joining the staff and won an award for Print General Excellence at the 2014 JACC awards.</p>
			</div>

			<div class="col-md-2">
			<img src="http://portfolio.dev/wp-content/uploads/2016/05/frontpage-1.png" alt="editor in chief" class="img-responsive">
			</div>
		</div>
	</div>

		<br>
		<br>
		<br>
	<div class="eic">
		<div class="row">

			<div class="col-md-2">
			<img src="http://portfolio.dev/wp-content/uploads/2016/05/laptop-1.png" alt="designer" class="img-responsive">
			</div>

			<div class="col-md-4">
			<h1>Print and Web Design</h1>
			<h3>Daily 49er<br>The Hornet</h3>
			</div>

			<div class="col-md-6">
			<p>Oversaw design at The Hornet before joining the Daily 49er as the assistant design editor. I was quickly promoted to print managing editor where I was responsible for the content and design elements in the daily newspaper. Along with other designers, I won honorable mention in best newspaper design at the 2015 California College Media Association Awards. At Cal State Long Beach, I am minoring in web design, where I have learned coding using HTML, CSS, Javascript, JQuery amd Bootstrap. I also led redesigns for the websites ofboth The Hornet and the Daily 49er.</p>
			</div>
			
		</div>
	</div>

		<br>
		<br>
		<br>

		<div class="row">

			<div class="col-md-4">
			<h1>Videographer</h1>
			<h3>Daily 49er<br>Kids Artistic Revue<br>The Hornet</h3>
			</div>

			<div class="col-md-6">
			<p>Studied film at the SF School of Digital Filmmaking where I made four short films. Worked as a grip/electric for three years before joining Kids Artistic Revue as a videographer. At the Daily 49er, worked as the multimedia managing editor and oversaw the production and editing of a weekly news show.</p>
			</div>

			<div class="col-md-2">
			<img src="http://portfolio.dev/wp-content/uploads/2016/05/video-camera.png" alt="video" class="img-responsive">
			</div>
			
		</div>

		<br>
		<br>
		<br>
	<div class="eic">
		<div class="row">

			<div class="col-md-2">
			<img src="http://portfolio.dev/wp-content/uploads/2016/05/photo-camera.png" alt="photo camera" class="img-responsive">
			</div>

			<div class="col-md-4">
			<h1>Photography</h1>
			<h3>Daily 49er<br>South Coast Photographic<br>The Hornet</h3>
			</div>

			<div class="col-md-6">
			<p>Studied photography at Fullerton College before working at South Coast Photographic. Worked with teams taking portriats at schools throughout Orange County. At the Daily 49er, I was often responsible for producing photos for stories that I covered.</p>
			</div>
			
		</div>
	</div>
		<br>
		<br>
		<br>
	<div class="noteic">
		<div class="row">
			<div class="col-md-4">
			<h1>Reporter</h1>
			<h3>O.C.Register<br>Daily 49er<br>The Hornet<br>Irvine World News</h3>
			</div>

			<div class="col-md-6">
			<p>Studied writing and reporting at Fullerton College and Cal State Long Beach. Wrote articles in news, entertainment, sports, opinions and features. In addition to writing articles, I was often responsible for taking photos, shooting video, posting on social media and/or recording audio for radio.</p>
			</div>

			<div class="col-md-2">
			<img src="http://portfolio.dev/wp-content/uploads/2016/05/pen.png" alt="video" class="img-responsive">
			</div>
			
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



<?php get_footer(); ?>
