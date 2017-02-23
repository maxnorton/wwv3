<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
    	<?php if (has_post_thumbnail()) { ?>
    	<div class="river-featured-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
			<header class="article-header row">
				<?php $before_title = get_post_meta($post->ID, 'Before-title text', true);
					$alt_title = get_post_meta($post->ID, 'Alternate title text', true);
					$after_title = get_post_meta($post->ID, 'After-title text', true);
				?>
				<div class="column small-12 x-small-offset-2">
					<h3 class="before-title"><?php if (!empty($before_title)) { echo $before_title; } ?></h3>
					<h1 class="page-title"><?php if (!empty($alt_title)) { echo $alt_title; } else { the_title(); } ?></h1>
					<h3 class="after-title"><?php if (!empty($after_title)) { echo $after_title; } ?></h3>
				</div>
			</header> <!-- end article header -->
    	</div>
    	<?php } ?>

    	<?php $categories = get_the_category();
    	foreach ($categories as $category) {
    		if ($category->slug=='kern-river') { ?>
		    	<div data-sticky class="sticky kern-nav-wrapper">
		    		<div class="row">
						<div class="column small-10 small-offset-1">
			    			<?php joints_kern_nav(); ?>
			    		</div>
			    	</div>
		    	</div>
    	<?php } 
    	}; ?>

    <div id="inner-content" class="row">
			
	    <div id="main" class="primaryarticle large-12 medium-12 columns" role="main">
						
	    <section class="entry-content column small-10 small-offset-1 medium-12 medium-offset-0" itemprop="articleBody">
		    <?php $legend_text = get_post_meta($post->ID, 'Legend text', true);
		    	if ($legend_text) { echo '<span class="legend">'.$legend_text.'</span><hr class="legend-bar" />'; }
		    	the_content();
		    	wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">
			
		</footer> <!-- end article footer -->
							    
		<?php comments_template(); ?>
							
<?php endwhile; endif; ?>							