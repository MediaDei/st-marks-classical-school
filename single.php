<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/latest__banner.jpg" class="main-banner" alt="Latest Page banner"/>
</section>


<section class="latest-post">

	<div class="title">
		<div class="italic top">St. Mark’s</div>
		<div class="bridge">LATEST</div>
		<div class="petal-leaf"></div>
	</div>

	<div id="top" class="container clearfix">

		<div class="grid-fixed-right">
			<?php include 'extra_toc.php'; ?>
		</div>


		<?php 
		while ( have_posts() ) : the_post();

			echo '<div class="grid-fixed-left">
				<div class="circle-date">
					<div class="smallcaps">' . get_the_time('M') . '</div>
					<div>' . get_the_time('j') . '</div>
				</div>
			</div>

			<div class="grid-fluid">
				<article id="post">
					<h2 class="post-title italic">' . get_the_title() . '</h2>
					<time class="post-date" datetime="' . get_the_time('Y-m-d') . '">Posted on ' . get_the_time('F j, Y') . '</time>

					' . get_the_content('') . '
				</article>
			</div>';

		endwhile; ?>

	</div>
</section>





<?php get_footer(); ?>
