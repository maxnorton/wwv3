<div class="meta-wrapper fixed">
	<div class="meta-bar">
		<div class="row">
			<div class="small-4 columns"></div>
			<div class="small-4 columns"></div>
			<div class="small-4 columns text-right"><a href="tel:+18004007238"><i class="fi-telephone"></i>&nbsp;&nbsp;&nbsp;800-400-7238</a>
</div>
		</div>
	</div>
</div>

<?php if ( is_front_page() ) { get_template_part( 'parts/hero', 'front' ); } ?>

<div class="main-bar sticky show-for-medium-up contain-to-grid">
	<nav class="top-bar" data-topbar>
		<section class="top-bar-section right">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
	<hr class="top-rule" />
	<div class="row">
		<section class="top-bar-social medium-12">
			<?php get_template_part( 'parts/widget', 'social' ); ?>
		</section>
	</div>
</div>


<div class="show-for-small-only" <?php if ( !is_front_page() ) { echo 'style="padding-top: 22px;"'; } ?>>
	<nav class="tab-bar">
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
		<li><label>Navigation</label></li>
			<?php joints_off_canvas(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>