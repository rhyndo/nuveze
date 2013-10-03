<?php get_header(); ?>
	<div class="wrapper">
		<section id="primary" class="content-area">

			<article id="main" class="site-main" role="main">

			<?php query_posts($query_string."&order=ASC"); ?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">Lessons</h1>
				</header>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h4 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

							<?php if ( 'post' == get_post_type() ) : ?>
								<div class="entry-meta">
									<?php nuveze_posted_on(); ?>
								</div>
							<?php endif; ?>
						</header>

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>

			<?php endif; ?>

			</article>

		</section>

		<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>
