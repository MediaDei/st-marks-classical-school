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
		<p><span class="simple-dropcaps">A</span><span class="smallcaps">t st. mark's academy,</span> we believe that to address the problems of the present, we must look backward. An education rooted in the accumulated wisdom of thousands of years is still available. It is the education of our forefathers&mdash;the education that has shaped leaders for generations, and is still doing just that.</p>


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
			Founded on <span class="italic">timeless educational principles</span>, our highest <br>goal is that our students know and love the truth.
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
	<h3 class="section-heading">A Glimpse Inside</h3>
	<div class="gallery">
		<p><span class="simple-dropcaps">A</span><span class="smallcaps">t saint mark's classical school</span> we understand how the busyness of life can get in the way of traveling. If you are unable to attend our next Open House Event, we hope that these captured moments will at least give you a glimpse into what our classical education program has to offer both you and your child.</p>
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home-page-slider', 'slug' ); } ?>
	</div>
	
	<div class="divider-quote fourth">
		<blockquote class="fourth"><span class="smallcaps">almighty god</span>, heavenly Father, who hast blessed us with the joy and care of children; Give us light and strength so to train them, that they may love whatsoever things are true and pure and lovely and of good report, following the example of their Saviour Jesus Christ. Amen.
		<br>
		<cite>&mdash; A Prayer For the Children, <em>Book of Common Prayer (1928)</em></cite>
		</blockquote>
	</div>
</section>
<section class="home-apply">
	<h3 class="section-heading">Apply for Enrollment</h3>
	<p><span class="simple-dropcaps">I</span><span class="smallcaps">f you would like to apply</span> to enroll your child at Saint Mark's Classical Academy, we would be glad to review your application and respond in a timely manner. We appreciate your interest in classical education and are excited for you and your child in this next step.</p>
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