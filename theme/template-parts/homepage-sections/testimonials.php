<?php
	/**
	 * Template part for displaying the testimonials section in homepage
	 */

	$testimonials = get_posts(array(
		'posts_per_page' => -1,
		'post_type'      => 'testimonial',
		'order'          => 'ASC'
	));

	$data = [];

	foreach($testimonials as $testimonial) {
		$data[] = [
			'customer'    => $testimonial->post_title,
			'testimonial' => $testimonial->post_content,
			'image'       => get_the_post_thumbnail_url($testimonial->ID)
		];
	}
?>

<section id="testimonials" class="h-screen py-24">
	<div class="container mx-auto flex flex-col justify-center items-center">
		<h3 class="secondary-font text-center mb-8">Client Testimonials</h3>

		<div class="swiper threeColumnSwiper testimonialsSwiper">
			<div class="swiper-wrapper">
				<?php
					foreach($data as $row) {
				?>
					<div class="swiper-slide">
						<div class="testimonial relative mx-4 px-12 pb-16 pt-32 cursor-pointer">
							<img class="absolute rounded-full top-0" src="<?php echo $row['image']; ?>" />
							<h4 class="text-center mb-2"><?php echo $row['customer']; ?></h4>
							<div class="font-light text-center overflow-hidden text-ellipsis"><?php echo $row['testimonial']; ?></div>
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
