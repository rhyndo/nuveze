<?php get_header(); ?>

	<div class="wrapper">
		<div id="primary" class="content-area">

			<article id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php /* if ( comments_open() || '0' != get_comments_number() ) comments_template(); // If comments are open or we have at least one comment, load up the comment template */ ?>

				<?php endwhile; ?>

			</article>

		</div>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
