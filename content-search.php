<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_title("<h1 class='entry-title'>", "</h1>"); ?>

	<small><?php the_category(''); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

	<?php the_excerpt(); ?>

</div>