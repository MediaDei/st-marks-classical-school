<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/home__banner.jpg" class="main-banner" alt="Home Page banner"/>

	<div class="calendar">
		<div class="title smallcaps">Calendar</div>

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

<section>
	<div class="home-leaf">
		<span class="smallcaps">St. Mark’s</span> is a classical academy ... <span class="italic">“where the instruction which enlightens<br>
		 the understanding is not separated from the moral education <br>
		 which amends the heart.”</span> — Alexis de Tocqueville
	</div>

	<div class="home-welcome">
		<span class="italic">Welcome to</span>&thinsp; <span class="smallcaps">St. Mark's</span>&thinsp; <span class="italic">Classical Academy</span>
	</div>

	<!--<div class="home-announcement">
		<span class="smallcaps">Now enrolling for the 2015-2016 school year.</span>

		<a class="italic" href="/apply/">Click here to apply</a>
	</div>-->

	<style>
	.open-house {
		display: block;
		margin: 16px auto 70px;
		width: 400px;
		box-shadow: 0 9px 4px -6px rgba(0,0,0,0.5), 0 3px 7px rgba(0, 0, 0, 0.3);
	}
	</style>

	<img class="open-house" src="<?php bloginfo('template_url'); ?>/open-house.jpg" />

	<div class="home-touts clearfix">
		<div class="grid">
			<div>
			<div class="img tout1"></div>
			<div class="title italic">Mission</div>
			<span class="smallcaps">... To endow</span> our students with the tools of learning and the wisdom of the ages by nourishing their souls with truth, goodness and beauty, so that they may serve God and their fellow man with virtue, dignity and strength.
			</div>
		</div>

		<div class="grid">
			<div>
			<div class="img tout2"></div>
			<div class="title italic">Our Faculty</div>
			<span class="smallcaps">... Are committed</span> to the full integration of faith and learning. We maintain a low student-teacher ratio so as to provide an effective, personal learning environment in which our teachers act not only as instructors, but also as mentors and Christian role-models.
			</div>
		</div>

		<div class="grid">
			<div>
			<div class="img tout3"></div>
			<div class="title italic">Curriculum</div>
			<span class="smallcaps narrow">... Using the</span> time-honored “trivium,” (three-fold way) and its three stages of learning as a guide, curriculum materials are carefully chosen from select publishers to ensure that students in the Grammar stage (K-6<sup>th</sup>) acquire the necessary phonetic, reading, arithmetic, and writing skills in traditional core subjects.
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

<section class="main-section">
	<h2 class="section-title hm-education">Classical Education</h2>

	<div class="pre">
		<p><span class="smallcaps leaf-title">At St. Mark's Academy,</span> we believe that to address the problems of the present, we must look backward. An education rooted in the accumulated wisdom of thousands of years is still available. It is the education of our forefathers&mdash;the education that has shaped leaders for generations, and is still doing just that.</p>

		<p>This education stands on three legs: outstanding academics in a tutorial-style setting, a rigorous and broad arts program, and (last but most importantly) true spiritual formation.

		<p>Founded on <span class="italic">timeless educational principles</span>, our highest goal is that our students know and love the truth.</p>
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
			<div class="img success"></div>
			<div class="title italic">Success</div>
			A love for truth and<br> a joy in pursuing it.
			</div>
		</div>
	</div>
</section>

<section style="display:none">
	<h2 class="section-title hm-sample-classes">Sample Classes</h2>

	<div class="pre">
		<p><span class="smallcaps leaf-title">Classes</span> taught at St. Mark’s offer a wealth of understanding to our students. <span class="italic">Timeless wisdoms</span> neve lose their luster here; and <span class="italic">great minds</span> of history were never so alive as to us today: &mdash;
		</p>
	</div>

	<div class="slick-slider">
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_latin.svg" alt="Latin"/>
			<div class="title italic">Latin</div>
			The ancient language<br> of beauty and learning.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_rhetoric.svg" alt="Rhetoric"/>
			<div class="title italic swash">Rhetoric</div>
			If something should be<br> said, it should be said well.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_science.svg" alt="Science"/>
			<div class="title italic">Science</div>
			The building blocks<br> of nature and matter.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_arts.svg" alt="Arts"/>
			<div class="title italic swash">Arts</div>
			Meeting point of the<br>good and the beautiful.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_history.svg" alt="History"/>
			<div class="title italic">History</div>
			The virtues, vices, and <br>records of human history.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_penmanship.svg" alt="Penmanship"/>
			<div class="title italic">Penmanship</div>
			We write well in<br> order to think clearly.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_recitation.svg" alt="Recitation"/>
			<div class="title italic swash">Recitation</div>
			We perform and recite, so<br> as to learn by repeating.
		</div>
		<div class="slide">
			<img src="<?php bloginfo('template_url'); ?>/images/_subjects_languages.svg" alt="Languages"/>
			<div class="title italic swash">Languages</div>
			If you can speak everywhere,<br> you can travel anywhere.
		</div>
	</div>
</section>

<section class="main-section" style="display:none">
	<h2 class="section-title hm-community">
		<span class="community">Community</span>
	</h2>

	<div class="home-community">
		<div class="inner">

			<div class="family f1"></div>
			<div class="family f2"></div>
			<div class="family f3"></div>
			<div class="dots d1">.<br>.</div>
			<div class="dots d2">.<br>.</div>
			<div class="dots d3">.<br>.</div>
			<div class="stmarks">
				<img src="<?php bloginfo('template_url'); ?>/images/home_stmarks.png" alt="St. Marks Home"/>
				<span class="smallcaps">St. Mark's</span>
			</div>
		</div>
	</div>

	<div class="pre">
		<p><span class="smallcaps leaf-title">Community</span> plays a central role in St. Mark’s vision for our students. We bring families together around shared goals, and common values. A <span class="italic">St. Mark’s family</span> never has to be alone.</p>

		<p>Our families form wonderful bonds with one another. We support each other, host picnics and potluck meals, and help with raising the kids, in a <span class="italic">truly extended family.</span></p>
	</div>
</section>

<section style="padding-bottom:0">

	<h2 class="section-title hm-next-step">Next Step...</h2>

	<div class="home-next clearfix">

		<div class="grid">
			<div>
			<a href="/apply/"><div class="title italic swash">Apply</div>
			<div class="step s1 zooming"></div></a>
			Apply to enroll your child.
			</div>
		</div>

		<div class="grid">
			<div>
			<a class="contact" href="#" onclick="return false;"><div class="title italic">Connect</div>
			<div class="step s2 zooming"></div></a>
			Get in touch with us.
			</div>
		</div>

		<div id="donate" class="grid-whole">
			<div class="title italic">Support</div>
			<div class="pre"><p><span class="leaf-title">We rely on your</span> support to provide affordable education, and offer financial assistance where needed, ensuring a brighter future. <span class="italic">Consider donating today.</span></p></div>
		</div>
	</div>
</section>


<p>
	<br>
</p>


<?php get_footer(); ?>