

	<footer>
		<div class="title">
			<span class="top smallcaps">St. Mark’s</span><br>
			<span class="bottom italic swash">Classical Academy</span>
		</div>

		<div class="grid bg-lion">
			<div class="grid-50 left">
			<div class="inner">
				<div class="title italic">Contact</div>
				<div class="line email"><span class="smallcaps">Email</span>: <span class="faded"></span> <a href="#" onclick="return false;">mail@stmarksclassical.org</a></div>
				<div class="line tel"><span class="smallcaps">Tel</span>: <span class="faded"></span> (215) 884-7660</div>
				<div class="line"><div class="addr-pre"><span class="smallcaps">Address</span>: <span class="faded"></span></div> <div class="addr">1162 Beverly Road<br>
											   Rydal, PA 19046</div></div>
			</div>
			</div>
			<div class="grid-50 right">
			<div class="inner">
				<div class="title italic">Social</div>
				<div class="line facebook"><span class="smallcaps">Facebook</span>: <span class="faded"></span> <a href="https://www.facebook.com/pages/St-Marks-Church/259381804090029">fb.com/St-Marks-Church</a></div>
				<div class="line rss"><span class="smallcaps">Rss Feed</span>: <span class="faded"></span> <a href="/rss/">stmarksclassical.org/rss/</a></div>
			</div>
			</div>
		</div>

		<div class="jurisdiction">
			<div class="title">Oversight <span class="italic">&</span> Jurisdiction:</div>
			<div class="hr"></div>
			<div class="line">
				<span class="italic">Parish: </span> <a href="//stmarksrec.org/"><span class="smallcaps">St. Mark's REC.</span></a>&emsp;
				<span class="italic">Diocese: </span> <a href="//rec-nema.org"><span class="smallcaps">REC Diocese of North East.</span></a>
			</div>
			<div class="line"><span class="italic">Jurisdiction:</span> <a href="//anglicanchurch.net"><span class="smallcaps">Anglican Church in North America (ACNA).</span></a></div>
		</div>

		<div class="byline">
			Crafted with love for the Church, by <a href="http://www.mediadei.org">Media Dei, &copy; <?php echo date('Y'); ?></a>.
		</div>


		<div class="contact-lightbox">
			<div class="overlay"></div>
			<?php echo do_shortcode('[contact-form-7 html_name="contact-form" id="36" title="Contact form 1"]'); ?>
		</div>

	</footer>

	<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/isInViewport.min.js"></script>


	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(document).ready(function(){

			/*  For IE < 9 use jQuery <= 1.7.0  */
			$(window).scroll( function() {
				$('#chart:in-viewport(300)')
				.each(function() {

					$("li .bar").each( function( key, bar ) {
						var percentage = $(this).data('percentage');

						$(this).animate({
						  'width' : percentage + '%'
						}, 1000);
					});
				});
			});


			var radioButtons = [false, false, false, false, false, false];

			//// OVERVIEW STAFF
			$("input[type='radio']").click(function() {

				if( radioButtons[$(this).index("input[type='radio']")] == true ) { // if clicking on self
					$(this).prop('checked', false);								   // unselect self
					radioButtons[$(this).index("input[type='radio']")] = false;
				}

				else {															// if clicking another
					radioButtons = [false, false, false, false, false, false];
					$("input[type='radio']").prop('checked', false);			// unselect all

					radioButtons[$(this).index("input[type='radio']")] = true;	// select self
					$(this).prop('checked', true);
				}
			});

			$("div.modal-info .close").click(function() {
				radioButtons = [false, false, false, false, false, false];
				$("input[type='radio']").prop('checked', false);
			});

			$("header .contact, section .home-next .contact, footer .email").click(function() {
				$("div.contact-lightbox").css("display","block");
			});

			$("footer .contact-lightbox .close, .overlay").click(function() {
				$("div.contact-lightbox").css("display","none");
			});

		});



	</script>


</body>
</html>