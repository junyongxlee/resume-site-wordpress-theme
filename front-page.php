<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JunYong
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="min-vh-100 section d-flex flex-colum align-items-center justify-content-center" id="home">
		<div class="row container">
			<div>
				<div class="text-center title">
					<h1>Hello World.</h1>
					<h1>I'm Jun Yong.</h1>
				</div>
				<div class="text-center description mt-4">
					<p class="mb-0">Given time, I make tough challenges a piece of <span class="h3">&#x1F370;</span>.</p>
					<p>Scroll to see how I can help you and your company.</p>
				</div>
				<div class="text-center image">
					<video autoplay loop muted>
						<source type="video/mp4" src="<?php echo get_bloginfo('template_url') ?>/img/scroll.mp4">
						<source type="video/webm" src="<?php echo get_bloginfo('template_url') ?>/img/scroll.webm">
					</video>
				</div>
			</div>
		</div>
	</div>

	<div class="min-vh-100  section bg-light d-flex flex-column" id="projects">
		<h1 class="pt-5 mb-5 text-center">Projects</h1>
		<?php
		get_template_part('template-parts/projects', 'page');
		?>
	</div>
	<div class="min-vh-100 text-left container section" id="aboutme">
		<div class="row align-items-center h-100">
			<div class="col col-lg-6">
				<h1 class="pt-5 mb-5">About Me</h1>
				<div class="mb-2 wrapper">
					<h2 id="im-a-text">I'm a</h1>
						<div class="words">
							<span>
								<h2>Python Dev</h2>
							</span>
							<span>
								<h2>Data Analyst</h2>
							</span>
							<span>
								<h2>Software Dev</h2>
							</span>
							<span>
								<h2>Full-Stack Dev</h2>
							</span>
							<span>
								<h2>Android Dev</h2>
							</span>
							<span>
								<h2>Python Dev</h2>
							</span>
						</div>
				</div>
				<p>Currently in a identity crisis where I struggle to find where I belong in the career world. I like developing apps, but I also enjoy analyzing data, at the same time I’m fascinated by new techs like Machine Learning. Other times I like the idea of being in the business world and enjoy giving ideas to improve a business with solutions that does not necessary has to do with softwares.</p>
				<p>Why hire me? I’m a fast learner. I might not yet possess the knowledge required for the job, but I can pick it up fast and will be able to contribute in no time.</p>
				<p>One thing I am sure is that I am not a designer. Which you’d probably noticed by now judging from the lack of colours in this website and the generally ugly UI in all my solo projects if no designers were involved.</p>
			</div>
		</div>
	</div>
	<div class="min-vh-100 text-left  section bg-light" id="education">
		<div class="container pb-5">
			<div class="col col-lg-6 h-100">
				<h1 class="pt-5">Education</h1>
				<div class="card w-100 mt-5">
					<div class="card-body">
						<h5 class="card-title">Bachelor of Computer Science (Data Science)</h5>
						<p class="card-text school">Multimedia University, Malaysia</p>
						<p class="card-text time">2019 - Current</p>
						<p class="card-text result">Current CGPA: 3.93</p>
					</div>
				</div>
				<div class="card w-100 mt-4">
					<div class="card-body">
						<h5 class="card-title">CIE A-Levels</h5>
						<p class="card-text school">Riam Institute of Technology, Sarawak</p>
						<p class="card-text time">2016-2017</p>
						<p class="card-text result">Results: 1A* 4A (Chem, Physics, Math, Thinking Skills, Chinese Language)</p>
					</div>
				</div>
				<div class="card w-100 mt-4">
					<div class="card-body">
						<h5 class="card-title">SPM</h5>
						<p class="card-text school">SMK Chung Hua Miri, Sarawak</p>
						<p class="card-text time">2011-2015</p>
						<p class="card-text result">Results: 2A+, 4A, 2A-, 1B+, 1B</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="min-vh-100 d-flex flex-column align-items-center justify-content-center container section" id="contact">
		<h1 class="row mb-5">Get in Touch</h1>
		<div class="row justify-content-md-center  mb-5 container p-0">
			<div class="col-lg-auto contact-form p-5 bg-light shadow">
				<h3 class="mb-3">Say Hi!</h3>
				<?php echo do_shortcode(get_theme_mod('contact_form_shortcode')); ?>

			</div>
			<div class="col-lg-auto contact-details p-5 bg-dark text-light shadow">
				<h3>Other Profiles</h3>
				<p>Find out more about me.</p>
				<div class="mt-5 d-flex flex-row">
					<object type="image/svg+xml" class="icon me-2" data="<?php echo get_bloginfo('template_url') ?>/icons/github-light.svg" width="25" height="25" alt="SVG Icon of Github"></object>
					<a class="link-light" rel="noopener" href="https://github.com/junyongxlee" target="_blank">github.com/junyongxlee</a>
				</div>
				<div class="mt-4 d-flex flex-row">
					<object type="image/svg+xml" class="icon me-2" data="<?php echo get_bloginfo('template_url') ?>/icons/linkedin-light.svg" width="25" height="25" alt="SVG Icon of LinkedIn"></object>
					<a class="link-light" rel="noopener" href="https://linkedin.com/in/jun-yong" target="_blank">linkedin.com/in/jun-yong</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	// while (have_posts()) :
	// 	the_post();

	// 	get_template_part('template-parts/content', 'page');

	// 	// If comments are open or we have at least one comment, load up the comment template.
	// 	if (comments_open() || get_comments_number()) :
	// 		comments_template();
	// 	endif;

	// endwhile; // End of the loop.
	?>

</main><!-- #main -->


<?php wp_footer(); // get_footer();
?>