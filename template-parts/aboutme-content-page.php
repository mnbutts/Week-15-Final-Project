<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

?>


	<article class="aboutme_page">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

		<div class="page_container">
		    <div class="page_content_empty">
			</div>
			<div class="aboutme_content page_content">
				<?php 
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sanctuary_wk5' ),
					'after'  => '</div>',
					) );
			?></div>
			<div class="clear"></div>
		</div><!-- .entry-content -->
		<div class="clear">&nbsp;</div>

</article><!-- #post-## -->
