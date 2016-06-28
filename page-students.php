
<?php get_header(); ?>

<section class="section-banner no-pad">
	<img src="<?php bloginfo('template_url'); ?>/images/students__banner.jpg" class="main-banner" alt="Students Page banner"/>
</section>


<section class="students">
	





	<h2 class="section-title st-students">Students</h2>
	<section class="newsletters">

		<div class="item-wrap">
			<?php
			$args = array( 'posts_per_page' => 1,'category' => 'handbook');
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<h4 class="lower">Student Handbook<br>(Kindergarten)</h4>

			<a href="<?php the_permalink(); ?>">
				<div class="handbook hb-1 button">
					<div class="text">
						<span>Last Revised:<br><?php the_time( get_option( 'date_format' ) ); ?></span>
					</div>
				</div>
			</a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
		</div>

		<div class="item-wrap middle">
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
			$i = 0;
			$args = array( 'posts_per_page' => 4, 'offset' => 1, 'category' => 'newsletter');
			$lastposts = get_documents( $args ); ?>
			<?php foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
				<?php if ($i == 0){
					echo '<div class="wrapper grid older">';
				}?>
			  
					<div class="grid-1-2">
						<a href="<?php the_permalink(); ?>">
							<div class="button btn-2" role="button">
								<div class="text">
									<span><?php the_title(); ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php
					if ($i == 1){
						echo '</div><!--close wrapper-->';
						$i = 0;
					}
					else{
						$i++;
					}?>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
			<!--Archives Button
			<div class="wrapper grid">
				<div class="grid-1">
					<a href="">
						<div class="button btn-3" role="button">
							<div class="text">
								<span class="last-revised">Visit Archives</span>
							</div>
						</div>
					</a>
				</div>
			</div>
		-->
		<div class="item-wrap">
			<?php
			$args = array( 'posts_per_page' => 1,'category' => 'handbook', 'offset' => 1);
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<h4 class="lower">Student Handbook<br>(1st-4th Grade)</h4>
			<a href="<?php the_permalink(); ?>">
				<div class="handbook hb-2 button">
					<div class="text">
						<span>Last Revised:<br><?php the_time( get_option( 'date_format' ) ); ?></span>
					</div>
				</div>
			</a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
		</div>
	</section>
	
	<section class="uniforms">
		<h3>Dressed for Success</h3>

		<h4>Why Require Uniforms?</h4>
		<ul class="top-list mdash"><span class="smallcaps">school uniforms:</span>
			<li>Create an unified ethos and school spirit</li>
			<li>Reinforce the idea that school is a place set apart for something extremely<br> important: <em>the pursuit of truth & learning</em></li>
			<li>Help Students to see and be seen by their peers for who they are as a person and not for what sort of clothing they wear</li>
			<li>Eliminate silly, materialistic competition among students</li>
			<li>Make life easier for parents, teachers, and students by removing the need for a dress code</li>
		</ul>

		<h4>Student Uniforms in the Life of St. Mark's</h4>
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'student-page-slider', 'slug' ); } ?>

		<?php
			$args = array( 'posts_per_page' => 1,'category' => 'uniforms');
			$lastposts = get_documents( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>
			<a class="button" href="<?php the_permalink(); ?>"><div class="centered-button">Order a Uniform</div></a>
			<?php endforeach; 
			wp_reset_postdata(); ?>
	</section>
</section>

<?php get_footer(); ?>
