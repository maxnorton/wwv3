<div class="meta-wrapper fixed">
	<div class="meta-bar">
		<div class="row">
			<div class="small-4 columns">Stuff goes</div>
			<div class="small-4 columns">up here</div>
			<div class="small-4 columns text-right">more stuff</div>
		</div>
	</div>
</div>

<?php if ( is_front ) { get_template_part( 'parts/hero', 'front' ); } ?>

<div class="meta-wrapper sticky show-for-medium-up contain-to-grid">
	<!--div class="meta-bar" data-0="height: 0;" data-20-top="height: 2em;" data-1-top="height: 0;">
		<div class="row">
			<div class="small-4 columns">Stuff goes</div>
			<div class="small-4 columns">up here</div>
			<div class="small-4 columns text-right">more stuff</div>
		</div>
	</div-->
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
				<h1> <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
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