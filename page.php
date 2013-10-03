<?php get_header(); ?>

	<div id="primary" class="content-area">

		<article id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ( comments_open() || '0' != get_comments_number() ) comments_template(); // If comments are open or we have at least one comment, load up the comment template ?>

			<?php endwhile; // end of the loop. ?>

		</article>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
