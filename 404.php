<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JunYong
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found section container d-flex flex-column align-items-center justify-content-center min-vh-100">
		<object type="image/svg+xml" class="icon me-2" data="<?php echo get_bloginfo('template_url') ?>/icons/broken.svg" width="250" height="200" alt="SVG Icon of broken link"></object>
		<h1 class="page-title mt-5 text-center"><?php esc_html_e('Oops! Page not found.', 'junyong'); ?></h1>
		<div class="page-content text-center">
			<p><?php esc_html_e('The link you clicked may be broken or the page may have been removed or renamed.', 'junyong'); ?></p>
			<a class="btn btn-outline-secondary mt-5 mb-5" href="<?php echo get_home_url() ?>" role="button">Go to Home</a>
			
		</div>
	</section>

</main><!-- #main -->