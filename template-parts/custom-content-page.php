<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

?>


	<article class="custom_article">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		
			<div class="contact page_container">
				<?php 
				the_content();

			?></div>
			<div class="clear"></div>
		<!-- .entry-content -->
		<div class="clear">&nbsp;</div>
</article><!-- #post-## -->
