<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="panel"><article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php slush_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div></div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'slush'), 'after' => '</p></nav>' )); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>