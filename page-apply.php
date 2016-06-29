
<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/apply__banner.jpg" class="main-banner" alt="Apply Page banner"/>
</section>

<section class="apply">
	<h2 class="section-title ap-apply">Apply</h2>
	<!--
	<div class="box f-aid">
		<h4>Financial Aid</h4>
		<div class="grid-1-2">
			<a href="https://www.ismfast.com/FastPage.php?id=7b9b409122dc8eb27ba98aa7b894224c">
				<img src="<?php bloginfo('template_url'); ?>/images/FAST-icon.png" alt="FAST Icon">
			</a>
		</div>
		<div class="text grid-1-2">
			<h5>By applying to FAST, you may be able to:</h5>
			<ul>
				<li>Send your child to Saint Mark's Classical Academy at a reduced cost</li>
				<li>Save money that could later be spent on sending your child to study at a College University</li>
				<li>Make additional academic costs less oppressive, such as textbooks and uniforms</li>
			</ul>			
		</div>
		<a class="button" href="https://www.ismfast.com/FastPage.php?id=7b9b409122dc8eb27ba98aa7b894224c">
			<div class="centered-button" role="button">FAST Application</div>
		</a>
	</div>
-->

	<h3>The Benefits of a Classical Education</h3>
	<ul class="top-list mdash">
		<li>A quality education for your child that far surpasses that of government schools</li>
		<li>Advantage over other students in standardize testing</li>
		<li>Development of your child's character alongside his/her mind</li>
		<li>Acquire professional communication skills that will last a life time</li>
		<li>Wisdom of our forefathers through reading the Great Books</li>
		<li>The ability to read primary sources in their original language (Greek, Hebrew, Latin)</li>
		<li>Critical decision making skills grounded in Aristotelian Virtue Ethics</li>
	</ul>
	<div class="link-wrapper grid">
		<a class="smallcaps grid-1-2" href="/faq/">frequently asked questions</a>
		<a class="smallcaps grid-1-2" href="https://www.ismfast.com/FastPage.php?id=7b9b409122dc8eb27ba98aa7b894224c">financial aid application</a>
	</div>
	<div class="box grid">
		<h4>Application for Admission</h4>
		<a href="https://www.ismfast.com/FastPage.php?id=7b9b409122dc8eb27ba98aa7b894224c">
			<div class="ribbon">
				<p>FAST Financial Aid Available</p>
			</div>
		</a>
		<div class="wrapper grid">
			<div class="img">
				<img src="<?php bloginfo('template_url'); ?>/images/application.jpg" alt="Student">
			</div>
			<div class="text">
				<h5>Submission Instructions:</h5>
				<ul>
					<li>Download and print the application by clicking the button below</li>
					<li>Include the following in a business standard envelope: (1) a completed application and (2) a check written out to Saint Mark's Classical Academy for a $50.00 application fee</li>
					<li>Address and mail envelope to:<br><br>
						<span class="italic">Saint Mark's Classical Academy<br>
						1162 Beverly Road<br>
						Rydal, PA 19046</span>
					</li>
				</ul>
			</div>
		</div>
		<?php
		$args = array( 'posts_per_page' => 1,'category' => 'application');
		$lastposts = get_documents( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>
		<a class="button"href="<?php the_permalink(); ?>">
			<div class="centered-button" role="button">Download Application</div>
		</a>
		<?php endforeach;
		wp_reset_postdata(); ?>
	</div>
</section>



<?php get_footer(); ?>
