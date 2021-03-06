<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

?>

<article class="main_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog_post">
		<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			}

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta date">
				<?php summersixteen_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
		</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'summersixteen' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			the_post_thumbnail();
		?></p>
	</div><!-- .entry-content -->
	<div class="spacer">&nbsp;</div>
	 <a href="<?php the_permalink(); ?>" class="w3-btn main_button read_more_button">Read More</a>

	</div>
	
<!-- 
	<footer class="entry-footer">
		<?php summersixteen_entry_footer(); ?>
	</footer> --><!-- .entry-footer -->
</article><!-- #post-## -->
