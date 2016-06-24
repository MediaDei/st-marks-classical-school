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
					<div class="text">' . get_the_title() . '</div>
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

	<div class="icon-p-wrap">
		<div class="icon icon1"></div>
		<p class="mission"><span class="simple-dropcaps">M</span><span class="smallcaps">ission: </span>To endow our students with the tools of learning and the wisdom of the ages by nourishing their souls with truth, goodness and beauty, so that they may serve God and their fellow man with virtue, dignity and strength.
		</p>
	</div>

	<div class="icon-p-wrap">
		<div class="icon icon2"></div>
		<p class="faculty"><span class="simple-dropcaps">O</span><span class="smallcaps">ur faculty: </span>are committed to the full integration of faith and learning. We maintain a low student-teacher ratio so as to provide an effective, personal learning environment in which our teachers act not only as instructors, but also as mentors and Christian role-models.
		</p>
	</div>

	<div class="icon-p-wrap last">
		<div class="icon icon3"></div>
		<p class="curriculum"><span class="simple-dropcaps">C</span><span class="smallcaps">urriculum: </span>Using the time-honored “trivium,” (three-fold way) and its three stages of learning as a guide, curriculum materials are carefully chosen from select publishers to ensure that students in the Grammar stage (K-6<sup>th</sup>) acquire the necessary phonetic, reading, arithmetic, and writing skills in traditional core subjects.
		</p>
	</div>

	<div class="divider-quote">
		<blockquote class="first"><span class="smallcaps">We are a classical academy </span><span class="italic">“where the instruction which enlightens the understanding is not separated from the moral education which amends the heart.”</span>
		<br>
		<cite>&mdash; Alexis de Tocqueville</cite>
		</blockquote>
	</div>
<section class="main-section">
	<h2 class="section-title hm-education">Classical Education</h2>

	<div class="education">
		<p class="capital-ornate"><span class="A">A</span><span class="smallcaps">t st. mark's academy,</span> we believe that to address the problems of the present, we must look backward. An education rooted in the accumulated wisdom of thousands of years is still available. It is the education of our forefathers&mdash;the education that has shaped leaders for generations, and is still doing just that.</p>


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
			<div class="title italic">Success</div>
			Founded on <span class="italic">timeless educational principles</span>, our highest goal is that our students know and love the truth.
			</div>
		</div>
	</div>
	<div class="home-hr"></div>
	<div class="divider-quote">
		<blockquote class="second"><span class="smallcaps">The sole purpose</span> of education is simply this&thinsp;:&thinsp; <span class="italic">to teach men how to learn for themselves</span>&thinsp;;&thinsp; and whatever instruction fails to do this is effort spent in vain.
		<br>
		<cite>&mdash; Dorothy Sayers, <span class="italic">The Lost Tools of Learning</span></cite>
		</blockquote>
	</div>
</section>

<section class="student-life">
	<h3 class="section-heading">A Glimpse into St. Mark's Classical Academy</h3>
	<div class="gallery">
		<p class="capital-ornate"><span class="A">A</span><span class="smallcaps">t saint mark's classical school</span> we understand how the busyness of life can get in the way of traveling. If you are unable to attend our next Open House Event, we hope that these captured moments will at least give you a glimpse into what our classical education program has to offer both you and your child.</p>
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home-page-slider', 'slug' ); } ?>
	</div>
	<div class="divider-quote">
		<blockquote class="third"><span class="smallcaps">the study of philosophy</span> is not that we may know what men have thought, but what the truth of things is.
		<br>
		<cite>&mdash; Thomas Aquinas</cite>
		</blockquote>
	</div>
</section>

