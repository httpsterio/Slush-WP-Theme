<?php get_header(); ?>

		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'index'); ?>
			</div>

		</div>
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>