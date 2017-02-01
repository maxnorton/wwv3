<section class="homepage-hero hero">

	<div class="hero-photo-wrapper" data-0="background-position-y: 0px;" data-end="background-position-y: 900px;">

		<?php if (get_post_status(1)) { $frontPost = get_post(1); ?>
			
			<div class="hero-content-wrap row" data-0="opacity: 1;" data-200="opacity: 0;">

				<ul class="title-area">
					<!-- Title Area -->
					<li class="name">
						<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wwv-logo-shimmery.png" alt="Logo image of waves" /><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
						<!--h2>California whitewater rafting since 1975</h2-->
					</li>
				</ul>		

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

</section>