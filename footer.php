		</div><!-- End Main row -->
		
		<div class="foot"><footer id="content-info" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			<div class="row">
				<div class="four columns"><br>
					&copy; 2008-<?php echo date('Y'); ?> All rights reserved.
					<br>
					Powered by Slush.<br><br>
				</div>
				<br><?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => false, 'menu_class' => 'eight columns footer-nav')); ?>
			</div></div>
		</footer>
			
	</div>
	
	<?php wp_footer(); ?>
</body>
</html>