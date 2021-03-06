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
		<div class="row" id="main-content">
			<div class="col-md-8" id="main">
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>

						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

							<div class="entry">
								<?php the_content('Read the rest of this entry &raquo;'); ?>
							</div>

							<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
						</div>

					<?php endwhile; ?>

					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>

				<?php else : ?>

					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>