<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
	<?php the_excerpt(); ?>

</div>