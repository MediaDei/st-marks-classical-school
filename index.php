<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/home__banner.jpg" class="main-banner" alt="Home Page banner"/>
	<div class="calendar">
		<div class="title smallcaps">Upcoming Events</div>

		<?php 
			// Ensure the global $post variable is in scope
			global $post;
			 
			// Retrieve the next 5 upcoming events
			$events = tribe_get_events( array(
				'posts_per_page' => 3,			   // how many to grab
				//'eventDisplay'   => 'upcoming',  // Upcoming, Past, Custom, List, etc
				//'tag'            => 'featured'   // specify tag if needed
				//'start_date' => new DateTime()
			) );
			
			foreach ( $events as $post ) {
				setup_postdata( $post ); // basic WP post setup
				remove_filter ('the_content','wpautop'); // prevent appending <p> to content

				echo '
		 		<div class="item">
			    	<div class="date">
			    		<div class="top smallcaps">' . tribe_get_start_date(null, false, 'M') . '</div>
			    		<div class="bottom">' .  tribe_get_start_date(null, false, 'd') . '</div>
			    	</div>
					<div class="text">' . get_the_title() . '<br>
					<span class="subtext italic">' . get_the_content() . '</span></div>
				</div>';
			}

			add_filter ('the_content','wpautop');	// restore
		?>
	</div>

	<div class="home-scroll">
		<div class="module-surround">
			<div class="module-title"><h2 class="title">I WANT TO . . .</h2></div>

			<div class="module-content">
				<ul id="menu" class="menu">
					<li><a href="/overview/">Find out More</a></li>
					<li><a href="/overview/#curriculum">Check the Curriculum</a></li>
					<li><a href="/classical/">Pursue Classical Education</a></li>
					<li><a href="#donate">Donate</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="first">
	<div class="home-leaf"></div>

	<h1 class="home-welcome">
		Welcome to St. Mark's
	</h1>
	<h1 class="subtext">Classical Academy</h1>
	
<!--
	<div class="new-calendar">
		<h2>On the Calendar at St. Mark's Classical School</h2>
		<style>
			.open-house {
				display: block;
				margin: 16px auto 70px;
				width: 400px;
				box-shadow: 0 9px 4px -6px rgba(0,0,0,0.5), 0 3px 7px rgba(0, 0, 0, 0.3);
			}
		</style>

		<img class="open-house" src="<?php bloginfo('template_url'); ?>/open-house.jpg" />
		<?php 
			// Ensure the global $post variable is in scope
			global $post;
			 
			// Retrieve the next 5 upcoming events
			$events = tribe_get_events( array(
				'posts_per_page' => 3,			   // how many to grab
				//'eventDisplay'   => 'upcoming',  // Upcoming, Past, Custom, List, etc
				//'tag'            => 'featured'   // specify tag if needed
				//'start_date' => new DateTime()
			) );
			
			foreach ( $events as $post ) {
				setup_postdata( $post ); // basic WP post setup
				remove_filter ('the_content','wpautop'); // prevent appending <p> to content

				echo '
		 		<div class="item">
			    	<div class="date">
			    		<div class="top smallcaps">' . tribe_get_start_date(null, false, 'M') . '</div>
			    		<div class="bottom">' .  tribe_get_start_date(null, false, 'd') . '</div>
			    	</div>
					<div class="text"><h3 class="event-title">' . get_the_title() . '</h3><p class"event-title">' . get_the_content() . '</p></div>
				</div>';
			}

			add_filter ('the_content','wpautop');	// restore
		?>
	</div>
-->
	<div class="icon-p-wrap">
		<div class="icon icon1"></div>
		<p class="mission capital-ornate"><span class="A">M</span><span class="smallcaps">ission: </span>To endow our students with the tools of learning and the wisdom of the ages by nourishing their souls with truth, goodness and beauty, so that they may serve God and their fellow man with virtue, dignity and strength.
		</p>
	</div>

	<div class="icon-p-wrap">
		<div class="icon icon2"></div>
		<p class="faculty capital-ornate"><span class="T">O</span><span class="smallcaps">ur faculty: </span>are committed to the full integration of faith and learning. We maintain a low student-teacher ratio so as to provide an effective, personal learning environment in which our teachers act not only as instructors, but also as mentors and Christian role-models.
		</p>
	</div>

	<div class="icon-p-wrap last">
		<div class="icon icon3"></div>
		<p class="curriculum capital-ornate"><span class="C">C</span><span class="smallcaps">urriculum: </span>Using the time-honored “trivium,” (three-fold way) and its three stages of learning as a guide, curriculum materials are carefully chosen from select publishers to ensure that students in the Grammar stage (K-6<sup>th</sup>) acquire the necessary phonetic, reading, arithmetic, and writing skills in traditional core subjects.
		</p>
	</div>

	<div class="quote">
		<span class="smallcaps">We are a classical academy </span><span class="italic">“where the instruction which enlightens<br>
		 the understanding is not separated from the moral education <br>
		 which amends the heart.”</span> — Alexis de Tocqueville
	</div>
</section>

<section class="main-section">
	<h2 class="section-title hm-education">Classical Education</h2>

	<div class="education">
		<p class="capital-ornate"><span class="A">A</span><span class="smallcaps">t</span><span class="smallcaps">st. mark's academy,</span> we believe that to address the problems of the present, we must look backward. An education rooted in the accumulated wisdom of thousands of years is still available. It is the education of our forefathers&mdash;the education that has shaped leaders for generations, and is still doing just that.</p>


		<h3>The Three Legs of Classical Education</h3>

		<p>This education stands on three legs: outstanding academics in a tutorial-style setting, a rigorous and broad arts program, and (last but most importantly) true spiritual formation.</p>

	</div>

	<div class="home-values clearfix">

		<div class="grid-whole">
			<img src="<?php bloginfo('template_url'); ?>/images/home_bracket1.png" alt="Bracket"/>
		</div>

		<div class="grid">
			<div>
			<div class="img virtue"></div>
			<div class="title italic swash">Tutorial Style</div>
			Students discover how<br> to think and learn.
			</div>
		</div>

		<div class="grid">
			<div>
			<div class="img rigor"></div>
			<div class="title italic">Rigor</div>
			Excellence in what we<br> say, think and do.
			</div>
		</div>

		<div class="grid">
			<div>
			<div class="img faith"></div>
			<div class="title italic">Spiritual Formation</div>
			Forming the heart to<br> love the right things.
			</div>
		</div>

		<div class="grid-whole">
			<img class="up" src="<?php bloginfo('template_url'); ?>/images/home_bracket1.png" alt="Bracket"/>
		</div>

		<div class="grid-whole">
			<div>
			<div class="dots">.<br>.</div>
			<div class="children"></div>		
			<!--<div class="img success"></div>-->
			<div class="title italic">Success</div>
			Founded on <span class="italic">timeless educational principles</span>, our highest goal is that our students know and love the truth.
			</div>
		</div>
	</div>
	<div class="home-hr"></div>
	<div class="home-quote">
		<blockquote><span class="smallcaps">The sole purpose</span> of education is simply this&thinsp;:&thinsp; <span class="italic">to teach men how to learn for themselves</span>&thinsp;;&thinsp; and whatever instruction fails to do this is effort spent in vain.
		<cite>&mdash; Dorothy Sayers, <span class="italic">The Lost Tools of Learning</span></cite>
		</blockquote>
	</div>
</section>
<section class="student-life">
	<h3>A Glimpse into St. Mark's Classical Academy</h3>
	<div class="gallery">
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home-page-slider', 'slug' ); } ?>
	</div>
</section>

<?php get_footer(); ?>