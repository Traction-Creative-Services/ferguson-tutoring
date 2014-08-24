<?php

get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-2" id="header-text">
				<h1>FERGUSON TUTORING</h1>
				<h2>Educating the Twin Cities Area</h2>
			</div>
		</div>
	</div>
	<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="row" id="main-content">
			<div class="col-md-8" id="main">
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<hr />
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
	</div>
<?php get_footer(); ?>