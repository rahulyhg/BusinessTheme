<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		global $wp_query;
		$total_results = $wp_query->post_count;
	?>	

	<?php if ($total_results) : ?>

		<p>Showing <?php echo $total_results; ?> results for "<?php echo get_search_query(); ?>"</p>
		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
		<?php the_excerpt(); ?>

	<?php endif; ?>

</div>