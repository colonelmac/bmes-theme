<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<span id="page-title"><?php the_title(); ?></span> 
	<?php the_content(); ?>

<?php endwhile; ?>

<div class="post_navigation">
	<?php posts_nav_link(); ?>
</div>

<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>