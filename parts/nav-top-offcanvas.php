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

<div class="main-bar sticky show-for-medium-up contain-to-grid" <?php if ( is_front_page() ) { ?>data-0="padding-top: 0px;" data-23-top="padding-top: 0px;" data-1-top="padding-top: 22px;"<?php } else { echo 'style="padding-top: 22px;"'; } ?>>
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
				<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				<!--h2>California whitewater rafting since 1975</h2-->
			</li>
		</ul>		
		<section class="top-bar-section right">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
</div>

<div class="show-for-small-only">
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