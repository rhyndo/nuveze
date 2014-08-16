<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 
				'PT+Sans:400,700,400italic,700italic:cyrillic-ext,latin,latin-ext,cyrillic',
				'PT+Sans+Narrow:400,700:cyrillic-ext,latin,latin-ext,cyrillic',
				'PT+Sans+Caption:400,700:cyrillic-ext,latin,latin-ext,cyrillic',
				'PT+Serif:400,700,400italic,700italic:cyrillic-ext,latin,latin-ext,cyrillic',
				'PT+Serif+Caption:400,400italic:cyrillic-ext,latin,latin-ext,cyrillic',
				'PT+Mono::cyrillic-ext,latin,latin-ext,cyrillic'
				//'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800:cyrillic-ext,latin,latin-ext,cyrillic',
				//'Open+Sans+Condensed:300,300italic,700:cyrillic-ext,latin,latin-ext,cyrillic'
			] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<?php do_action( 'before' ); ?>

		<header id="masthead" class="site-header" role="banner">

			<div class="wrapper">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav>
			</div>

		</header>

		<div id="content" class="site-content">
