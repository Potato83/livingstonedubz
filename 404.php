<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package living-stone
 */

get_header(); ?>

	

			<section class="error-404 not-found">
				<h1>Sorry, this page does not exist.</h1>
				<div class="x404">

					
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/404.png" alt="404">
					
					

				</div>
				
				<div id="back-to-site">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to site</a>
				</div>


			</section><!-- .error-404 -->

	

<?php
get_footer();