<section class="events">
	<h3 class="section-heading">Upcoming Events</h4>
	<section class="ac-container">
		<div class="event-list">
		<?php 
			// Ensure the global $post variable is in scope
			global $post;
			date_default_timezone_set('Europe/London'); 

			$i = 1;
			
			$now = new DateTime();

			// Retrieve upcoming events
			$events = tribe_get_events( array(
				'eventDisplay'  => 'upcoming',      // Upcoming, Past, Custom, List, etc
				'start_date'    => $now->format('y-m-d H:i')
			) );


			foreach ( $events as $post ) {
				setup_postdata( $post ); // basic WP post setup

				if ($i == 1) {
					$event = new DateTime(tribe_get_start_date( null, true, "y-m-d H:i:s"));
					$end = new DateTime(tribe_get_end_date( null, true, "y-m-d H:i:s"));
					$interval = $now->diff($event);

					//echo $now->format('y-m-d H:i') . '<br>';
					//echo $event->format('y-m-d H:i') . '<br>';
					//echo $end->format('y-m-d H:i') . '<br>';
					//echo $interval->format('%R') . $interval->format('%h') . ':' . $interval->format('%i') . ':' . $interval->format('%s') . '<br>';

					// if timer is within 2 days, show it
					if ($interval->days < 2) {

						// if negative interval, set to zero
						if ($interval->format('%R') === "-") {
							$totalseconds = 0;
						}

						else {
							$totalseconds = ($interval->format('%h') * 60 * 60) +
											($interval->format('%i') * 60) +
											 $interval->format('%s');
							// if there's an extra day, add it
							if ($interval->days > 0)
								$totalseconds += (24 * 60 * 60);								
						}

						echo '
						<div class="timer">
							<figure></figure>
							<p>starts in: <time datetime="P ';

							// if negative interval, show zeroes
							if ($interval->format('%R') === "-") {
								echo '0H 0M 0S"';
							}

							// show interval
							else {
								// if there's an extra day, add it
								if ($interval->days > 0)
									echo $interval->format('%h') + 24 . 'H ';
								else
									echo $interval->format('%h') . 'H ';
								echo   $interval->format('%i') . 'M 
								   ' . $interval->format('%s') . 'S"';
							} 
							echo 'id="countdown"></time></p>
						</div>';

						// Countdown script
						echo '
						<script src="' . get_bloginfo('template_url') . '/js/isInViewport.min.js" type="text/javascript"></script>
						<script type="text/javascript">
							function calcage(secs, num1, num2) {
							  s = ((Math.floor(secs/num1))%num2).toString();
							  if (s.length < 2)
							  	s = "0" + s;
							  return s;
							}
							function countback(secs) {
								if (secs == 0) {
									DisplayStr = DisplayFormat.replace(/%%H%%/g, "00");
									DisplayStr = DisplayStr.replace(/%%M%%/g, "00");
									DisplayStr = DisplayStr.replace(/%%S%%/g, "00");
									document.getElementById("countdown").innerHTML = DisplayStr;
									document.getElementById("countdown").className += "blink";
									return;
								}

								else {
									DisplayStr = DisplayFormat.replace(/%%H%%/g, calcage(secs,3600,48));
									DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
									DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

									document.getElementById("countdown").innerHTML = DisplayStr;

									if (secs == 1) window.location.reload();

									setTimeout("countback(" + (secs-1) + ")", 1000);
								}
							}
							DisplayFormat = "%%H%% Hrs, %%M%% Min, %%S%% Sec";
							countback(' . $totalseconds . ')
						';

						// if in view, slide down
						echo "
							// easeOutBounce function from http://gsgd.co.uk/sandbox/jquery/easing/
							$.easing.easeOutBounce = function (x, t, b, c, d) {
								if ((t/=d) < (1/2.75))
									return c*(7.5625*t*t) + b;
								else if (t < (2/2.75))
									return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
								else if (t < (2.5/2.75))
									return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
								else
									return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
							}

							$('.event-list').addClass('runonce');
							$('.event-list .timer').css('top', '10px');
							$(window).scroll( function() {
								$('.event-list.runonce:in-viewport(250)').run(function() {
									$('.event-list .timer').animate({ 'top' : '-=44px' }, 1000, 'easeOutBounce');
									this.removeClass('runonce');
								});
							});

							var timeBlink = function() {
								var elem = $(this);
								setInterval(function() {
								    if (elem.css('visibility') == 'hidden') {
								        elem.css('visibility', 'visible');
								    } else {
								        elem.css('visibility', 'hidden');
								    }    
								}, 800);
							};

							$('.blink').each ( timeBlink );

						</script>
						";
					}
				}


				echo '
				<input id="ac-' . $i . '" type="radio"' . ($i == 1 ? ' checked=""' : ' ') . ' name="accordion-1">
				<label for="ac-' . $i . '">			
					<header>
						<h1>' . get_the_title() . '</h1>
						<time datetime="' . tribe_get_start_date(null, false, 'Y-m') . '">
							<span>' . tribe_get_start_date(null, false, 'j F') . '</span> &bull; <span>' . tribe_get_start_date(null, false, 'g:i') . ' - ' . tribe_get_end_date(null, false, 'g:ia') . '</span> &bull; <span>' . tribe_get_venue() . '</span>
						</time>
					</header>
					<article>';

						if (has_post_thumbnail() ){
							?>

								<a class="image">  <?php the_post_thumbnail(); ?></a>
								<p> <?php the_content(); ?> </p>

								<?php
						} 
						else {
							?>
								<p> <?php the_content(); ?> </p>
							<?php  
						}
					
					echo
					'</article>
					<div class="bottomBox">
						<span class="fa fa-calendar"></span>
						<time>' . tribe_get_start_date(null, false, 'j M., g:i') . ' - ' . tribe_get_end_date(null, false, 'g:ia') . '</time>
						<span class="fa fa-star-o"></span>
						<time>' . tribe_get_venue() . '</time>
					</div>
				</label>';

				$i++;
			} #aEND foreach
		?>
		<?php wp_reset_query(); ?>
		</div>
	</section>
	<div class="divider-quote fourth">
		<blockquote class="fourth"><span class="smallcaps">almighty god</span>, heavenly Father, who hast blessed us with the joy and care of children; Give us light and strength so to train them, that they may love whatsoever things are true and pure and lovely and of good report, following the example of their Saviour Jesus Christ. Amen.
		<br>
		<cite>&mdash; A Prayer For the Children, <em>Book of Common Prayer (1928)</em></cite>
		</blockquote>
	</div>
