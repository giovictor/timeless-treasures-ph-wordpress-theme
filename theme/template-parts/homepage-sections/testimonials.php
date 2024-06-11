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
			'testimonial' => strlen($testimonialText) > 300 ? substr($testimonialText, 0, 300) . '...' : $testimonialText,
			'image'       => get_the_post_thumbnail_url($testimonial->ID)
		];
	}
?>

<section id="testimonials" class="h-full py-8 sm:py-12 lg:py-24">
	<div class="container mx-auto flex flex-col justify-center items-center">
		<h3 class="secondary-font text-center mb-0 md:mb-8"><?php echo $testimonialTitle; ?></h3>

		<div class="swiper oneColumnSwiper testimonialsSwiper">
			<div class="swiper-wrapper">
				<?php
					foreach($data as $row) {
				?>
					<div class="swiper-slide">
						<div class="testimonial px-10 md:px-16 cursor-pointer grid grid-cols-12 gap-0 md:gap-12 items-center">
							<div class="col-span-12 md:col-span-4 lg:col-span-3 flex justify-center mt-0 sm:mt-4">
								<img class="rounded-full" src="<?php echo $row['image']; ?>" />
							</div>
							<div class="col-span-12 md:col-span-8 lg:col-span-9">
								<p class="testimonial-text font-medium italic mb-4"><?php echo '"' . $row['testimonial'] . '"'; ?></p>
								<p class="testimonial-customer font-light text-right"><?php echo '- ' .$row['customer']; ?></p>
							</div>
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
