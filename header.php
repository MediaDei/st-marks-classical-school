<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="St. Mark's Classical Academy in Philadelphia, PA, providing children with a moral education joined with timeless truths.">
	<meta name="viewport" content="width=device-width">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="navTitle">
			<a href="/" class="seal" title="St. Mark's Classical Academy"><img src="<?php bloginfo('template_url'); ?>/images/_seal.png" alt="St. Mark's Academy Seal"></a>
			<h1><a href="/" class="title" title="St. Mark's Classical Academy">St. Mark's Classical Academy</a></h1>
			<div class="social">
				<a class="fa fa-facebook" href="https://www.facebook.com/pages/St-Marks-Church/259381804090029"></a>
				<a class="fa fa-rss" href="/rss/"></a>
				<a class="fa fa-envelope contact" href="#" onclick="return false;"></a>
			</div>	
		</div>


		<nav>
			<ul class="appleNav smallcaps">
				<li class="left"><a href="/">Home</a></li>
				<li class="left"><a href="/overview/">Overview</a></li>
				<li class="left"><a href="/classical/">Classical</a></li>
				<li class="left"><a href="/latest/">Latest</a></li>
				<li class="left"><a href="/faq/">FAQ</a></li>
				<li class="right"><a href="/apply/">Apply</a></li>
				<li class="right"><a href="/students/">Students</a></li>
			</ul>
		</nav>
	</header>

