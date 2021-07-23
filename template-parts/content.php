<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JunYong
 */

?>

<article class="blog-post-content container section mb-5 pb-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mt-5 mb-3">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
	</header><!-- .entry-header -->

	<?php
	$tldr = get_post_meta(get_the_ID(), 'tldr', true);

	if ($tldr) :
	?>
		<div class="tldr-section">
			<p>
				<span class="fw-bold me-1">TL;DR</span>
				<?php
				echo $tldr;
				?>
			</p>
		</div>
	<?php
	endif;
	?>

	<?php
	junyong_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'junyong'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'junyong'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="see-more-button-section d-flex flex-column align-items-center justify-content-center mt-5 pt-5">
		<p class="mb-3 pt-5">You've reached the end of post.</p>
		<a href="<?php echo get_home_url() ?>#projects" class="btn btn-dark">See All Projects</a>
	</div>

</article>
<!-- #post-<?php the_ID(); ?> -->