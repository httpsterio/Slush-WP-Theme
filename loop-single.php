<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); the_post_thumbnail();?>
	<div class="panel"><article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php slush_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>


			<?php

if (is_single() && is_post_type('releases')){

$titlecpt = types_render_field("title", array( "output"=>"html"));
$artistcpt = types_render_field("artist", array("output"=>"html"));
$trackscpt = types_render_field("tracks", array("output"=>"html"));
$downloadcpt = types_render_field("download", array("output"=>"html"));
 
 
printf("<h3>Title</h3> %s",$titlecpt);
printf("<br><h3>Artist</h3> %s",$artistcpt);
printf("<br><h3>Tracks</h3> %s",$trackscpt);
printf("<br><h3>Download</h3> %s",$downloadcpt);

} ?>



		</div></div>
		<footer>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'slush'), 'after' => '</p></nav>' )); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>