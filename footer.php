		</div><!-- #content -->

		<?php if(is_front_page()) { ?>
			<div id="registration">
				<?php $meta = get_post_meta(get_the_ID()); ?>
				<?php echo wpautop(do_shortcode($meta["registration"][0])); ?>
			</div>
		<?php } ?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="wrapper">
				<div class="site-info">
					<?php do_action( 'nuveze_credits' ); ?>
					<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'nuveze' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'nuveze' ), 'Nuveze', '<a href="http://dankov.name" rel="designer">Konstantin Dankov</a>' ); ?>
				</div>
			</div>

		</footer>

	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
