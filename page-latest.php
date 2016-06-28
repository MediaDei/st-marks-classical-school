<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/latest__banner.jpg" class="main-banner" alt="Latest Page banner"/>
</section>


<section class="latest">
	<div class="title">
		<div class="italic top">St. Mark’s</div>
		<div class="bridge">LATEST</div>
		<div class="petal-leaf"></div>
	</div>

	<div class="container clearfix">
		<div class="grid-fixed">
			<?php include 'extra_toc.php'; ?>
		</div>


		<div class="grid">
		<?php 
			// The Query
			$the_query = new WP_Query('posts_per_page=20');

			// The Loop
			while ( $the_query->have_posts() ) : $the_query->the_post();
				echo '<div class="post">
					<div class="circle-date">
						<div class="smallcaps">' . get_the_time('M') . '</div>
						<div>' . get_the_time('j') . '</div>
					</div>

					<div class="post-title italic"><a href="' . get_permalink() . '#post">
						' . get_the_title() . '
					</a></div>

					<div class="post-date"><time datetime="' . get_the_time('Y-m-d') . '">Posted on ' . get_the_time('F j, Y') . '
					</time></div>

					<div class="post-blurb">' . get_the_excerpt() . '
						<a href="' . get_permalink() . '">more →</a>
					 </div>
				</div>';
			endwhile;
		?>
		</div>
	</div>
</section>




<?php get_footer(); ?>