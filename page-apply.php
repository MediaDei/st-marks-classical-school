
<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/apply__banner.jpg" class="main-banner" alt="Apply Page banner"/>
</section>

<section class="apply">
	<h2 class="section-title ap-apply">Apply</h2>
	
	<h3>The Benefits of a Classical Education</h3>
	<ul class="top-list font-awesome">
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
</section>
<section class="application bg-grey">
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
<section class="give">
	<h3 class="section-heading">Support</h3>
	<p><span class="simple-dropcaps">W</span><span class="smallcaps">e rely on your support</span> to provide affordable education, and offer financial assistance where needed, ensuring a brighter future. Consider donating today.</p>
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




<?php get_footer(); ?>
