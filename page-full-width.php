<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="primaryarticle large-12 medium-12 columns" role="main">
					
						<?php get_template_part( 'parts/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
				<?php if ( is_front_page() ) { get_template_part( 'parts/loop', 'pages-grid' ); } ?>

				<br clear="all" />

			</div> <!-- end #content -->

<?php get_footer(); ?>
