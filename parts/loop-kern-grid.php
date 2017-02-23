<?php 

	$menu_name = 'kern-grid';
	$grid_items_IDs = [];

	if ( $locations = get_nav_menu_locations() ) {
		$menu = wp_get_nav_menu_object( $locations[$menu_name] );
		$grid_items = wp_get_nav_menu_items($menu);
		foreach( (array) $grid_items as $item ) {
			$grid_items_IDs[] = $item->object_id;
		}
	}

	$args = array (
		'include' => $grid_items_IDs,
		'sort_column' => 'menu_order',
	);
	$posts = get_pages( $args );
?>

     <?php 

     	$grid_id = 1;
        foreach( $posts as $post ) : setup_postdata($post); $grid_id++; ?>

	        <div id="grid-top" class="pane<?php if ($grid_id % 2 == 0) { echo '2'; } else { echo '3'; } ?>">
			<div class="row kern-grid" data-equalizer> <!--Begin Row:--> 

		    <!--Item: -->
			<div class="columns medium-12">

				<div class="<?php pages_grid_panel_classes($grid_id); ?>" data-equalizer-watch>
		    
					<article class="grid-entry" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

						<!--php if ($grid_id == 4) { -->
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" />
							<!--section class="featured-image <?php pages_grid_img_classes($grid_id);?>" itemprop="articleBody">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
							</section--> <!-- end article section -->
						<!--php } -->

						<div class="grid-text-panel">
							<header class="article-header">
								<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
							</header> <!-- end article header -->	
							<section class="grid-legend">
								<?php $grid_legend = get_post_meta($post->ID, 'Grid legend', true);
		    						if ($grid_legend) { echo '<span>'.$grid_legend.'</span>'; } ?>
		    				</section>
						</div>

					</article> <!-- end article -->

				</div>
				
			</div>

			<div class="columns medium-12 section-excerpt">
				<section class="entry-content" itemprop="articleBody">
					<?php the_content('Read on...'); ?> 
				</section> <!-- end article section -->
			</div>

			<div class="columns medium-12 trip-details">
				<?php 	$categories = get_the_category();
				    	foreach ($categories as $category) {
							if ($category->parent != 0) {
								$current_river = $category->slug;
								$args = array(
									'post_type' => 'trip_details', 
									'orderby' => 'title',
									'order' => 'asc',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => $current_river
										)
									)
								);
								
								$tripquery = get_posts( $args );

								foreach( $tripquery as $trip ) : setup_postdata($trip); ?>
									<ul class="pricing-table trip-table no-bullet text-center">
										<li class="title"><?php echo get_the_title($trip); ?></li>
										<li class="tripmeta">
											Class <?php echo get_post_meta($trip->ID, 'Class', true); ?> &#8212; Minimum age <?php echo get_post_meta($trip->ID, 'Minimum age', true); ?>
										</li>
										<li class="price">$99.99</li>
										<li class="description"><?php the_content(); ?></li>
										<li><a class="button" href="#">Book Now</a></li>
									</ul>
				<?php 			endforeach;
							}
						} ?>
			</div>

			</div> <!--End row -->
		
		</div> <!--End pane -->
		
	 	<?php endforeach; ?>

<!--</div>  <!--End Row: --> 
<!--</div> <!--End pane -->	

<?php wp_reset_postdata(); ?>
					     
<?php joints_page_navi(); ?>		

<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
