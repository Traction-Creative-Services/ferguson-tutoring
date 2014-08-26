<div  id="testimonials-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
		  <!-- Wrapper for slides -->
		  <div id="owl-example" class="owl-carousel">
		    <?php query_posts( array( 'post_status' => 'publish' , 'post_type' => 'testimonial' ) ); 
			while ( have_posts() ) : the_post();
			?>
               <div>
               <h3><?php echo the_title(); ?></h3>
               <div class="quoter">"</div>
               	<?php echo the_content(); ?>
               <div class="quoter right">"</div>
               </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
		  </div>
		  </div>
		</div>
	</div>
</div>
</body>
</html>