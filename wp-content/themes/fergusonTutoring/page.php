<?php
/*
Template Name: Page
*/

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-2" id="header-text">
				<h1>FERGUSON TUTORING</h1>
				<h2>Educating the Twin Cities Area</h2>
			</div>
			<div class="col-md-5">
				<!-- PHP for news headlines -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" id="main-content">
			<div class="col-md-8" id="main">
				<?php the_content(); ?>
			</div>
			<div class="col-md-4" id="sidebar">
				<?php the_field('sidebar'); ?>
			</div>
		</div>
	</div>
		<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>