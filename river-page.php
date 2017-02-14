<?php
/*
Template Name: River page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->

					<br clear="all" />

    				<div class="row trip-details">
						<?php 	$categories = get_the_category();
								$current_river = get_object_vars($categories[0]);
								$args = array(
									'post_type' => 'trip_details', 
									'orderby' => 'title',
									'order' => 'asc',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => 'kings-river'
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

						<?php endforeach; ?>
					</div>
				    
				</div> <!-- end #inner-content -->
    
				<br clear="all" />

			</div> <!-- end #content -->

<?php get_footer(); ?>
