<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package summersixteen
 */

?>

	</div><!-- #content -->
	<div class="clear"><span>&nbsp;</span></div>
	<footer class="site-footer">
			<div class="footer_content">
				<?php dynamic_sidebar('Left Footer'); ?>
				<p>&copy;Copyright 2016 Michelle Butts</p>
			</div>
			
	</footer>

	<script src="<?php bloginfo( 'template_url' ); ?>/js/project_page.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.balanced-gallery.min.js"></script>
	
	<?php wp_footer(); ?>
</body>
</html>
