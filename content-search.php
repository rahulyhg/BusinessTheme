<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		global $wp_query;
		$total_results = $wp_query->found_posts;

		if ($total_results > 0) {
			echo the_title("<h1 class='entry-title'>", "</h1>");
			the_excerpt();	
		} else {
			echo "This is here";
		} 

	?>

</div>