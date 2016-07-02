
<?php get_header(); ?>

<section class="section-banner no-pad">
	<img src="<?php bloginfo('template_url'); ?>/images/students__banner.jpg" class="main-banner" alt="Students Page banner"/>
</section>


<section class="students">
	





	<h2 class="section-title st-students">Students</h2>
	<section class="newsletters grid">

		<div class="item-wrap left">
			<h4>Latest Newsletter</h4>
			<?php
			$args = array( 'posts_per_page' => 1,'category' => 'newsletter');
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
				
				<div class="wrapper grid">
					<div class="grid-1">
						<a href="<?php the_permalink(); ?>">
							<div class="button btn-1" role="button">
								<div class="text">
									<span><?php the_title(); ?></span>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach; 
			wp_reset_postdata(); ?>
			

			<h4 class="subtitle">Older Issues</h4>
			
			<?php
			$args = array( 'posts_per_page' => 4, 'offset' => 1, 'category' => 'newsletter');
			$lastposts = get_documents( $args ); ?>
			<ul>
			<?php foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			</ul>
		</div>
		
		<div class="item-wrap">
			<?php
			$args = array( 'posts_per_page' => 1,'category' => 'handbook');
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<h4 class="lower">Student Handbooks</h4>

			<a href="<?php the_permalink(); ?>">
				<div class="handbook hb-1 button">
					<div class="text">
						<span>Kindergarten</span><br>
					</div>
				</div>
			</a>
			<?php endforeach; 
			wp_reset_postdata(); ?>

			<?php
			$args = array( 'posts_per_page' => 1,'category' => 'handbook', 'offset' => 1);
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="handbook hb-2 button">
					<div class="text">
						<span>1st-4th Grade</span>
					</div>
				</div>
			</a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
		</div>
	</section>
	
	<section class="uniforms">
		<h3>School Uniforms</h3>
		<p><span class="simple-dropcaps">O</span>ur students are required to wear the approved uniforms, which may be viewed
and ordered online from Land's End, or purchased at Land's End stores</p>

		<ul class="top-list font-awesome"><span class="smallcaps">school uniforms:</span>
			<li>Create an unified ethos and school spirit</li>
			<li>Reinforce the idea that school is a place set apart for something extremely<br> important: <em>the pursuit of truth & learning</em></li>
			<li>Help Students to see and be seen by their peers for who they are as a person and not for what sort of clothing they wear</li>
			<li>Eliminate silly, materialistic competition among students</li>
			<li>Make life easier for parents, teachers, and students by removing the need for a dress code</li>
		</ul>

		<h4>Student Uniforms in the Life of St. Mark's</h4>
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'student-page-slider', 'slug' ); } ?>

		<p class="bottom">To view or purchase St. Mark's uniforms, please click here:</p>
		<a class="lands-end" href="http://www.landsend.com/pp/SchoolSearch.html?action=landing&selectedSchoolNum=900159682"><img src="<?php bloginfo('template_url'); ?>/images/lands-end.jpg" alt="Land's End Logo"></a>
		<?php
			$args = array( 'posts_per_page' => 1,'category' => 'uniforms');
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<a class="button" href="<?php the_permalink(); ?>"><div class="centered-button">Uniforms Help</div></a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
	</section>
</section>

<?php get_footer(); ?>
