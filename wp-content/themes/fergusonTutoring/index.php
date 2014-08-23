<?php get_header(); ?>
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
	<div id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="home-feature-img" alt="Mathematics" src="<?php echo get_template_directory_uri(); ?>/assets/img/maths.jpg">
					<h3>MATHEMATICS</h3>
					<ul>
						<li>Algebra</li>
						<li>Geometry</li>
						<li>Trigonometry</li>
						<li>Precalculus</li>
						<li>AP Calculus</li>
						<li>AP Statistics</li>
					</ul>
				</div>
				<div class="col-md-4">
					<img class="home-feature-img" alt="Science and English" src="<?php echo get_template_directory_uri(); ?>/assets/img/microscope.jpg">
					<h3>SCIENCE &#149; ENGLISH</h3>
					<ul>
						<li>AP Biology</li>
						<li>AP Chemistry</li>
						<li>AP Physics</li>
						<li>AP English Language</li>
						<li>AP English Literature</li>
					</ul>
				</div>
				<div class="col-md-4">
					<img class="home-feature-img" alt="Test Preperation" src="<?php echo get_template_directory_uri(); ?>/assets/img/college.jpg">
					<h3>TEST PREP</h3>
					<ul>
						<li>ACT</li>
						<li>SAT</li>
						<li>Advanced Placement (AP)</li>
						<li>International Baccalaureate (IB)</li>
						<li>GRE</li>
						<li>GMAT</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" id="testimonials-bar">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <?php query_posts( array( 'post_status' => 'publish' , 'post_type' => 'testimonial' ) ); 
				while ( have_posts() ) : the_post();
				?>
	                                   <div class="item">
	                                   <?php echo the_title(); ?>
	                                   "<?php echo the_content(); ?>"
	                                   </div>
	            <?php endwhile; ?>
	            <?php wp_reset_query(); ?>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>