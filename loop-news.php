<?php query_posts('category_name=news'); ?>
<?php $count = 0; ?>
<?php if(have_posts()): while(have_posts()): the_post(); $count++; ?>

	<div class="post <?php if($count == 1) { echo 'first-post'; } ?>" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="postmetadata">
			By <?php the_author(); ?> on <?php echo get_the_date(); ?>
		</p>

		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
	</div>
	
<?php endwhile; ?>

<div class="post_navigation">
	<?php posts_nav_link(); ?>
</div>


<?php else: ?>
<?php endif; ?>