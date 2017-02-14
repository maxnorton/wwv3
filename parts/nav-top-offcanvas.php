<?php if ( is_front_page() ) { ?>

	<div class="meta-wrapper fixed">
		<div class="meta-bar">
			<div class="row">
				<div class="small-10 columns">
					<div class="title-area">
						<div class="shadow-focus"></div>
						<h1><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwv-logo-shimmery.png" alt="Logo image of waves" /><?php bloginfo('name'); ?></a></h1>	
					</div>
				</div>
				<div class="small-2 columns text-right"><div class="shadow-focus"></div><a href="tel:+18004007238"><i class="fi-telephone"></i>&nbsp;&nbsp;&nbsp;800-400-7238</a>
	</div>
			</div>
		</div>
	</div>

 	<?php get_template_part( 'parts/hero', 'front' ); } ?>

<div class="contain-to-grid sticky main-bar show-for-medium-up">
	<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
		<!--ul class="title-area">
			<!-- Title Area -->
			<!--li class="name">
				<img src="<php echo get_template_directory_uri(); ?>/assets/images/wwv-logo-shimmery.png" alt="Logo image of waves" />
				<h1><a href="<php echo home_url(); ?>" rel="nofollow">Whitewater Voyages</a></h1>
			<!--/li>
		</ul-->		
		<section class="top-bar-section column medium-4 medium-offset-3">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
	<!--hr class="top-rule" /-->
	<!--div class="row">
		<div class="column medium-9 medium-offset-3">
			<hr class="top-rule" />
		</div>
	</div-->
	<div class="row">
		<section class="top-bar-social medium-6 medium-offset-2">
			<?php get_template_part( 'parts/widget', 'social' ); ?>
		</section>
	</div>
</div>


<div class="show-for-small-only fixed">
<!-- cut top graphical section: <?php if ( !is_front_page() ) { echo 'style="padding-top: 22px;"'; } ?> -->
	<nav class="tab-bar">
		<!--section class="right tab-bar-section">
			<php get_template_part( 'parts/widget', 'social' ); ?>
		</section-->
		<section class="middle tab-bar-section">
			<h1 class="title"><?php bloginfo('name'); ?></h1>
		</section>
		<section class="left-small">
			<a href="#" class="left-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">
		<li><label><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwv-logo-shimmery.png" alt="Logo image of waves" /><br />
			Navigation</label></li>
			<?php joints_off_canvas(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>