</section>
<section class="apply">
	<h3 class="section-heading">Apply for Enrollment</h3>
	<p class="capital-ornate"><span class="I">I</span><span class="smallcaps">f you would like to apply</span> to enroll your child at Saint Mark's Classical Academy, we would be glad to review your application and respond in a timely manner. We appreciate your interest in classical education and are excited for you and your child in this next step.</p>
	<a class="button" href="/apply/"><div class="centered-button" role="button">Apply</div></a>
</section>
<!--
<section class="give bg-grey">
	<h3 class="section-heading">Support</h3>
	<p class="capital-ornate"><span class="A">W</span><span class="smallcaps">e rely on your support</span> to provide affordable education, and offer financial assistance where needed, ensuring a brighter future. Consider donating today.</p>
	<div class="range-input">
    <span class="range-value"></span>
    <input type="range" name="range" id="slider" value="0" min="0" max="100" />
  </div>
	<?php 
  $loop = new WP_Query( array( 'post_type' => 'give_forms') );
  while ( $loop->have_posts() ) : $loop->the_post();
    if(get_the_excerpt() === "donate-form") {
      echo do_shortcode( '[give_form id="' . get_the_ID() . '"]' );
    }
  endwhile; wp_reset_query(); 
  ?>
  <script>
    var $ = jQuery.noConflict();
    var range = $('#slider'),
        value = $('.range-value'),
        give_value = $('#give-amount'),
        fade_on = false;



    function fadeButton() {
      //apply fade to all buttons except .dummy-btn
      $(".give-btn-level-1, .give-btn-level-2, .give-btn-level-3, .give-btn-level-4, .give-btn-level-5, .give-btn-level-6").addClass("faded");

      fade_on = true;
    }

    function restoreButton() {
      //remove fade from all buttons except .dummy-btn
      $(".give-btn-level-1, .give-btn-level-2, .give-btn-level-3, .give-btn-level-4, .give-btn-level-5, .give-btn-level-6").removeClass("faded");

      fade_on = false;

      //change .dummy-btn to button
      $(".dummy-btn").replaceWith("<button value='0.00' class='give-donation-level-btn give-btn give-btn-level-7  dummy-btn' data-price-id='7' type='button'>+</button>");

    }
    function checkRestore() {
      if(fade_on == true) {
        restoreButton();
      }
    }
    function checkFade() {
      if(fade_on == false) {
        fadeButton();
      }
    }
    



    $(document).ready(function() {

      //update html for .give-btn-level-7 at page load
      $(".give-btn-level-7").html("+").addClass("dummy-btn");

      //add class to join button so can style
      $("button:contains(Join)").addClass("join-button");

      //add class to join modal button so can style
      $( "input[value='Join']" ).closest( "div.give-submit-button-wrap" ).addClass("join-button");

      //add class to donate button so can style
      $("button:contains(Donate)").addClass("donate-button");

      //add class to donate modal button so can style
      $( "input[value='Donate']" ).closest( "div.give-submit-button-wrap" ).addClass("donate-button");





      //click events for all give-btn; update range and value
      $(".give-btn-level-1").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
      }); 
      $( ".give-btn-level-2").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
      });
      $( ".give-btn-level-3").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-4").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-5").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-6").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });

      $( ".dummy-btn").click(function () {
        $(".give-text-input").focus().blur();
        //checkFade();
      });

      //range updates value, .give-text-input, and .dummy-btn
      value.html(range.attr('value'));
      range.on('input', function(){
          value.html(this.value);
          $(".give-text-input").val(this.value);
          $(".dummy-btn").val(this.value);
      });

      //when using range, click on .dummy-btn(submits value to plugin) and then focus .give-text-input and then unfocus (adds "cents" to textbox)
      range.on('mouseup', function(){
        $(".dummy-btn").click();
        $(".give-text-input").focus().blur();
      });

      //.give-text-input updates range
      $(".give-text-input").on('input', function(){
          range.val(this.value);
          value.html(this.value);
      });

      //make dummy-btn change value of .give-text-input
      $(".dummy-btn").change(function(){
        $(".give-text-input").val(this.value);
      });


    });
  </script>
</section>
-->
<?php get_footer(); ?>