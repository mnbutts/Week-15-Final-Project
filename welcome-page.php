<?php 
/*
Template Name: Welcome
*/
get_header(); ?>
	<body class="welcome_page_container">
			<?php
			while ( have_posts() ) : the_post();
		
				get_template_part( 'template-parts/welcome-content', 'page' );

			endwhile; // End of the loop.
			?>
	</body>
<?php get_footer(); ?>
