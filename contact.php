<?php
/*
Template Name: Contact form
*/
get_header(); ?>

		<!-- Row for main content area -->
		<div id="content" class="twelve columns panel" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
   

		          <div class="row collapse">
		            <div class="two columns"><label class="inline">Your Name</label></div>
		            <div class="ten columns"><input type="text" id="yourName" placeholder="Your beautiful name" />
		          </div>
		          <div class="row collapse">
		            <div class="two columns"><label class="inline">Your Email</label></div>
		            <div class="ten columns"><input type="text" id="yourEmail" placeholder="Fun and quirky email" />
		          </div>

		          <label>What's up?</label>
		          <textarea rows="4" placeholder="Whatcha wanna say?"></textarea>

		          <button type="submit" class="radius button">Submit</button>
			
			</div></div></div>

		</div><!-- End Content row -->
		
		
<?php get_footer(); ?>