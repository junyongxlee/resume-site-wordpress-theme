<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JunYong
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'junyong'); ?></a> -->

		<header id="masthead" class="site-header">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white p-3">
				<a class="navbar-brand" href="<?php echo get_home_url() ?>">Jun Yong</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

					<?php if (is_front_page()) : ?>
						<div style="position: relative; width: 0; height: 0" class="d-none d-lg-block">
							<div class="cute-ghost-icon">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/cute-ghost-icon.png" alt="cute-ghost-icon" />
							</div>
						</div>
					<?php endif; ?>

					<div class="navbar-nav ">
						<a class="nav-item nav-link px-3" id="nav-item-home" href="<?php echo get_home_url() ?>#home">Home</a>
						<a class="nav-item nav-link px-3" id="nav-item-projects" href="<?php echo get_home_url() ?>#projects">Projects</a>
						<a class="nav-item nav-link px-3" id="nav-item-aboutme" href="<?php echo get_home_url() ?>#aboutme">About Me</a>
						<a class="nav-item nav-link px-3" id="nav-item-education" href="<?php echo get_home_url() ?>#education">Education</a>
						<a class="nav-item nav-link px-3" id="nav-item-contact" href="<?php echo get_home_url() ?>#contact">Contact</a>
					</div>
				</div>
				<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ">
						<li class="nav-item">
							<a class="nav-link px-3" id="nav-item-home" href="<?php echo get_home_url() ?>#home" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" >Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" id="nav-item-projects" href="<?php echo get_home_url() ?>#projects">Projects</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link px-3" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" id="nav-item-aboutme" href="<?php echo get_home_url() ?>#aboutme">About Me</a>

						</li>
						<li class="nav-item">
							<a class="nav-link px-3" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" id="nav-item-education" href="<?php echo get_home_url() ?>#education">Education</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show" id="nav-item-contact" href="<?php echo get_home_url() ?>#contact">Contact</a>
						</li>
					</ul>
				</div> -->
	</div>
	</nav>
	</header><!-- #masthead -->