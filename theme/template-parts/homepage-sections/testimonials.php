<?php
	/**
	 * Template part for displaying the testimonials section in homepage
	 */

	$homePageId = get_page_by_title('home')->ID;
	$testimonialTitle = get_field('testimonials_title') ? get_field('testimonials_title') : get_field('testimonials_title', $homePageId);

	$testimonials = get_posts(array(
		'posts_per_page' => -1,
		'post_type'      => 'testimonial',
		'order'          => 'ASC'
	));

	$data = [];

	foreach($testimonials as $testimonial) {
		$testimonialText = strip_tags($testimonial->post_content);
		$data[] = [
			'customer'    => $testimonial->post_title,
			'testimonial' => $testimonialText,
			'image'       => get_the_post_thumbnail_url($testimonial->ID)
		];
	}
?>

<section id="testimonials" class="h-full py-8 sm:py-12 lg:py-16">
	<div class="container mx-auto flex flex-col justify-center items-center">
		<h3 class="secondary-font text-center mb-0 md:mb-8"><?php echo $testimonialTitle; ?></h3>

		<div class="swiper threeColumnSwiper testimonialsSwiper">
			<div class="swiper-wrapper">
				<?php
					foreach($data as $row) {
				?>
					<div class="swiper-slide">
						<div class="testimonial relative mx-4 pb-16 pt-24 md:pt-32 cursor-pointer">
							<img class="absolute rounded-full top-0" src="<?php echo $row['image']; ?>" />
							<h4 class="testimonial-customer text-center mb-4 px-6"><?php echo $row['customer']; ?></h4>
							<p class="testimonial-text font-medium italic text-center mb-4 px-12"><?php echo $row['testimonial']; ?></p>
						</div>
					</div>
				<?php
					}
				?>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>
