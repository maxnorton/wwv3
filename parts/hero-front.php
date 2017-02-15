<section class="homepage-hero hero">

	<div class="hero-photo-wrapper" data-0="background-position-y: 0px;" data-end="background-position-y: 900px;">

		<?php if (get_post_status(1)) { $frontPost = get_post(1); ?>
			
			<div class="hero-content-wrap row" data-0="opacity: 1;" data-200="opacity: 0;">

				<article id="post-<?php echo $frontPost->ID; ?>" class="post-<?php echo $frontPost->ID; ?> columns small-12 text-center" role="article" itemscope itemtype="http://schema.org/WebPage">
										
					<header class="article-header">
						<h1 class="page-title"><?php echo $frontPost->post_title; ?></h1>
					</header> <!-- end article header -->
									
				    <section class="entry-content" itemprop="articleBody">
					    <?php echo $frontPost->post_content; ?>
					    <?php wp_link_pages(); ?>
					</section> <!-- end article section -->
										
					<footer class="article-footer">
						
					</footer> <!-- end article footer -->
									
				</article> <!-- end article -->
			
			</div>

		<?php } ?>		
	</div>

	<div class="meta-wrapper fixed show-for-medium-up">
		<div class="meta-bar">
			<div class="row">
				<div class="medium-3 columns">
					<div class="title-area">
						<div class="shadow-focus"></div>
						<h1><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwv-logo-shimmery.png" alt="Logo image of waves" /><?php bloginfo('name'); ?></a></h1>	
					</div>
				</div>
				<!--div class="top-bar-social columns medium-7 text-center">
					<?php get_template_part( 'parts/widget', 'social' ); ?>
				</div-->
				<div class="medium-2 medium-offset-7 columns text-right"><div class="shadow-focus"></div><a href="tel:+18004007238"><i class="fi-telephone"></i>&nbsp;&nbsp;&nbsp;800-400-7238</a></div>
			</div>
		</div>
	</div>
	<div class="contain-to-grid main-bar sticky show-for-medium-up">
		<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large;">
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
	</div>

</section>