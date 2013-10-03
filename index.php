<?php get_header(); ?> 

	<div class="wrapper">

		<div id="primary" class="content-area">

			<article id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php nuveze_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

			</article>

		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>
