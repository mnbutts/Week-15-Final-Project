<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

get_header(); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<article>
					<p>gallery here</p>
					<div id="instafeed"></div>
					<div>
						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{background:#000; clear:left; font:12px 'Yanone Kaffeesatz',sans-serif; width:100%;}
							/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div id="mc_embed_signup">
						<form class="newsletter" action="//michellebutts.us13.list-manage.com/subscribe/post?u=00a3690bd7ba1f5e1d86b5c43&amp;id=8fc6b29cd6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							<label for="mce-EMAIL">Subscribe to our mailing list</label>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_00a3690bd7ba1f5e1d86b5c43_8fc6b29cd6" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
               </div>
</form>
</div>

<!--End mc_embed_signup-->
					</div>
					<?php 

						$images = get_field('eviltwin_gallery');

						if( $images ): ?>
						    <div>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <a href="<?php echo $image['url']; ?>">
						                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
						                </a>
						                <p><?php echo $image['caption']; ?></p>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						    </div>
					<?php endif; ?>
				</article>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-preview', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
