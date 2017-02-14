<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    	<div class="river-featured-image">
    		<?php the_post_thumbnail('large'); ?>
    	</div>

		<header class="article-header column small-12">
			<?php $before_title = get_post_meta($post->ID, 'Before-title text', true);
				$alt_title = get_post_meta($post->ID, 'Alternate title text', true);
				$after_title = get_post_meta($post->ID, 'After-title text', true);
			?>
			<h3 class="before-title"><?php if (!empty($before_title)) { echo $before_title; } ?></h3>
			<h1 class="page-title"><?php if (!empty($alt_title)) { echo $alt_title; } else { the_title(); } ?></h1>
			<h3 class="after-title"><?php if (!empty($after_title)) { echo $after_title; } ?></h3>
		</header> <!-- end article header -->
						
	    <section class="entry-content column small-10 small-offset-1" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
			
		</footer> <!-- end article footer -->
							    
		<?php comments_template(); ?>
							
<?php endwhile; endif; ?>							