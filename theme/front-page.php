<?php
/**
 * The front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timelesstreasuresph
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php
				get_template_part('template-parts/homepage-sections/testimonials');
				get_template_part('template-parts/homepage-sections/about-us');
				get_template_part('template-parts/homepage-sections/services');
				get_template_part('template-parts/homepage-sections/contact');
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
