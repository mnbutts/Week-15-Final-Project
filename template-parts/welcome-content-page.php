<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

?>


	<article class="welcome_page">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="welcome_main_div">
			<p class="greeting">Hello!</p>
			<div class="welcome_content">
				<?php 
				the_content(); ?>	
			</div>
			<a class="email_button" href="http://localhost:8888/contact-me/">Email Me</a>
			<div class="clear"></div>
		</div>
		<!-- .entry-content -->
		<div class="clear">&nbsp;</div>
		<section>
			
		</section>

	</article><!-- #post-## -->
