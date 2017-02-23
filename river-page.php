<?php
/*
Template Name: River page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<?php get_template_part( 'parts/loop', 'wide-page' ); ?>
				    					
				</div> <!-- end #main -->

				<br clear="all" />

				<div class="row trip-details">
					<div class="columns medium-12">
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

								foreach( $tripquery as $post ) : setup_postdata($post); ?>

									<ul class="pricing-table trip-table no-bullet text-center">
										<li class="title"><?php echo get_the_title($post); ?></li>
										<li class="tripmeta">
											Class <?php echo get_post_meta($post->ID, 'Class', true); ?> &#8212; Minimum age <?php echo get_post_meta($post->ID, 'Minimum age', true); ?>
										</li>
										<li class="price">$99.99</li>
										<li class="description"><?php the_content(); ?></li>
										<li><a class="button" href="#">Book Now</a></li>
									</ul>

						<?php 	endforeach;
							}
						} ?>
					</div>
				</div>
				        
				<br clear="all" />

			</div> <!-- end #content -->

<?php get_footer(); ?>
