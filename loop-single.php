<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="panel"><article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><a href="#"><?php the_title(); ?></a></h2>
			<?php custom_entry_meta(); ?>
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div></div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			<p><?php the_tags(); ?></p>
		</footer><br />
		<div class="panel"><?php comments_template(); ?></div>
	</article>
<?php endwhile; // End the loop ?>