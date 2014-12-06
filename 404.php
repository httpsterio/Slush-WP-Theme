<?php get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<h1><?php _e('File Not Found', 'slush'); ?></h1>
				<div class="error">
					<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'slush'); ?></p>
				</div>
				<p><?php _e('Please try the following:', 'slush'); ?></p>
				<ul> 
					<li><?php _e('Check your spelling', 'slush'); ?></li>
					<li><?php printf(__('Return to the <a href="%s">home page</a>', 'slush'), home_url()); ?></li>
					<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'slush'); ?></li>
				</ul>
			</div>

		</div><!-- End Content row -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>