<?php
/*
Template Name: Front page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
					
				<?php get_template_part( 'parts/loop', 'wide-page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
				<?php get_template_part( 'parts/loop', 'pages-grid' ); ?>

				<br clear="all" />

			</div> <!-- end #content -->

<?php get_footer(); ?>
