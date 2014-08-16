<?php
// Template Name: Homepage
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

		<div id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php edit_post_link( __( 'Edit', 'nuveze' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

				</article>

			<?php endwhile; // end of the loop. ?>

		</div>

	</div>
	<div id="secondary" class="widget-area" role="complementary">
		
		<?php $meta = get_post_meta(get_the_ID()); ?>
		<?php echo wpautop($meta["sidebar_content"][0]); ?>

	</div>

<?php get_footer(); ?>
