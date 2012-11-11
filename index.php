<?php get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	<div class="panel">
			<div class="post-box">
				<?php get_template_part('loop', 'index'); ?>
			</div>

		</div></div><!-- End Content row -->
		
		 <div class="no-style"><?php get_sidebar(); ?></div>
<?php get_footer(); ?>