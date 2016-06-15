			<div class="contents">
				<div class="inner">
					<div class="title"><a href="/latest/">CONTENTS</a></div>

					<?php 
						// The Query
						$the_query = new WP_Query('posts_per_page=20');
						$year = null;
						$priorYear = null;


						$year = $the_query->the_post().get_the_time('Y');
						$priorYear = $year;
						echo '
					<div class="year selected"><span>' . $year . '</span>
						<div class="year-posts italic">
							<ul>
								<li><a href="' . get_permalink() . '#top">' . get_the_title() . '</a></li>';

						// The Loop
						while ( $the_query->have_posts() ) : $the_query->the_post();
							$year = get_the_time('Y');

							if ($year !== $priorYear ): echo '
							</ul>
						</div>
					</div>
					<div class="year"><span>' . $year . '</span>
						<div class="year-posts italic">
							<ul>';
							endif;

							echo '
								<li><a href="' . get_permalink() . '#top">' . get_the_title() . '</a></li>';


							$priorYear = $year;

						endwhile;

						echo '
						</ul>
					</div>
				</div>
				';?>
				</div>
			</div>
