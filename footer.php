		</div><!-- End Main row -->
		<br><br>
		<div class="twelve columns"><footer id="content-info" role="contentinfo">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
			<div class="row">
				<<div class="four columns">
					&copy; 2008-<?php echo date('Y'); ?> All rights reserved.
					<br>
					Made by <a href="http://alajarvela.net" class="author">Alajarvela</a>.
				</div>
				<?php wp_nav_menu(array('theme_location' => 'utility_navigation', 'container' => false, 'menu_class' => 'eight columns footer-nav')); ?>
			</div></div>
		</footer>
			
	</div><!-- Container End -->
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); ?>
</body>
</html>