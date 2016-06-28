
<?php get_header(); ?>

<section class="section-banner">
	<img src="<?php bloginfo('template_url'); ?>/images/students__banner.jpg" class="main-banner" alt="Students Page banner"/>
</section>


<section class="students">
	<h2 class="section-title st-students">Students</h2>
	<section class="newsletters">
		<!--<h3>Newsletters</h3>-->
		<div class="wrapper grid">
			<div class="grid-1">
				<a href="<?php site_url(); ?>/documents/2016/06/by-laws.pdf">
					<div class="button btn-1" role="button">
						<div class="text">
							<p>Latest Newsletter</p>
							<span class="last-revised">June 2016</span>
						</div>
					</div>
				</a>
			</div>
		</div>

		<h4>Older Issues</h4>

		<div class="wrapper grid older">
			<div class="grid-1-2">
				<a href="<?php site_url(); ?>/documents/2016/06/by-laws.pdf">
					<div class="button btn-2" role="button">
						<div class="text">
							<span class="last-revised">May 2016</span>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-1-2">
				<a href="<?php site_url(); ?>/documents/2016/06/model-scope-sequence.pdf">
					<div class="button btn-2" role="button">
						<div class="text">
							<span class="last-revised">April 2016</span>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="wrapper grid older">
			<div class="grid-1-2">
				<a href="<?php site_url(); ?>/documents/2016/06/by-laws.pdf">
					<div class="button btn-2" role="button">
						<div class="text">
							<span class="last-revised">March 2016</span>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-1-2">
				<a href="<?php site_url(); ?>/documents/2016/06/model-scope-sequence.pdf">
					<div class="button btn-2" role="button">
						<div class="text">
							<span class="last-revised">February 2016</span>
						</div>
					</div>
				</a>
			</div>
		</div>
		
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
		<!--
		<ul class="newsletters">
			<a><li>&mdash; May 2016</li></a>
			<a><li>&mdash; April 2016</li></a>
			<a><li>&mdash; March 2016</li></a>
			<a><li>&mdash; February 2016</li></a>
			<a><li>&mdash; January 2016</li></a>
			<a><li>&mdash; December 2015</li></a>
			<a><li>&mdash; Novemeber 2015</li></a>
			<a><li>&mdash; October 2015</li></a>
		</ul>
	-->
	</section>
	
	<section class="uniforms bg-grey">
		<h3>Uniforms</h3>
		<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'student-page-slider', 'slug' ); } ?>
		<p><span class="simple-dropcaps">O</span>ur students are required to wear the approved uniforms, which may be viewed and ordered online from Land's End, or purchased at Land's End stores.
		</p>
		<a class="button" href="<?php bloginfo('template_url'); ?>/temp-files/uniforms_help.pdf"><div class="centered-button">Learn How to Order</div></a>
	</section>

	<section class="handbooks">
		<h3>Handbooks</h3>
		<div class="wrapper grid">
			<div class="grid-1-2">
				<label>Student/Parent (1st-4th grade)</label>
				<a href="<?php site_url(); ?>/documents/2016/06/by-laws.pdf">
					<div class="button btn-1" role="button">
						<div class="icon btn-1"></div>
						<div class="text">
							<p>Download</p>
							<span class="last-revised">Fall 2016 - Spring 2017</span>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-1-2">
				<label>Parent (Kindergarten)</label>
				<a href="<?php site_url(); ?>/documents/2016/06/model-scope-sequence.pdf">
					<div class="button btn-2" role="button">
						<div class="icon btn-2"></div>
						<div class="text">
							<p>Download</p>
							<span class="last-revised">Fall 2016 - Spring 2017</span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
</section>












<!--
	<div style="padding: 20px 100px">
		<div style="font-size:1.3em; color:#3c2420; padding:5px 0">Student Newsletter</div>

		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/03_2016 Newsletter.pdf"><span class="italic">March 2016</span></a>
		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/01_2016 Newsletter.pdf"><span class="italic">January/February 2016</span></a>
		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/12_2015 Newsletter.pdf"><span class="italic">December 2015</span></a>
		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/11_2015 Newsletter.pdf"><span class="italic">November 2015</span></a>
		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/10_2015 Newsletter.pdf"><span class="italic">October 2015</span></a>
		<br>
	</div>

	<div style="padding: 20px 100px">
		<div style="font-size:1.3em; color:#3c2420; padding:5px 0">School Handbooks</div>

		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/School_Handbook%202013-2014.pdf"><span class="italic">Student/Parent Handbook for 2013/2014</span> (1st-4th Grade)</a>
		<a style="font-size:1.14em; color:#002b5b; display:table; padding: 7px 0 0 10px" href="<?php bloginfo('template_url'); ?>/temp-files/Handbook_Kindergarten_2013-2014indd.pdf"><span class="italic">Parent Handbook for 2013/2014</span> (Kindergarten)</a>
	</div>

	<div style="padding: 20px 100px">
		<div style="font-size:1.3em; color:#3c2420; padding:5px 0">Uniform Guidelines</div>

		<a style="padding-left: 10px" href="http://www.landsend.com/pp/SchoolSearch.html?action=landing&amp;selectedSchoolNum=900159682"><img src="<?php bloginfo('template_url'); ?>/temp-files/300x100_lesu_wdg.jpg" style="border-radius:4px" alt="Uniforms"/></a>
		

		<p style="padding-left: 10px; font-size:0.9em; color:#b88585"><br>Need help? <a href="<?php bloginfo('template_url'); ?>/temp-files/uniforms_help.pdf">Click here</a> to download a pdf with instructions.</p>
	</div>
	<br>
	<br>
</section>
-->



<?php get_footer(); ?>
