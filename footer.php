					<footer class="footer" role="contentinfo">
						<?php if (is_front_page()) { ?>
						<div id="inner-footer" class="row collapse">
							<div class="medium-6 columns map">
								<iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBjfQzlCp5KTe5HLPtlbIwbjx2RDWayOAQ&mode=driving&origin=Los+Angeles,CA&destination=Whitewater+Voyages+-+Kern+Outdoor+Center,Kernville,CA&zoom=7" style="width: 100%; height: 100%; min-height: 450px; border: 0 none; margin-bottom: -5px;"></iframe>
							</div>
							<div class="medium-6 columns left">
								<div style="padding-left: 1em;">
									<h3>Closer than you think!</h3>
									<p>The Kern River Valley is the closest whitewater destination to Los Angeles, offering fun on and off the water. 60 miles and 5 separate sections of whitewater make the trip worthwhile for all levels of rafter—from families and first-timers to the most experienced.</p>
									<p>Off the water, the Kern River Valley makes a classic SoCal destination for groups of friends, family reunions, and romantic escapes. Soak in numerous natural hot springs, or sample the Valley’s fishing, golfing, hiking, mountain biking, water skiing, windsurfing, birding, rock climbing, jet skiing and four wheeling, all readily available in this Southern Californian vacation wonderland.</p>
								</div>
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
		    			</div>
		    			<?php } ?>
						<div class="large-12 medium-12 columns lastrow">
							<div class="row">
								<div class="medium-2 columns">&nbsp;</div>
								<div class="medium-2 columns"><img src="/wp-content/themes/wwv3/assets/images/ra-logo-member.png" width="140" height="55" alt="Proud member of Rafting America" class="left" /></div>
								<div class="medium-3 columns">
									<p class="source-org"><span class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></span><br />
									11252 Kernville Rd<br />
									Kernville, CA 93238</p>
								</div>
								<div class="medium-4 columns">
									<p><i class="fi-telephone"></i>&nbsp;&nbsp;&nbsp;<a href="tel:+18004007238">800-400-7238</a><br />
									<i class="fi-mail"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:#">fun@whitewatervoyages.com</a></p>
								</div>
								<div class="medium-1 columns"></div>
							</div>
						</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<?php wp_footer();
		get_template_part( 'parts/init', 'skrollr' ); ?>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$(function(){
					$('.map').on('click', function(){
						$(this).addClass('interact');
					});
				});

				function scroll_to_accordion(hash) {
					if (hash != '') {
					    if ( $('div'+ hash).hasClass('active') == false) {
					    	$('a[href="'+ hash +'"]').trigger('click.fndtn.accordion');
					    }
					    $('html, body').animate({
					      scrollTop: $('a[href="'+ hash +'"]').offset().top
					    }, 600);
					}
				}

				scroll_to_accordion(window.location.hash);

				$('.cta-button .button').click(function() {
					var hash = $(this).attr('href');
					scroll_to_accordion(hash);
				})

			  $('.slick').slick({arrows: false});
			  $('.tab-lower').click(function() {
			  	event.preventDefault();
			  	$('.slick').slick('slickGoTo', 0);
			  });
			  $('.tab-upper').click(function() {
			  	event.preventDefault();
			  	$('.slick').slick('slickGoTo', 1);
			  });
			  $('.tab-thunder').click(function() {
			  	event.preventDefault();
			  	$('.slick').slick('slickGoTo', 2);
			  });
			  $('.tab-forks').click(function() {
			  	event.preventDefault();
			  	$('.slick').slick('slickGoTo', 3);
			  });
			});
		</script>
	</body>
</html> <!-- end page -->